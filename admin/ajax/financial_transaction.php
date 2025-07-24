<?php
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../src/Config/config.php';
$database = new \ObelisIA\Database\Database();
$conn = $database->getConnection();
$auth = new \ObelisIA\Auth\Auth($conn);

// Verificar si es admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    http_response_code(403);
    echo json_encode([
        'success' => false, 
        'message' => 'Acceso denegado'
    ]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Método no permitido'
    ]);
    exit;
}

try {
    $database = new Database();
    $conn = $database->getConnection();
    
    $data = json_decode(file_get_contents('php://input'), true);
    
    // Verificación de token CSRF
    if (!isset($_SESSION['csrf_token']) || !isset($data['csrf_token']) || $data['csrf_token'] !== $_SESSION['csrf_token']) {
        http_response_code(403);
        echo json_encode([
            'success' => false,
            'message' => 'Token CSRF inválido'
        ]);
        exit;
    }
    
    $type = $data['type'] ?? 'expense'; // income, expense
    $concept = $data['concept'] ?? '';
    $amount = (float)($data['amount'] ?? 0);
    $category = $data['category'] ?? '';
    $date = $data['date'] ?? date('Y-m-d');
    $method = $data['method'] ?? 'bank_transfer';
    $notes = $data['notes'] ?? '';
    
    // Validaciones
    if (empty($concept)) {
        throw new Exception("El concepto es requerido");
    }
    
    if ($amount <= 0) {
        throw new Exception("El monto debe ser mayor a 0");
    }
    
    if (empty($category)) {
        throw new Exception("La categoría es requerida");
    }
    
    // Ajustar monto según tipo (gastos son negativos)
    $finalAmount = $type === 'expense' ? -abs($amount) : abs($amount);
    
    // Insertar transacción
    $stmt = $conn->prepare("
        INSERT INTO financial_transactions 
        (type, concept, amount, category, transaction_date, payment_method, notes, admin_id, created_at) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())
    ");
    
    $stmt->execute([
        $type, $concept, $finalAmount, $category, 
        $date, $method, $notes, $_SESSION['user_id']
    ]);
    
    $transactionId = $conn->lastInsertId();
    
    // Obtener estadísticas actualizadas
    $statsStmt = $conn->prepare("
        SELECT 
            SUM(CASE WHEN amount > 0 THEN amount ELSE 0 END) as total_income,
            SUM(CASE WHEN amount < 0 THEN ABS(amount) ELSE 0 END) as total_expenses,
            SUM(amount) as net_amount,
            COUNT(*) as total_transactions
        FROM financial_transactions 
        WHERE YEAR(transaction_date) = YEAR(CURDATE())
    ");
    $statsStmt->execute();
    $stats = $statsStmt->fetch(PDO::FETCH_ASSOC);
    
    // Log de actividad
    try {
        $logStmt = $conn->prepare("
            INSERT INTO admin_activity_log (admin_id, action, target_type, target_id, details, created_at) 
            VALUES (?, 'financial_transaction_added', 'transaction', ?, ?, NOW())
        ");
        $details = json_encode([
            'type' => $type,
            'concept' => $concept,
            'amount' => $finalAmount,
            'category' => $category
        ]);
        $logStmt->execute([$_SESSION['user_id'], $transactionId, $details]);
    } catch (Exception $logError) {
        error_log("Error logging transaction: " . $logError->getMessage());
    }
    
    echo json_encode([
        'success' => true,
        'message' => ucfirst($type === 'expense' ? 'Gasto' : 'Ingreso') . ' agregado exitosamente',
        'transaction_id' => $transactionId,
        'stats' => $stats
    ]);

} catch (Exception $e) {
    error_log("Error en financial_transaction.php: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
?>
