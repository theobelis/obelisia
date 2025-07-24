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
    
    $toolId = $data['id'] ?? null;
    $name = trim($data['name'] ?? '');
    $slug = trim($data['slug'] ?? '');
    $description = trim($data['description'] ?? '');
    $category = $data['category'] ?? '';
    $icon = trim($data['icon'] ?? '');
    $isActive = isset($data['is_active']) ? (bool)$data['is_active'] : true;
    $isPremium = isset($data['is_premium']) ? (bool)$data['is_premium'] : false;
    
    // Validar token CSRF
    if (!isset($_SESSION['csrf_token']) || !isset($data['csrf_token']) || $data['csrf_token'] !== $_SESSION['csrf_token']) {
        http_response_code(403);
        echo json_encode([
            'success' => false,
            'message' => 'Token CSRF inválido'
        ]);
        exit;
    }
    
    // Validaciones
    if (empty($name)) {
        throw new Exception('El nombre de la herramienta es requerido');
    }
    
    if (empty($slug)) {
        $slug = strtolower(str_replace(' ', '-', $name));
        $slug = preg_replace('/[^a-z0-9\-]/', '', $slug);
    }
    
    if (empty($description)) {
        throw new Exception('La descripción es requerida');
    }
    
    $allowedCategories = ['image', 'video', 'music', 'text', 'utility'];
    if (!in_array($category, $allowedCategories)) {
        throw new Exception('Categoría inválida');
    }
    
    if (empty($icon)) {
        $icon = 'fa-cog'; // Icono por defecto
    }
    
    $database = new Database();
    $conn = $database->getConnection();
    
    if ($toolId) {
        // Actualizar herramienta existente
        
        // Verificar que la herramienta existe
        $stmt = $conn->prepare("SELECT id FROM tools WHERE id = ?");
        $stmt->execute([$toolId]);
        if (!$stmt->fetch()) {
            throw new Exception('Herramienta no encontrada');
        }
        
        // Verificar duplicado de slug (excluyendo la herramienta actual)
        $stmt = $conn->prepare("SELECT id FROM tools WHERE slug = ? AND id != ?");
        $stmt->execute([$slug, $toolId]);
        if ($stmt->fetch()) {
            throw new Exception('El slug ya está en uso');
        }
        
        // Actualizar
        $stmt = $conn->prepare("
            UPDATE tools SET 
                name = ?,
                slug = ?,
                description = ?,
                category = ?,
                icon = ?,
                is_active = ?,
                is_premium = ?,
                updated_at = NOW()
            WHERE id = ?
        ");
        
        $stmt->execute([
            $name,
            $slug,
            $description,
            $category,
            $icon,
            $isActive ? 1 : 0,
            $isPremium ? 1 : 0,
            $toolId
        ]);
        
        // Log de actividad
        $stmt = $conn->prepare("
            INSERT INTO activity_logs (user_id, action, description, ip_address) 
            VALUES (?, 'tool_updated', ?, ?)
        ");
        $stmt->execute([
            $_SESSION['user_id'],
            "Herramienta '$name' actualizada por administrador",
            $_SERVER['REMOTE_ADDR'] ?? 'unknown'
        ]);
        
        echo json_encode([
            'success' => true,
            'message' => 'Herramienta actualizada correctamente',
            'tool_id' => $toolId
        ]);
        
    } else {
        // Crear nueva herramienta
        
        // Verificar duplicado de slug
        $stmt = $conn->prepare("SELECT id FROM tools WHERE slug = ?");
        $stmt->execute([$slug]);
        if ($stmt->fetch()) {
            throw new Exception('El slug ya está en uso');
        }
        
        // Insertar
        $stmt = $conn->prepare("
            INSERT INTO tools (
                name, slug, description, category, icon, is_active, is_premium
            ) VALUES (
                ?, ?, ?, ?, ?, ?, ?
            )
        ");
        
        $stmt->execute([
            $name,
            $slug,
            $description,
            $category,
            $icon,
            $isActive ? 1 : 0,
            $isPremium ? 1 : 0
        ]);
        
        $newToolId = $conn->lastInsertId();
        
        // Log de actividad
        $stmt = $conn->prepare("
            INSERT INTO activity_logs (user_id, action, description, ip_address) 
            VALUES (?, 'tool_created', ?, ?)
        ");
        $stmt->execute([
            $_SESSION['user_id'],
            "Herramienta '$name' creada por administrador",
            $_SERVER['REMOTE_ADDR'] ?? 'unknown'
        ]);
        
        echo json_encode([
            'success' => true,
            'message' => 'Herramienta creada correctamente',
            'tool_id' => $newToolId
        ]);
    }

} catch (Exception $e) {
    error_log("Save tool error: " . $e->getMessage());
    http_response_code(400);
    echo json_encode([
        'success' => false, 
        'message' => $e->getMessage()
    ]);
}
?>
