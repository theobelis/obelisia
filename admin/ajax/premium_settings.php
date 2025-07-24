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
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // Obtener configuraciones actuales
        $stmt = $conn->prepare("SELECT * FROM premium_settings ORDER BY id DESC LIMIT 1");
        $stmt->execute();
        $settings = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if (!$settings) {
            $settings = [
                'monthly_price' => 9.99,
                'yearly_price' => 99.99,
                'premium_credits' => 1000,
                'enterprise_price' => 299.99,
                'premium_features' => "Acceso ilimitado a herramientas\nSoporte prioritario\nAPI avanzada\nAnalíticas detalladas",
                'enable_trial' => 1,
                'trial_days' => 7
            ];
        }
        
        echo json_encode([
            'success' => true,
            'settings' => $settings
        ]);
        
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents('php://input'), true);
        if (!isset($_SESSION['csrf_token']) || !isset($data['csrf_token']) || $data['csrf_token'] !== $_SESSION['csrf_token']) {
            http_response_code(403);
            echo json_encode([
                'success' => false,
                'message' => 'Token CSRF inválido'
            ]);
            exit;
        }
        // Guardar configuraciones
        $monthlyPrice = (float)($data['monthly_price'] ?? 9.99);
        $yearlyPrice = (float)($data['yearly_price'] ?? 99.99);
        $premiumCredits = (int)($data['premium_credits'] ?? 1000);
        $enterprisePrice = (float)($data['enterprise_price'] ?? 299.99);
        $premiumFeatures = $data['premium_features'] ?? '';
        $enableTrial = isset($data['enable_trial']) ? 1 : 0;
        $trialDays = (int)($data['trial_days'] ?? 7);
        
        // Calcular descuento anual
        $yearlyDiscount = round((1 - ($yearlyPrice / ($monthlyPrice * 12))) * 100, 2);
        
        // Verificar si ya existe configuración
        $checkStmt = $conn->prepare("SELECT id FROM premium_settings LIMIT 1");
        $checkStmt->execute();
        $exists = $checkStmt->fetch();
        
        if ($exists) {
            // Actualizar
            $stmt = $conn->prepare("
                UPDATE premium_settings SET 
                monthly_price = ?, yearly_price = ?, premium_credits = ?, 
                enterprise_price = ?, premium_features = ?, enable_trial = ?, 
                trial_days = ?, yearly_discount = ?, updated_at = NOW()
                WHERE id = ?
            ");
            $stmt->execute([
                $monthlyPrice, $yearlyPrice, $premiumCredits, 
                $enterprisePrice, $premiumFeatures, $enableTrial, 
                $trialDays, $yearlyDiscount, $exists['id']
            ]);
        } else {
            // Insertar
            $stmt = $conn->prepare("
                INSERT INTO premium_settings 
                (monthly_price, yearly_price, premium_credits, enterprise_price, 
                premium_features, enable_trial, trial_days, yearly_discount, created_at, updated_at) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())
            ");
            $stmt->execute([
                $monthlyPrice, $yearlyPrice, $premiumCredits, $enterprisePrice,
                $premiumFeatures, $enableTrial, $trialDays, $yearlyDiscount
            ]);
        }
        
        // Log de actividad
        try {
            $logStmt = $conn->prepare("
                INSERT INTO admin_activity_log (admin_id, action, target_type, target_id, details, created_at) 
                VALUES (?, 'premium_settings_updated', 'system', NULL, ?, NOW())
            ");
            $details = json_encode([
                'monthly_price' => $monthlyPrice,
                'yearly_price' => $yearlyPrice,
                'yearly_discount' => $yearlyDiscount
            ]);
            $logStmt->execute([$_SESSION['user_id'], $details]);
        } catch (Exception $logError) {
            error_log("Error logging premium settings update: " . $logError->getMessage());
        }
        
        echo json_encode([
            'success' => true,
            'message' => 'Configuración de precios actualizada exitosamente',
            'yearly_discount' => $yearlyDiscount
        ]);
    }

} catch (Exception $e) {
    error_log("Error en premium_settings.php: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
?>
