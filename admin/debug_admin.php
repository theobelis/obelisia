<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>🔧 Debug Admin Panel</h1>";

// Test 1: Verificar archivos de configuración
echo "<h3>1. Archivos de Configuración:</h3>";
$config_files = [
    '../config/config.php',
    '../includes/auth.php',
    '../config/database.php'
];

foreach ($config_files as $file) {
    echo "<p>";
    if (file_exists($file)) {
        echo "✅ $file - Existe";
        if (is_readable($file)) {
            echo " y es legible";
        } else {
            echo " pero NO es legible";
        }
    } else {
        echo "❌ $file - NO existe";
    }
    echo "</p>";
}

// Test 2: Verificar includes
echo "<h3>2. Test de Includes:</h3>";
try {
    require_once '../config/config.php';
    echo "✅ config.php cargado correctamente<br>";
} catch (Exception $e) {
    echo "❌ Error cargando config.php: " . $e->getMessage() . "<br>";
}

try {
    require_once '../includes/auth.php';
    echo "✅ auth.php cargado correctamente<br>";
} catch (Exception $e) {
    echo "❌ Error cargando auth.php: " . $e->getMessage() . "<br>";
}

// Test 3: Verificar funciones de autenticación
echo "<h3>3. Test de Autenticación:</h3>";
if (function_exists('isLoggedIn')) {
    echo "✅ Función isLoggedIn() existe<br>";
    $logged = isLoggedIn();
    echo "Resultado isLoggedIn(): " . ($logged ? "TRUE" : "FALSE") . "<br>";
} else {
    echo "❌ Función isLoggedIn() NO existe<br>";
}

if (function_exists('getCurrentUser')) {
    echo "✅ Función getCurrentUser() existe<br>";
    $user = getCurrentUser();
    echo "Usuario actual: " . ($user ? print_r($user, true) : "NULL") . "<br>";
} else {
    echo "❌ Función getCurrentUser() NO existe<br>";
}

// Test 4: Verificar sesión
echo "<h3>4. Estado de Sesión:</h3>";
echo "Session status: " . session_status() . "<br>";
echo "Session ID: " . session_id() . "<br>";
echo "Session data: <pre>" . print_r($_SESSION ?? [], true) . "</pre>";

// Test 5: Verificar assets
echo "<h3>5. Verificar Assets:</h3>";
$assets = [
    '../assets/css/admin-panel.css',
    '../assets/js/admin-panel.js'
];

foreach ($assets as $asset) {
    echo "<p>";
    if (file_exists($asset)) {
        echo "✅ $asset - Existe (" . filesize($asset) . " bytes)";
    } else {
        echo "❌ $asset - NO existe";
    }
    echo "</p>";
}

echo "<h3>6. Test Completo de Admin Panel:</h3>";
try {
    // Simular el inicio del admin panel
    if (!isLoggedIn()) {
        echo "❌ Usuario no está logueado - se redirigiría a login<br>";
    } else {
        $user = getCurrentUser();
        if ($user['role'] !== 'admin') {
            echo "❌ Usuario no es admin - se redirigiría a 403<br>";
        } else {
            echo "✅ Usuario es admin - panel debería funcionar<br>";
        }
    }
} catch (Exception $e) {
    echo "❌ Error en test completo: " . $e->getMessage() . "<br>";
}
?>
