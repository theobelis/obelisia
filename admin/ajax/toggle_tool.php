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
    
    if (!$data || !isset($data['id'])) {
        throw new Exception('ID de herramienta requerido');
    }
    
    $toolId = (int)$data['id'];
    
    $database = new Database();
    $conn = $database->getConnection();
    
    // Obtener estado actual de la herramienta
    $stmt = $conn->prepare("SELECT is_active, name FROM tools WHERE id = ?");
    $stmt->execute([$toolId]);
    $tool = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$tool) {
        throw new Exception('Herramienta no encontrada');
    }
    
    $newStatus = !$tool['is_active'];
    $statusText = $newStatus ? 'activada' : 'desactivada';
    
    // Actualizar estado
    $stmt = $conn->prepare("UPDATE tools SET is_active = ?, updated_at = NOW() WHERE id = ?");
    $stmt->execute([$newStatus ? 1 : 0, $toolId]);
    
    // Log de actividad
    $stmt = $conn->prepare("
        INSERT INTO activity_logs (user_id, action, description, ip_address) 
        VALUES (?, 'tool_toggled', ?, ?)
    ");
    $stmt->execute([
        $_SESSION['user_id'],
        "Herramienta '{$tool['name']}' $statusText por administrador",
        $_SERVER['REMOTE_ADDR'] ?? 'unknown'
    ]);
    
    echo json_encode([
        'success' => true,
        'message' => "Herramienta $statusText correctamente",
        'new_status' => $newStatus
    ]);

} catch (Exception $e) {
    error_log("Toggle tool error: " . $e->getMessage());
    http_response_code(400);
    echo json_encode([
        'success' => false, 
        'message' => $e->getMessage()
    ]);
}
?>
