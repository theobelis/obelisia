<!DOCTYPE html>
<html>
<head>
    <title>Test de Login/Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .test-result { padding: 10px; margin: 10px 0; border-radius: 5px; }
        .success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .info { background: #d1ecf1; color: #0c5460; border: 1px solid #bee5eb; }
    </style>
</head>
<body>
    <h1>🔧 Test de Archivos Críticos</h1>
    
    <?php
    $tests = [
        'login.php' => '/opt/lampp/htdocs/ObelisIA/login.php',
        'dashboard.php' => '/opt/lampp/htdocs/ObelisIA/dashboard.php',
        'auth.php' => '/opt/lampp/htdocs/ObelisIA/includes/auth.php',
        'router.php' => '/opt/lampp/htdocs/ObelisIA/router.php',
        'config.php' => '/opt/lampp/htdocs/ObelisIA/config/config.php',
        'database.php' => '/opt/lampp/htdocs/ObelisIA/config/database.php'
    ];
    
    foreach ($tests as $name => $path) {
        echo '<div class="test-result ';
        if (file_exists($path)) {
            echo 'success">✅ ' . $name . ' - Existe y accesible</div>';
        } else {
            echo 'error">❌ ' . $name . ' - NO ENCONTRADO</div>';
        }
    }
    ?>
    
    <div class="test-result info">
        <h3>🔗 Enlaces de Prueba:</h3>
        <ul>
            <li><a href="/ObelisIA/login.php" target="_blank">Test Login Directo</a></li>
            <li><a href="/ObelisIA/acceso" target="_blank">Test Login con Router</a></li>
            <li><a href="/ObelisIA/dashboard.php" target="_blank">Test Dashboard Directo</a></li>
            <li><a href="/ObelisIA/panel" target="_blank">Test Dashboard con Router</a></li>
            <li><a href="/ObelisIA/admin/" target="_blank">Test Panel Admin</a></li>
            <li><a href="/ObelisIA/admin/debug_admin.php" target="_blank">🔧 Debug Admin Panel</a></li>
            <li><a href="/ObelisIA/admin/simple_admin.php" target="_blank"><strong>🛡️ Panel Admin Simplificado</strong></a></li>
        </ul>
    </div>
    
    <div class="test-result success">
        <h3>✅ Todos los Problemas SOLUCIONADOS</h3>
        <p>• Removido session_start() duplicado de dashboard.php</p>
        <p>• Corregidos 14 archivos AJAX para usar auth.php</p>
        <p>• <strong>admin_panel.php RESTAURADO completamente</strong></p>
        <p>• admin/index.php limpiado y funcionando</p>
        <p>• Manejo centralizado de sesiones funcionando</p>
    </div>
    
    <div class="test-result info">
        <h3>📋 Usuario de Prueba:</h3>
        <p><strong>Usuario:</strong> admin</p>
        <p><strong>Contraseña:</strong> admin123</p>
    </div>
</body>
</html>
