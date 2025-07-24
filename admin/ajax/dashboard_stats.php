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
    
    // Obtener estadísticas básicas
    $stats = [];
    
    // Total de usuarios
    $stmt = $conn->query("SELECT COUNT(*) as total FROM users");
    $stats['totalUsers'] = (int)$stmt->fetch()['total'];
    
    // Usuarios premium
    $stmt = $conn->query("SELECT COUNT(*) as premium FROM users WHERE membership_type = 'premium'");
    $stats['premiumUsers'] = (int)$stmt->fetch()['premium'];
    
    // Usuarios gratuitos
    $stats['freeUsers'] = $stats['totalUsers'] - $stats['premiumUsers'];
    
    // Total de herramientas activas
    $stmt = $conn->query("SELECT COUNT(*) as total FROM tools WHERE is_active = 1");
    $toolResult = $stmt->fetch();
    $stats['totalTools'] = $toolResult ? (int)$toolResult['total'] : 6;
    
    // Ingresos del mes actual
    $currentMonth = date('Y-m');
    $stmt = $conn->prepare("SELECT COALESCE(SUM(amount), 0) as revenue FROM payments WHERE status = 'completed' AND DATE_FORMAT(created_at, '%Y-%m') = ?");
    $stmt->execute([$currentMonth]);
    $stats['monthlyRevenue'] = (float)$stmt->fetch()['revenue'];
    
    // Total de creaciones
    $stmt = $conn->query("SELECT COUNT(*) as total FROM user_creations");
    $result = $stmt->fetch();
    $stats['totalCreations'] = $result ? (int)$result['total'] : 0;
    
    // Cambios porcentuales (comparado con el mes anterior)
    $lastMonth = date('Y-m', strtotime('-1 month'));
    
    // Cambio en usuarios
    $stmt = $conn->prepare("SELECT COUNT(*) as last_month_users FROM users WHERE DATE_FORMAT(created_at, '%Y-%m') = ?");
    $stmt->execute([$lastMonth]);
    $lastMonthUsers = (int)$stmt->fetch()['last_month_users'];
    
    $stmt = $conn->prepare("SELECT COUNT(*) as current_month_users FROM users WHERE DATE_FORMAT(created_at, '%Y-%m') = ?");
    $stmt->execute([$currentMonth]);
    $currentMonthUsers = (int)$stmt->fetch()['current_month_users'];
    
    $userGrowth = $lastMonthUsers > 0 ? round((($currentMonthUsers - $lastMonthUsers) / $lastMonthUsers) * 100, 1) : 0;
    
    // Cambio en ingresos
    $stmt = $conn->prepare("SELECT COALESCE(SUM(amount), 0) as last_month_revenue FROM payments WHERE status = 'completed' AND DATE_FORMAT(created_at, '%Y-%m') = ?");
    $stmt->execute([$lastMonth]);
    $lastMonthRevenue = (float)$stmt->fetch()['last_month_revenue'];
    
    $revenueGrowth = $lastMonthRevenue > 0 ? round((($stats['monthlyRevenue'] - $lastMonthRevenue) / $lastMonthRevenue) * 100, 1) : 0;
    
    $stats['changes'] = [
        'users' => $userGrowth,
        'revenue' => $revenueGrowth,
        'premium' => rand(-5, 15), // Placeholder
        'tools' => rand(0, 10) // Placeholder
    ];
    
    // Actividad reciente real - versión más robusta
    $recentActivity = [];
    
    try {
        // Intentar obtener actividad de usuarios
        $stmt = $conn->query("
            SELECT 
                'Nuevo usuario' as title,
                CONCAT(username, ' se registró') as description,
                created_at as time,
                'user-plus' as icon,
                'success' as color
            FROM users 
            WHERE created_at >= DATE_SUB(NOW(), INTERVAL 24 HOUR)
            ORDER BY created_at DESC
            LIMIT 5
        ");
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $recentActivity[] = [
                'title' => $row['description'] ?: $row['title'],
                'time' => $row['time'],
                'icon' => $row['icon'],
                'color' => $row['color']
            ];
        }
    } catch (Exception $e) {
        error_log("Error getting user activity: " . $e->getMessage());
    }
    
    try {
        // Intentar obtener actividad de pagos
        $stmt = $conn->query("
            SELECT 
                'Pago completado' as title,
                CONCAT('$', amount, ' - ', plan_type) as description,
                COALESCE(completed_at, created_at) as time,
                'credit-card' as icon,
                'info' as color
            FROM payments 
            WHERE status = 'completed' 
            AND (completed_at >= DATE_SUB(NOW(), INTERVAL 24 HOUR) OR created_at >= DATE_SUB(NOW(), INTERVAL 24 HOUR))
            ORDER BY COALESCE(completed_at, created_at) DESC
            LIMIT 5
        ");
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $recentActivity[] = [
                'title' => $row['description'] ?: $row['title'],
                'time' => $row['time'],
                'icon' => $row['icon'],
                'color' => $row['color']
            ];
        }
    } catch (Exception $e) {
        error_log("Error getting payment activity: " . $e->getMessage());
    }
    
    try {
        // Intentar obtener actividad de creaciones
        $stmt = $conn->query("
            SELECT 
                'Nueva creación' as title,
                CONCAT(COALESCE(tool_used, type), ' - ', COALESCE(title, 'Sin título')) as description,
                created_at as time,
                'image' as icon,
                'primary' as color
            FROM user_creations 
            WHERE created_at >= DATE_SUB(NOW(), INTERVAL 24 HOUR)
            ORDER BY created_at DESC
            LIMIT 5
        ");
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $recentActivity[] = [
                'title' => $row['description'] ?: $row['title'],
                'time' => $row['time'],
                'icon' => $row['icon'],
                'color' => $row['color']
            ];
        }
    } catch (Exception $e) {
        error_log("Error getting creation activity: " . $e->getMessage());
    }
    
    // Ordenar por tiempo
    usort($recentActivity, function($a, $b) {
        return strtotime($b['time']) - strtotime($a['time']);
    });
    
    // Limitar a 10 elementos
    $recentActivity = array_slice($recentActivity, 0, 10);
    
    // Datos para gráficos - últimos 12 meses
    $chartData = [];
    
    // Gráfico de usuarios
    $userChart = [
        'labels' => [],
        'total' => [],
        'premium' => []
    ];
    
    for ($i = 11; $i >= 0; $i--) {
        $month = date('Y-m', strtotime("-$i months"));
        $monthLabel = date('M Y', strtotime("-$i months"));
        
        // Total usuarios hasta ese mes
        $stmt = $conn->prepare("SELECT COUNT(*) as total FROM users WHERE created_at <= LAST_DAY(?)");
        $stmt->execute([$month . '-01']);
        $totalUsers = (int)$stmt->fetch()['total'];
        
        // Usuarios premium hasta ese mes
        $stmt = $conn->prepare("SELECT COUNT(*) as premium FROM users WHERE membership_type = 'premium' AND created_at <= LAST_DAY(?)");
        $stmt->execute([$month . '-01']);
        $premiumUsers = (int)$stmt->fetch()['premium'];
        
        $userChart['labels'][] = $monthLabel;
        $userChart['total'][] = $totalUsers;
        $userChart['premium'][] = $premiumUsers;
    }
    
    // Gráfico de ingresos
    $revenueChart = [
        'labels' => [],
        'data' => []
    ];
    
    for ($i = 11; $i >= 0; $i--) {
        $month = date('Y-m', strtotime("-$i months"));
        $monthLabel = date('M Y', strtotime("-$i months"));
        
        $stmt = $conn->prepare("SELECT COALESCE(SUM(amount), 0) as revenue FROM payments WHERE status = 'completed' AND DATE_FORMAT(created_at, '%Y-%m') = ?");
        $stmt->execute([$month]);
        $revenue = (float)$stmt->fetch()['revenue'];
        
        $revenueChart['labels'][] = $monthLabel;
        $revenueChart['data'][] = $revenue;
    }
    
    $chartData = [
        'users' => $userChart,
        'revenue' => $revenueChart
    ];
    
    echo json_encode([
        'success' => true,
        'stats' => $stats,
        'recentActivity' => $recentActivity,
        'chartData' => $chartData
    ]);

} catch (Exception $e) {
    error_log("Dashboard stats error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Error del servidor: ' . $e->getMessage(),
        'error_code' => 'SERVER_ERROR'
    ]);
}
?>
