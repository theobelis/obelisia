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
        'error_code' => 'INSUFFICIENT_PERMISSIONS'
    ]);
    exit;
}

try {
    $database = new Database();
    $conn = $database->getConnection();
    
    // Parámetros de paginación y filtrado
    $page = (int)($_GET['page'] ?? 1);
    $limit = (int)($_GET['limit'] ?? 20);
    $search = $_GET['search'] ?? '';
    $membershipFilter = $_GET['membership'] ?? 'all';
    $statusFilter = $_GET['status'] ?? 'all';
    $orderBy = $_GET['order_by'] ?? 'created_at';
    $orderDir = $_GET['order_dir'] ?? 'DESC';
    
    $offset = ($page - 1) * $limit;
    
    // Construir condiciones WHERE
    $whereConditions = ["role != 'admin'"]; // Excluir admins de la lista
    $params = [];
    
    // Filtro de búsqueda
    if (!empty($search)) {
        $whereConditions[] = "(username LIKE ? OR email LIKE ? OR full_name LIKE ?)";
        $searchParam = "%$search%";
        $params[] = $searchParam;
        $params[] = $searchParam;
        $params[] = $searchParam;
    }
    
    // Filtro por membresía
    if ($membershipFilter !== 'all') {
        $whereConditions[] = "membership_type = ?";
        $params[] = $membershipFilter;
    }
    
    // Filtro por estado
    if ($statusFilter !== 'all') {
        $whereConditions[] = "status = ?";
        $params[] = $statusFilter;
    }
    
    $whereClause = "WHERE " . implode(" AND ", $whereConditions);
    
    // Validar orden
    $allowedOrderBy = ['username', 'email', 'full_name', 'membership_type', 'credits_remaining', 'created_at', 'last_login'];
    if (!in_array($orderBy, $allowedOrderBy)) {
        $orderBy = 'created_at';
    }
    
    $allowedOrderDir = ['ASC', 'DESC'];
    if (!in_array($orderDir, $allowedOrderDir)) {
        $orderDir = 'DESC';
    }
    
    // Consulta principal con más campos
    $stmt = $conn->prepare("
        SELECT 
            id, username, email, full_name, membership_type, credits_remaining, 
            status, created_at, last_login, phone, subscription_start, subscription_end,
            email_verified, newsletter_subscribed, notifications_enabled,
            max_monthly_usage, api_rate_limit, notes,
            (SELECT COUNT(*) FROM tool_usage WHERE user_id = users.id) as total_usage,
            (SELECT COUNT(*) FROM tool_usage WHERE user_id = users.id AND MONTH(created_at) = MONTH(NOW()) AND YEAR(created_at) = YEAR(NOW())) as monthly_usage,
            (SELECT COALESCE(SUM(amount), 0) FROM payments WHERE user_id = users.id AND status = 'completed') as total_payments
        FROM users 
        $whereClause 
        ORDER BY $orderBy $orderDir 
        LIMIT ? OFFSET ?
    ");
    
    $params[] = $limit;
    $params[] = $offset;
    
    $stmt->execute($params);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Contar total de registros
    $countStmt = $conn->prepare("SELECT COUNT(*) as total FROM users $whereClause");
    $countParams = array_slice($params, 0, -2); // Remover limit y offset
    $countStmt->execute($countParams);
    $total = $countStmt->fetch(PDO::FETCH_ASSOC)['total'];
    
    // Formatear datos
    foreach ($users as &$user) {
        $user['created_at_formatted'] = date('d/m/Y H:i', strtotime($user['created_at']));
        $user['last_login_formatted'] = $user['last_login'] ? date('d/m/Y H:i', strtotime($user['last_login'])) : 'Nunca';
        $user['subscription_status'] = 'inactive';
        
        // Determinar estado de suscripción
        if ($user['subscription_end'] && strtotime($user['subscription_end']) > time()) {
            $user['subscription_status'] = 'active';
        } elseif ($user['subscription_end'] && strtotime($user['subscription_end']) < time()) {
            $user['subscription_status'] = 'expired';
        }
        
        // Badge de membresía
        $membershipBadges = [
            'free' => '<span class="badge bg-secondary">Gratuita</span>',
            'premium' => '<span class="badge bg-warning">Premium</span>',
            'enterprise' => '<span class="badge bg-primary">Enterprise</span>'
        ];
        $user['membership_badge'] = $membershipBadges[$user['membership_type']] ?? '<span class="badge bg-secondary">Desconocido</span>';
        
        // Badge de estado
        $statusBadges = [
            'active' => '<span class="badge bg-success">Activo</span>',
            'suspended' => '<span class="badge bg-warning">Suspendido</span>',
            'banned' => '<span class="badge bg-danger">Baneado</span>'
        ];
        $user['status_badge'] = $statusBadges[$user['status']] ?? '<span class="badge bg-secondary">Desconocido</span>';
        
        // Formatear números
        $user['total_payments_formatted'] = '$' . number_format($user['total_payments'], 2);
    }
    
    // Calcular paginación
    $totalPages = ceil($total / $limit);
    
    echo json_encode([
        'success' => true,
        'data' => $users,
        'pagination' => [
            'current_page' => $page,
            'total_pages' => $totalPages,
            'total_records' => $total,
            'per_page' => $limit,
            'has_next' => $page < $totalPages,
            'has_prev' => $page > 1
        ]
    ]);

} catch (Exception $e) {
    error_log("Error en get_users.php: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Error interno del servidor',
        'error' => $e->getMessage()
    ]);
}
?>
    if ($statusFilter !== 'all') {
        $whereConditions[] = "status = ?";
        $params[] = $statusFilter;
    }
    
    $whereClause = "WHERE " . implode(" AND ", $whereConditions);
    
    // Validar orden
    $allowedOrderBy = ['username', 'email', 'full_name', 'membership_type', 'status', 'created_at', 'last_login'];
    if (!in_array($orderBy, $allowedOrderBy)) {
        $orderBy = 'created_at';
    }
    
    $allowedOrderDir = ['ASC', 'DESC'];
    if (!in_array($orderDir, $allowedOrderDir)) {
        $orderDir = 'DESC';
    }
    
    // Obtener usuarios
    $usersQuery = "
        SELECT 
            id,
            username,
            email,
            full_name,
            membership_type,
            membership_expires_at,
            status,
            credits_remaining,
            created_at,
            last_login,
            profile_image,
            phone,
            bio
        FROM users 
        $whereClause
        ORDER BY $orderBy $orderDir
        LIMIT ? OFFSET ?
    ";
    
    $usersParams = array_merge($params, [$limit, $offset]);
    $stmt = $conn->prepare($usersQuery);
    $stmt->execute($usersParams);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Obtener información adicional para cada usuario
    $enrichedUsers = [];
    foreach ($users as $user) {
        // Verificar si el usuario está online (basado en actividad reciente)
        $stmt = $conn->prepare("SELECT id FROM user_sessions WHERE user_id = ? AND last_activity > DATE_SUB(NOW(), INTERVAL 15 MINUTE)");
        $stmt->execute([$user['id']]);
        $isOnline = $stmt->rowCount() > 0;
        
        // Obtener total de creaciones del usuario
        $stmt = $conn->prepare("SELECT COUNT(*) as total FROM user_creations WHERE user_id = ?");
        $stmt->execute([$user['id']]);
        $totalCreations = (int)$stmt->fetch()['total'];
        
        // Obtener total gastado
        $stmt = $conn->prepare("SELECT COALESCE(SUM(amount), 0) as total FROM payments WHERE user_id = ? AND status = 'completed'");
        $stmt->execute([$user['id']]);
        $totalSpent = (float)$stmt->fetch()['total'];
        
        $enrichedUsers[] = [
            'id' => (int)$user['id'],
            'username' => $user['username'],
            'email' => $user['email'],
            'full_name' => $user['full_name'],
            'membership_type' => $user['membership_type'],
            'membership_expires_at' => $user['membership_expires_at'],
            'status' => $user['status'],
            'credits_remaining' => (int)$user['credits_remaining'],
            'created_at' => $user['created_at'],
            'last_login' => $user['last_login'],
            'profile_image' => $user['profile_image'],
            'phone' => $user['phone'],
            'bio' => $user['bio'],
            'online' => $isOnline,
            'total_creations' => $totalCreations,
            'total_spent' => $totalSpent
        ];
    }
    
    // Obtener total de registros para paginación
    $totalQuery = "SELECT COUNT(*) as total FROM users $whereClause";
    $stmt = $conn->prepare($totalQuery);
    $stmt->execute($params);
    $totalRecords = (int)$stmt->fetch()['total'];
    
    $totalPages = ceil($totalRecords / $limit);
    
    echo json_encode([
        'success' => true,
        'users' => $enrichedUsers,
        'pagination' => [
            'current_page' => $page,
            'total_pages' => $totalPages,
            'total_records' => $totalRecords,
            'limit' => $limit,
            'has_next' => $page < $totalPages,
            'has_prev' => $page > 1
        ],
        'filters' => [
            'search' => $search,
            'membership' => $membershipFilter,
            'status' => $statusFilter,
            'order_by' => $orderBy,
            'order_dir' => $orderDir
        ]
    ]);

} catch (Exception $e) {
    error_log("Get users error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Error del servidor: ' . $e->getMessage(),
        'error_code' => 'SERVER_ERROR'
    ]);
}
?>
