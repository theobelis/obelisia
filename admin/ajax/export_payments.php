<?php
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../src/Config/config.php';
$database = new \ObelisIA\Database\Database();
$conn = $database->getConnection();
$auth = new \ObelisIA\Auth\Auth($conn);

// Verificar si es admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    http_response_code(403);
    header('Content-Type: text/plain');
    echo 'Acceso denegado';
    exit;
}

try {
    $database = new Database();
    $conn = $database->getConnection();
    
    // Parámetros de filtrado
    $filter = $_GET['filter'] ?? 'all';
    $dateFrom = $_GET['date_from'] ?? '';
    $dateTo = $_GET['date_to'] ?? '';
    
    // Construir consulta
    $whereConditions = [];
    $params = [];
    
    if ($filter !== 'all') {
        $whereConditions[] = "p.status = ?";
        $params[] = $filter;
    }
    
    if (!empty($dateFrom)) {
        $whereConditions[] = "DATE(p.created_at) >= ?";
        $params[] = $dateFrom;
    }
    
    if (!empty($dateTo)) {
        $whereConditions[] = "DATE(p.created_at) <= ?";
        $params[] = $dateTo;
    }
    
    $whereClause = !empty($whereConditions) ? "WHERE " . implode(" AND ", $whereConditions) : "";
    
    // Obtener datos de pagos
    $paymentsQuery = "
        SELECT 
            p.id,
            p.transaction_id,
            p.amount,
            p.currency,
            p.status,
            p.payment_method,
            p.gateway,
            p.plan_type,
            p.description,
            p.created_at,
            p.completed_at,
            u.username,
            u.email,
            u.full_name
        FROM payments p
        LEFT JOIN users u ON p.user_id = u.id
        $whereClause
        ORDER BY p.created_at DESC
    ";
    
    $stmt = $conn->prepare($paymentsQuery);
    $stmt->execute($params);
    $payments = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Configurar headers para descarga CSV
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="pagos_' . date('Y-m-d') . '.csv"');
    
    // Crear archivo CSV
    $output = fopen('php://output', 'w');
    
    // BOM para UTF-8
    fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));
    
    // Encabezados
    fputcsv($output, [
        'ID',
        'ID Transacción',
        'Usuario',
        'Email',
        'Monto',
        'Moneda',
        'Estado',
        'Método de Pago',
        'Gateway',
        'Plan',
        'Descripción',
        'Fecha Creación',
        'Fecha Completado'
    ]);
    
    // Datos
    foreach ($payments as $payment) {
        fputcsv($output, [
            $payment['id'],
            $payment['transaction_id'],
            $payment['username'] ?? 'Usuario eliminado',
            $payment['email'] ?? 'N/A',
            $payment['amount'],
            $payment['currency'],
            $payment['status'],
            $payment['payment_method'],
            $payment['gateway'],
            $payment['plan_type'],
            $payment['description'],
            $payment['created_at'],
            $payment['completed_at'] ?? 'N/A'
        ]);
    }
    
    fclose($output);

} catch (Exception $e) {
    error_log("Export payments error: " . $e->getMessage());
    http_response_code(500);
    header('Content-Type: text/plain');
    echo 'Error al exportar datos: ' . $e->getMessage();
}
?>
