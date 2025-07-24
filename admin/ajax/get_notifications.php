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
    $database = new Database();
    $conn = $database->getConnection();
    
    // Obtener notificaciones no leídas
    $stmt = $conn->prepare("
        SELECT 
            id,
            type,
            title,
            message,
            priority,
            created_at
        FROM admin_notifications 
        WHERE is_read = 0 
        ORDER BY 
            CASE priority 
                WHEN 'critical' THEN 1 
                WHEN 'high' THEN 2 
                WHEN 'medium' THEN 3 
                WHEN 'low' THEN 4 
            END,
            created_at DESC
        LIMIT 10
    ");
    
    $stmt->execute();
    $notifications = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Crear notificaciones automáticas basadas en el estado del sistema
    $autoNotifications = [];
    
    // Verificar pagos fallidos recientes
    $stmt = $conn->query("
        SELECT COUNT(*) as failed_count 
        FROM payments 
        WHERE status = 'failed' 
        AND created_at >= DATE_SUB(NOW(), INTERVAL 1 HOUR)
    ");
    $failedPayments = (int)$stmt->fetch()['failed_count'];
    
    if ($failedPayments > 5) {
        $autoNotifications[] = [
            'type' => 'warning',
            'title' => 'Múltiples pagos fallidos',
            'message' => "Se han detectado $failedPayments pagos fallidos en la última hora",
            'priority' => 'high',
            'created_at' => date('Y-m-d H:i:s')
        ];
    }
    
    // Verificar errores de sistema
    $stmt = $conn->query("
        SELECT COUNT(*) as error_count 
        FROM activity_logs 
        WHERE action = 'system_error' 
        AND created_at >= DATE_SUB(NOW(), INTERVAL 30 MINUTE)
    ");
    $systemErrors = (int)$stmt->fetch()['error_count'];
    
    if ($systemErrors > 10) {
        $autoNotifications[] = [
            'type' => 'error',
            'title' => 'Múltiples errores de sistema',
            'message' => "Se han registrado $systemErrors errores en los últimos 30 minutos",
            'priority' => 'critical',
            'created_at' => date('Y-m-d H:i:s')
        ];
    }
    
    // Verificar espacio en disco (simulado)
    $diskUsage = rand(60, 95); // Simulamos uso de disco
    if ($diskUsage > 85) {
        $autoNotifications[] = [
            'type' => 'warning',
            'title' => 'Espacio en disco bajo',
            'message' => "El uso de disco está al $diskUsage%",
            'priority' => 'medium',
            'created_at' => date('Y-m-d H:i:s')
        ];
    }
    
    // Verificar usuarios premium que expiran pronto
    $stmt = $conn->query("
        SELECT COUNT(*) as expiring_count 
        FROM users 
        WHERE membership_type = 'premium' 
        AND membership_expires_at <= DATE_ADD(NOW(), INTERVAL 7 DAY)
        AND membership_expires_at > NOW()
    ");
    $expiringUsers = (int)$stmt->fetch()['expiring_count'];
    
    if ($expiringUsers > 0) {
        $autoNotifications[] = [
            'type' => 'info',
            'title' => 'Membresías premium expirando',
            'message' => "$expiringUsers usuarios premium expiran en los próximos 7 días",
            'priority' => 'medium',
            'created_at' => date('Y-m-d H:i:s')
        ];
    }
    
    // Combinar notificaciones
    $allNotifications = array_merge($notifications, $autoNotifications);
    
    // Ordenar por prioridad y fecha
    usort($allNotifications, function($a, $b) {
        $priorityOrder = ['critical' => 1, 'high' => 2, 'medium' => 3, 'low' => 4];
        
        $aPriority = $priorityOrder[$a['priority']] ?? 5;
        $bPriority = $priorityOrder[$b['priority']] ?? 5;
        
        if ($aPriority == $bPriority) {
            return strtotime($b['created_at']) - strtotime($a['created_at']);
        }
        
        return $aPriority - $bPriority;
    });
    
    // Limitar a 10 notificaciones más importantes
    $allNotifications = array_slice($allNotifications, 0, 10);
    
    echo json_encode([
        'success' => true,
        'notifications' => $allNotifications,
        'unread_count' => count($notifications) + count($autoNotifications)
    ]);

} catch (Exception $e) {
    error_log("Get notifications error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Error del servidor: ' . $e->getMessage()
    ]);
}
?>
