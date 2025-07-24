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
    $userId = $_GET['id'] ?? null;
    
    if (!$userId) {
        throw new Exception('ID de usuario requerido');
    }
    
    $database = new Database();
    $conn = $database->getConnection();
    
    // Obtener datos del usuario
    $stmt = $conn->prepare("
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
            bio,
            address
        FROM users 
        WHERE id = ? AND role != 'admin'
    ");
    
    $stmt->execute([$userId]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$user) {
        throw new Exception('Usuario no encontrado');
    }
    
    // Obtener estadísticas adicionales
    // Total de creaciones
    $stmt = $conn->prepare("SELECT COUNT(*) as total FROM user_creations WHERE user_id = ?");
    $stmt->execute([$userId]);
    $totalCreations = (int)$stmt->fetch()['total'];
    
    // Total gastado
    $stmt = $conn->prepare("SELECT COALESCE(SUM(amount), 0) as total FROM payments WHERE user_id = ? AND status = 'completed'");
    $stmt->execute([$userId]);
    $totalSpent = (float)$stmt->fetch()['total'];
    
    // Última actividad
    $stmt = $conn->prepare("SELECT created_at FROM user_creations WHERE user_id = ? ORDER BY created_at DESC LIMIT 1");
    $stmt->execute([$userId]);
    $lastActivity = $stmt->fetch();
    
    // Historial de pagos
    $stmt = $conn->prepare("
        SELECT 
            transaction_id,
            amount,
            currency,
            status,
            payment_method,
            plan_type,
            created_at
        FROM payments 
        WHERE user_id = ? 
        ORDER BY created_at DESC 
        LIMIT 10
    ");
    $stmt->execute([$userId]);
    $paymentHistory = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Creaciones recientes
    $stmt = $conn->prepare("
        SELECT 
            type,
            tool_used,
            title,
            created_at,
            credits_used
        FROM user_creations 
        WHERE user_id = ? 
        ORDER BY created_at DESC 
        LIMIT 10
    ");
    $stmt->execute([$userId]);
    $recentCreations = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $user['statistics'] = [
        'total_creations' => $totalCreations,
        'total_spent' => $totalSpent,
        'last_activity' => $lastActivity['created_at'] ?? null
    ];
    
    $user['payment_history'] = $paymentHistory;
    $user['recent_creations'] = $recentCreations;
    
    echo json_encode([
        'success' => true,
        'user' => $user
    ]);

} catch (Exception $e) {
    error_log("Get user error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Error del servidor: ' . $e->getMessage()
    ]);
}
?>
