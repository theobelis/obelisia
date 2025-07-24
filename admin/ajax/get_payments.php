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
        'message' => 'Acceso denegado',
        'error_code' => 'INSUFFICIENT_PERMISSIONS',
        'user_role' => $_SESSION['role'] ?? 'none'
    ]);
    exit;
}

try {
    $database = new Database();
    $conn = $database->getConnection();
    
    // Parámetros de filtrado
    $filter = $_GET['filter'] ?? 'all';
    $dateFrom = $_GET['date_from'] ?? '';
    $dateTo = $_GET['date_to'] ?? '';
    $page = (int)($_GET['page'] ?? 1);
    $limit = (int)($_GET['limit'] ?? 20);
    $offset = ($page - 1) * $limit;
    
    // Construir consulta base
    $whereConditions = [];
    $params = [];
    
    // Filtro por estado
    if ($filter !== 'all') {
        $whereConditions[] = "p.status = ?";
        $params[] = $filter;
    }
    
    // Filtro por fecha
    if (!empty($dateFrom)) {
        $whereConditions[] = "DATE(p.created_at) >= ?";
        $params[] = $dateFrom;
    }
    
    if (!empty($dateTo)) {
        $whereConditions[] = "DATE(p.created_at) <= ?";
        $params[] = $dateTo;
    }
    
    $whereClause = !empty($whereConditions) ? "WHERE " . implode(" AND ", $whereConditions) : "";
    
    // Obtener estadísticas de pagos
    $statsQuery = "
        SELECT 
            COUNT(*) as total_payments,
            COUNT(CASE WHEN status = 'completed' THEN 1 END) as completed_payments,
            COUNT(CASE WHEN status = 'pending' THEN 1 END) as pending_payments,
            COUNT(CASE WHEN status = 'failed' THEN 1 END) as failed_payments,
            COUNT(CASE WHEN status = 'refunded' THEN 1 END) as refunded_payments,
            COALESCE(SUM(CASE WHEN status = 'completed' THEN amount ELSE 0 END), 0) as total_revenue,
            COALESCE(SUM(CASE WHEN status = 'completed' AND MONTH(created_at) = MONTH(NOW()) THEN amount ELSE 0 END), 0) as monthly_revenue,
            COUNT(CASE WHEN status = 'completed' AND DATE(created_at) = DATE(NOW()) THEN 1 END) as completed_today
        FROM payments p
        $whereClause
    ";
    
    $stmt = $conn->prepare($statsQuery);
    $stmt->execute($params);
    $stats = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Obtener pagos con información de usuarios
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
        LIMIT $limit OFFSET $offset
    ";
    
    $stmt = $conn->prepare($paymentsQuery);
    $stmt->execute($params);
    $payments = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Obtener total de registros para paginación
    $totalQuery = "SELECT COUNT(*) as total FROM payments p $whereClause";
    $stmt = $conn->prepare($totalQuery);
    $stmt->execute($params);
    $totalRecords = (int)$stmt->fetch()['total'];
    
    $totalPages = ceil($totalRecords / $limit);
    
    // Formatear datos de pagos
    $formattedPayments = array_map(function($payment) {
        return [
            'id' => (int)$payment['id'],
            'transaction_id' => $payment['transaction_id'],
            'amount' => number_format((float)$payment['amount'], 2),
            'currency' => $payment['currency'],
            'status' => $payment['status'],
            'payment_method' => $payment['payment_method'],
            'gateway' => $payment['gateway'],
            'plan_type' => $payment['plan_type'],
            'description' => $payment['description'],
            'username' => $payment['username'] ?? 'Usuario eliminado',
            'email' => $payment['email'] ?? 'N/A',
            'full_name' => $payment['full_name'] ?? 'N/A',
            'created_at' => $payment['created_at'],
            'completed_at' => $payment['completed_at']
        ];
    }, $payments);
    
    // Respuesta exitosa
    echo json_encode([
        'success' => true,
        'data' => $formattedPayments,  // Cambiar de 'payments' a 'data'
        'stats' => [
            'total_payments' => (int)$stats['total_payments'],
            'completed_payments' => (int)$stats['completed_payments'],
            'pending_payments' => (int)$stats['pending_payments'],
            'failed_payments' => (int)$stats['failed_payments'],
            'refunded_payments' => (int)$stats['refunded_payments'],
            'total_revenue' => (float)$stats['total_revenue'],
            'monthly_revenue' => (float)$stats['monthly_revenue'],
            'completed_today' => (int)$stats['completed_today']
        ],
        'pagination' => [
            'current_page' => $page,
            'total_pages' => $totalPages,
            'total_records' => $totalRecords,
            'limit' => $limit,
            'has_next' => $page < $totalPages,
            'has_prev' => $page > 1
        ]
    ]);

} catch (Exception $e) {
    error_log("Get payments error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Error del servidor: ' . $e->getMessage(),
        'error_code' => 'SERVER_ERROR'
    ]);
}
?>
