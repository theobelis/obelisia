<?php
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../src/Config/config.php';
$database = new \ObelisIA\Database\Database();
$conn = $database->getConnection();
$auth = new \ObelisIA\Auth\Auth($conn);

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
    exit;
}

// Verificar que es administrador
session_start();
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'No autorizado']);
    exit;
}

try {
    $pdo = getDatabaseConnection();
    
    // Verificar que el usuario es administrador
    $stmt = $pdo->prepare("SELECT role FROM users WHERE id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $user = $stmt->fetch();
    
    if (!$user || $user['role'] !== 'admin') {
        echo json_encode(['success' => false, 'message' => 'No autorizado']);
        exit;
    }
    
    $input = json_decode(file_get_contents('php://input'), true);
    $toolId = $input['id'] ?? null;
    
    if (!$toolId) {
        echo json_encode(['success' => false, 'message' => 'ID de herramienta requerido']);
        exit;
    }
    
    // Verificar que la herramienta existe
    $stmt = $pdo->prepare("SELECT id FROM tools WHERE id = ?");
    $stmt->execute([$toolId]);
    
    if (!$stmt->fetch()) {
        echo json_encode(['success' => false, 'message' => 'Herramienta no encontrada']);
        exit;
    }
    
    // Verificar token CSRF
    if (!isset($_SESSION['csrf_token']) || !isset($input['csrf_token']) || $input['csrf_token'] !== $_SESSION['csrf_token']) {
        echo json_encode(['success' => false, 'message' => 'Token CSRF inválido']);
        exit;
    }
    
    // Eliminar la herramienta
    $stmt = $pdo->prepare("DELETE FROM tools WHERE id = ?");
    $stmt->execute([$toolId]);
    
    // Registrar la actividad del administrador
    $stmt = $pdo->prepare("INSERT INTO admin_activity_log (admin_id, action, details) VALUES (?, ?, ?)");
    $stmt->execute([
        $_SESSION['user_id'],
        'DELETE_TOOL',
        json_encode(['tool_id' => $toolId])
    ]);
    
    echo json_encode(['success' => true, 'message' => 'Herramienta eliminada correctamente']);
    
} catch (Exception $e) {
    error_log("Error en delete_tool.php: " . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'Error interno del servidor']);
}
?>
