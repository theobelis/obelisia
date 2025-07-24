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

// Validar método HTTP
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false, 
        'message' => 'Método no permitido'
    ]);
    exit;
}

try {
    // Obtener datos JSON
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);
    
    if (!$data || !isset($data['id']) || !isset($data['value'])) {
        throw new Exception('Datos incompletos');
    }
    
    $settingId = (int)$data['id'];
    $value = $data['value'];
    
    $database = new Database();
    $conn = $database->getConnection();
    
    // Verificar que la configuración existe y es editable
    $stmt = $conn->prepare("
        SELECT setting_key, setting_type, is_editable 
        FROM system_settings 
        WHERE id = ?
    ");
    $stmt->execute([$settingId]);
    $setting = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$setting) {
        throw new Exception('Configuración no encontrada');
    }
    
    if (!$setting['is_editable']) {
        throw new Exception('Esta configuración no es editable');
    }
    
    // Validar valor según el tipo
    switch ($setting['setting_type']) {
        case 'boolean':
            $value = $value ? 'true' : 'false';
            break;
            
        case 'number':
            if (!is_numeric($value)) {
                throw new Exception('El valor debe ser numérico');
            }
            $value = (string)$value;
            break;
            
        case 'json':
            // Validar que es JSON válido
            json_decode($value);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception('JSON inválido');
            }
            break;
            
        case 'string':
        default:
            $value = (string)$value;
            break;
    }
    
    // Actualizar configuración
    $stmt = $conn->prepare("
        UPDATE system_settings 
        SET setting_value = ?, updated_at = NOW() 
        WHERE id = ?
    ");
    $stmt->execute([$value, $settingId]);
    
    // Log de actividad
    $stmt = $conn->prepare("
        INSERT INTO activity_logs (user_id, action, description, ip_address) 
        VALUES (?, 'setting_updated', ?, ?)
    ");
    $stmt->execute([
        $_SESSION['user_id'],
        "Configuración '{$setting['setting_key']}' actualizada",
        $_SERVER['REMOTE_ADDR'] ?? 'unknown'
    ]);
    
    echo json_encode([
        'success' => true,
        'message' => 'Configuración guardada correctamente'
    ]);

} catch (Exception $e) {
    error_log("Save setting error: " . $e->getMessage());
    http_response_code(400);
    echo json_encode([
        'success' => false, 
        'message' => $e->getMessage()
    ]);
}
?>
