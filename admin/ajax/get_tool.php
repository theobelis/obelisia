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

try {
    $toolId = $_GET['id'] ?? null;
    
    if (!$toolId) {
        throw new Exception('ID de herramienta requerido');
    }
    
    $database = new Database();
    $conn = $database->getConnection();
    
    // Obtener datos de la herramienta
    $stmt = $conn->prepare("
        SELECT 
            id,
            name,
            slug,
            description,
            category,
            icon,
            is_active,
            is_premium,
            created_at,
            updated_at
        FROM tools 
        WHERE id = ?
    ");
    
    $stmt->execute([$toolId]);
    $tool = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$tool) {
        throw new Exception('Herramienta no encontrada');
    }
    
    // Obtener estadísticas de uso
    $stmt = $conn->prepare("
        SELECT 
            COUNT(*) as total_uses,
            COUNT(CASE WHEN created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) THEN 1 END) as monthly_uses,
            COUNT(CASE WHEN created_at >= DATE_SUB(NOW(), INTERVAL 1 WEEK) THEN 1 END) as weekly_uses,
            COUNT(CASE WHEN created_at >= DATE_SUB(NOW(), INTERVAL 1 DAY) THEN 1 END) as daily_uses,
            COUNT(CASE WHEN success = 1 THEN 1 END) as successful_uses,
            COUNT(CASE WHEN success = 0 THEN 1 END) as failed_uses
        FROM tool_usage 
        WHERE tool_id = ?
    ");
    $stmt->execute([$toolId]);
    $usage = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Obtener usuarios más activos de esta herramienta
    $stmt = $conn->prepare("
        SELECT 
            u.username,
            u.email,
            COUNT(tu.id) as uses,
            MAX(tu.created_at) as last_use
        FROM tool_usage tu
        JOIN users u ON tu.user_id = u.id
        WHERE tu.tool_id = ?
        GROUP BY tu.user_id
        ORDER BY uses DESC
        LIMIT 10
    ");
    $stmt->execute([$toolId]);
    $topUsers = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Obtener uso por días (últimos 30 días)
    $stmt = $conn->prepare("
        SELECT 
            DATE(created_at) as date,
            COUNT(*) as uses
        FROM tool_usage 
        WHERE tool_id = ? 
        AND created_at >= DATE_SUB(NOW(), INTERVAL 30 DAY)
        GROUP BY DATE(created_at)
        ORDER BY date ASC
    ");
    $stmt->execute([$toolId]);
    $dailyUsage = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $tool['statistics'] = [
        'total_uses' => (int)$usage['total_uses'],
        'monthly_uses' => (int)$usage['monthly_uses'],
        'weekly_uses' => (int)$usage['weekly_uses'],
        'daily_uses' => (int)$usage['daily_uses'],
        'successful_uses' => (int)$usage['successful_uses'],
        'failed_uses' => (int)$usage['failed_uses'],
        'success_rate' => $usage['total_uses'] > 0 ? round(($usage['successful_uses'] / $usage['total_uses']) * 100, 2) : 0
    ];
    
    $tool['top_users'] = $topUsers;
    $tool['daily_usage'] = $dailyUsage;
    
    echo json_encode([
        'success' => true,
        'tool' => $tool
    ]);

} catch (Exception $e) {
    error_log("Get tool error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Error del servidor: ' . $e->getMessage()
    ]);
}
?>
