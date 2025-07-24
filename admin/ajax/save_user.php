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
    
    if (!$data) {
        throw new Exception('Datos JSON inválidos');
    }
    
    $userId = $data['id'] ?? null;
    $username = trim($data['username'] ?? '');
    $email = trim($data['email'] ?? '');
    $fullName = trim($data['full_name'] ?? '');
    $membershipType = $data['membership_type'] ?? 'free';
    $status = $data['status'] ?? 'active';
    $creditsRemaining = (int)($data['credits_remaining'] ?? 0);
    $phone = trim($data['phone'] ?? '');
    $bio = trim($data['bio'] ?? '');
    $address = trim($data['address'] ?? '');
    $newPassword = trim($data['new_password'] ?? '');
    
    // Validaciones
    if (empty($username)) {
        throw new Exception('El nombre de usuario es requerido');
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Email válido requerido');
    }
    
    if (empty($fullName)) {
        throw new Exception('El nombre completo es requerido');
    }
    
    if (!in_array($membershipType, ['free', 'premium'])) {
        throw new Exception('Tipo de membresía inválido');
    }
    
    if (!in_array($status, ['active', 'inactive'])) {
        throw new Exception('Estado inválido');
    }
    
    $database = new Database();
    $conn = $database->getConnection();
    
    if ($userId) {
        // Actualizar usuario existente
        
        // Verificar que el usuario existe y no es admin
        $stmt = $conn->prepare("SELECT id FROM users WHERE id = ? AND role != 'admin'");
        $stmt->execute([$userId]);
        if (!$stmt->fetch()) {
            throw new Exception('Usuario no encontrado');
        }
        
        // Verificar duplicados de username y email (excluyendo el usuario actual)
        $stmt = $conn->prepare("SELECT id FROM users WHERE (username = ? OR email = ?) AND id != ?");
        $stmt->execute([$username, $email, $userId]);
        if ($stmt->fetch()) {
            throw new Exception('El nombre de usuario o email ya están en uso');
        }
        
        // Preparar consulta de actualización
        $updateFields = [
            'username = ?',
            'email = ?',
            'full_name = ?',
            'membership_type = ?',
            'status = ?',
            'credits_remaining = ?',
            'phone = ?',
            'bio = ?',
            'address = ?',
            'updated_at = NOW()'
        ];
        
        $updateParams = [
            $username,
            $email,
            $fullName,
            $membershipType,
            $status,
            $creditsRemaining,
            $phone,
            $bio,
            $address
        ];
        
        // Si se proporcionó nueva contraseña, incluirla
        if (!empty($newPassword)) {
            $updateFields[] = 'password = ?';
            $updateParams[] = password_hash($newPassword, PASSWORD_DEFAULT);
        }
        
        // Si se cambió a premium, establecer fecha de expiración
        if ($membershipType === 'premium') {
            $updateFields[] = 'membership_expires_at = DATE_ADD(NOW(), INTERVAL 1 YEAR)';
        } elseif ($membershipType === 'free') {
            $updateFields[] = 'membership_expires_at = NULL';
        }
        
        $updateParams[] = $userId;
        
        $updateQuery = "UPDATE users SET " . implode(', ', $updateFields) . " WHERE id = ?";
        $stmt = $conn->prepare($updateQuery);
        $stmt->execute($updateParams);
        
        // Log de actividad
        $stmt = $conn->prepare("
            INSERT INTO activity_logs (user_id, action, description, ip_address) 
            VALUES (?, 'user_updated', ?, ?)
        ");
        $stmt->execute([
            $_SESSION['user_id'],
            "Usuario $username actualizado por administrador",
            $_SERVER['REMOTE_ADDR'] ?? 'unknown'
        ]);
        
        echo json_encode([
            'success' => true,
            'message' => 'Usuario actualizado correctamente',
            'user_id' => $userId
        ]);
        
    } else {
        // Crear nuevo usuario
        
        if (empty($newPassword)) {
            throw new Exception('La contraseña es requerida para nuevos usuarios');
        }
        
        // Verificar duplicados
        $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
        $stmt->execute([$username, $email]);
        if ($stmt->fetch()) {
            throw new Exception('El nombre de usuario o email ya están en uso');
        }
        
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $membershipExpires = $membershipType === 'premium' ? 'DATE_ADD(NOW(), INTERVAL 1 YEAR)' : 'NULL';
        
        $insertQuery = "
            INSERT INTO users (
                username, email, password, full_name, membership_type, 
                membership_expires_at, status, credits_remaining, phone, bio, address
            ) VALUES (
                ?, ?, ?, ?, ?, $membershipExpires, ?, ?, ?, ?, ?
            )
        ";
        
        $stmt = $conn->prepare($insertQuery);
        $stmt->execute([
            $username,
            $email,
            $hashedPassword,
            $fullName,
            $membershipType,
            $status,
            $creditsRemaining,
            $phone,
            $bio,
            $address
        ]);
        
        $newUserId = $conn->lastInsertId();
        
        // Log de actividad
        $stmt = $conn->prepare("
            INSERT INTO activity_logs (user_id, action, description, ip_address) 
            VALUES (?, 'user_created', ?, ?)
        ");
        $stmt->execute([
            $_SESSION['user_id'],
            "Usuario $username creado por administrador",
            $_SERVER['REMOTE_ADDR'] ?? 'unknown'
        ]);
        
        echo json_encode([
            'success' => true,
            'message' => 'Usuario creado correctamente',
            'user_id' => $newUserId
        ]);
    }

} catch (Exception $e) {
    error_log("Save user error: " . $e->getMessage());
    http_response_code(400);
    echo json_encode([
        'success' => false, 
        'message' => $e->getMessage()
    ]);
}
?>
