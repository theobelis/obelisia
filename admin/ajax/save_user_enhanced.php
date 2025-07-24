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

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Método no permitido'
    ]);
    exit;
}

try {
    $database = new Database();
    $conn = $database->getConnection();
    
    $data = json_decode(file_get_contents('php://input'), true);
    
    // Validar datos requeridos
    $requiredFields = ['username', 'email', 'full_name'];
    foreach ($requiredFields as $field) {
        if (empty($data[$field])) {
            throw new Exception("El campo $field es requerido");
        }
    }
    
    // Validar email
    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        throw new Exception("El email no es válido");
    }
    
    $userId = $data['id'] ?? null;
    $isEdit = !empty($userId);
    
    // Verificar si username/email ya existen (excepto el usuario actual en edición)
    $checkQuery = "SELECT id FROM users WHERE (username = ? OR email = ?)";
    $checkParams = [$data['username'], $data['email']];
    
    if ($isEdit) {
        $checkQuery .= " AND id != ?";
        $checkParams[] = $userId;
    }
    
    $checkStmt = $conn->prepare($checkQuery);
    $checkStmt->execute($checkParams);
    
    if ($checkStmt->fetch()) {
        throw new Exception("El usuario o email ya existe");
    }
    
    // Preparar datos para inserción/actualización
    $userData = [
        'username' => $data['username'],
        'email' => $data['email'],
        'full_name' => $data['full_name'],
        'phone' => $data['phone'] ?? null,
        'membership_type' => $data['membership_type'] ?? 'free',
        'credits_remaining' => (int)($data['credits_remaining'] ?? 0),
        'role' => $data['role'] ?? 'user',
        'status' => $data['status'] ?? 'active',
        'language' => $data['language'] ?? 'es',
        'subscription_start' => $data['subscription_start'] ?? null,
        'subscription_end' => $data['subscription_end'] ?? null,
        'email_verified' => isset($data['email_verified']) ? 1 : 0,
        'newsletter_subscribed' => isset($data['newsletter_subscribed']) ? 1 : 0,
        'notifications_enabled' => isset($data['notifications_enabled']) ? 1 : 0,
        'max_monthly_usage' => $data['max_monthly_usage'] ? (int)$data['max_monthly_usage'] : null,
        'api_rate_limit' => (int)($data['api_rate_limit'] ?? 60),
        'notes' => $data['notes'] ?? null,
        'updated_at' => date('Y-m-d H:i:s')
    ];
    
    if ($isEdit) {
        // Actualizar usuario existente
        $updateFields = [];
        $updateParams = [];
        
        foreach ($userData as $field => $value) {
            $updateFields[] = "$field = ?";
            $updateParams[] = $value;
        }
        
        // Solo actualizar contraseña si se proporciona
        if (!empty($data['password'])) {
            $updateFields[] = "password = ?";
            $updateParams[] = password_hash($data['password'], PASSWORD_ARGON2ID);
        }
        
        $updateParams[] = $userId;
        
        $updateQuery = "UPDATE users SET " . implode(', ', $updateFields) . " WHERE id = ?";
        $stmt = $conn->prepare($updateQuery);
        $stmt->execute($updateParams);
        
        $message = "Usuario actualizado exitosamente";
        $userIdResult = $userId;
        
    } else {
        // Crear nuevo usuario
        if (empty($data['password'])) {
            throw new Exception("La contraseña es requerida para nuevos usuarios");
        }
        
        $userData['password'] = password_hash($data['password'], PASSWORD_ARGON2ID);
        $userData['created_at'] = date('Y-m-d H:i:s');
        
        $insertFields = array_keys($userData);
        $insertPlaceholders = array_fill(0, count($insertFields), '?');
        
        $insertQuery = "INSERT INTO users (" . implode(', ', $insertFields) . ") VALUES (" . implode(', ', $insertPlaceholders) . ")";
        $stmt = $conn->prepare($insertQuery);
        $stmt->execute(array_values($userData));
        
        $userIdResult = $conn->lastInsertId();
        $message = "Usuario creado exitosamente";
    }
    
    // Obtener datos actualizados del usuario
    $userStmt = $conn->prepare("
        SELECT 
            id, username, email, full_name, membership_type, credits_remaining, 
            status, created_at, last_login, phone, subscription_start, subscription_end,
            email_verified, newsletter_subscribed, notifications_enabled,
            max_monthly_usage, api_rate_limit, notes
        FROM users 
        WHERE id = ?
    ");
    $userStmt->execute([$userIdResult]);
    $updatedUser = $userStmt->fetch(PDO::FETCH_ASSOC);
    
    // Log de actividad del admin
    try {
        $logStmt = $conn->prepare("
            INSERT INTO admin_activity_log (admin_id, action, target_type, target_id, details, created_at) 
            VALUES (?, ?, 'user', ?, ?, NOW())
        ");
        $action = $isEdit ? 'user_updated' : 'user_created';
        $details = json_encode([
            'username' => $data['username'],
            'email' => $data['email'],
            'membership_type' => $data['membership_type']
        ]);
        $logStmt->execute([$_SESSION['user_id'], $action, $userIdResult, $details]);
    } catch (Exception $logError) {
        // Log error but don't fail the main operation
        error_log("Error logging admin activity: " . $logError->getMessage());
    }
    
    echo json_encode([
        'success' => true,
        'message' => $message,
        'user' => $updatedUser
    ]);

} catch (Exception $e) {
    error_log("Error en save_user_enhanced.php: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
?>
