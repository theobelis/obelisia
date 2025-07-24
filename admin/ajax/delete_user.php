<?php
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../src/Config/config.php';
$database = new \ObelisIA\Database\Database();
$db = $database->getConnection();
$auth = new \ObelisIA\Auth\Auth($db);

header('Content-Type: application/json');

$database = new Database();
$db = $database->getConnection();
$auth = new Auth($db);

// Verificar si está logueado y es admin
if (!$auth->isLoggedIn() || ($_SESSION['role'] ?? 'user') !== 'admin') {
    echo json_encode(['success' => false, 'message' => 'Acceso denegado']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
    exit();
}

try {
    $input = json_decode(file_get_contents('php://input'), true);
    $userId = $input['id'] ?? null;

    if (!$userId) {
        echo json_encode(['success' => false, 'message' => 'ID de usuario requerido']);
        exit();
    }

    // Verificar que el usuario existe y no es admin
    $query = "SELECT id, role FROM users WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$userId]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo json_encode(['success' => false, 'message' => 'Usuario no encontrado']);
        exit();
    }

    if ($user['role'] === 'admin') {
        echo json_encode(['success' => false, 'message' => 'No se puede eliminar un administrador']);
        exit();
    }

    // Iniciar transacción
    $db->beginTransaction();

    try {
        // Eliminar creaciones del usuario
        $query = "DELETE FROM user_creations WHERE user_id = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$userId]);

        // Actualizar transacciones de pago (no eliminar por historial)
        $query = "UPDATE payment_transactions SET status = 'cancelled' WHERE user_id = ? AND status = 'pending'";
        $stmt = $db->prepare($query);
        $stmt->execute([$userId]);

        // Eliminar usuario
        $query = "DELETE FROM users WHERE id = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$userId]);

        $db->commit();

        echo json_encode([
            'success' => true,
            'message' => 'Usuario eliminado correctamente'
        ]);

    } catch (Exception $e) {
        $db->rollBack();
        throw $e;
    }

} catch (Exception $e) {
    error_log("Error en delete_user.php: " . $e->getMessage());
    echo json_encode([
        'success' => false,
        'message' => 'Error al eliminar usuario: ' . $e->getMessage()
    ]);
}
?>
