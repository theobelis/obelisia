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
    
    // Obtener todas las configuraciones del sistema
    $stmt = $conn->query("
        SELECT 
            id,
            setting_key,
            setting_value,
            setting_type,
            description,
            is_editable
        FROM system_settings 
        ORDER BY setting_key ASC
    ");
    
    $settings = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode([
        'success' => true,
        'settings' => $settings
    ]);

} catch (Exception $e) {
    error_log("Get settings error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Error del servidor: ' . $e->getMessage()
    ]);
}
?>
