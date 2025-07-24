<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../includes/auth.php';
require_once __DIR__ . '/../router.php';

$database = new Database();
$db = $database->getConnection();
$auth = new Auth($db);

// Verificar si está logueado y es admin
if (!$auth->isLoggedIn() || ($_SESSION['role'] ?? 'user') !== 'admin') {
    MainRouter::redirect('login');
    exit();
}

$page_title = "Configuración del Sistema - Admin";
$success_message = '';
$error_message = '';

// Obtener configuración actual
$settings_query = "SELECT * FROM admin_settings";
$settings_result = $db->query($settings_query);
$settings = [];
while ($row = $settings_result->fetch(PDO::FETCH_ASSOC)) {
    $settings[$row['setting_key']] = $row['setting_value'];
}

// Valores por defecto si no existen
$default_settings = [
    'site_name' => 'ObelisIA',
    'site_description' => 'Plataforma de herramientas de Inteligencia Artificial',
    'maintenance_mode' => '0',
    'allow_registration' => '1',
    'max_free_credits' => '10',
    'premium_price' => '9.99',
    'max_file_size' => '10',
    'supported_formats' => 'jpg,jpeg,png,gif,pdf,doc,docx',
    'smtp_host' => '',
    'smtp_port' => '587',
    'smtp_username' => '',
    'smtp_password' => '',
    'paypal_mode' => 'sandbox',
    'paypal_client_id' => '',
    'paypal_client_secret' => '',
    'stripe_publishable_key' => '',
    'stripe_secret_key' => ''
];

foreach ($default_settings as $key => $value) {
    if (!isset($settings[$key])) {
        $settings[$key] = $value;
    }
}

// Procesar formulario
if ($_POST) {
    try {
        $db->beginTransaction();
        
        // Actualizar o insertar configuraciones
        $update_stmt = $db->prepare("INSERT INTO admin_settings (setting_key, setting_value) VALUES (?, ?) ON DUPLICATE KEY UPDATE setting_value = VALUES(setting_value)");
        
        foreach ($_POST as $key => $value) {
            if ($key !== 'submit') {
                $update_stmt->execute([$key, $value]);
            }
        }
        
        $db->commit();
        $success_message = "Configuración actualizada correctamente.";
        
        // Recargar configuración
        $settings_result = $db->query($settings_query);
        $settings = [];
        while ($row = $settings_result->fetch(PDO::FETCH_ASSOC)) {
            $settings[$row['setting_key']] = $row['setting_value'];
        }
        
    } catch (Exception $e) {
        $db->rollback();
        $error_message = "Error al actualizar la configuración: " . $e->getMessage();
    }
}

// Función para obtener estadísticas del sistema
function getSystemStats($db) {
    $stats = [];
    
    // Espacio en disco
    $stats['disk_total'] = disk_total_space('/');
    $stats['disk_free'] = disk_free_space('/');
    $stats['disk_used'] = $stats['disk_total'] - $stats['disk_free'];
    
    // Información de PHP
    $stats['php_version'] = phpversion();
    $stats['memory_limit'] = ini_get('memory_limit');
    $stats['max_execution_time'] = ini_get('max_execution_time');
    $stats['upload_max_filesize'] = ini_get('upload_max_filesize');
    
    // Base de datos
    $db_size_query = "SELECT ROUND(SUM(data_length + index_length) / 1024 / 1024, 2) AS 'db_size' 
                      FROM information_schema.tables 
                      WHERE table_schema = DATABASE()";
    $db_size_result = $db->query($db_size_query);
    $stats['db_size'] = $db_size_result->fetch(PDO::FETCH_ASSOC)['db_size'];
    
    return $stats;
}

$system_stats = getSystemStats($db);
?>

<?php include __DIR__ . '/../src/Utils/header.php'; ?>

<div class="g-sidenav-show bg-gray-200">
    <!-- Admin Sidebar -->
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark">
        <div class="sidenav-header">
            <a class="navbar-brand m-0" href="<?php echo MainRouter::url('home'); ?>">
                <i class="material-icons opacity-6 text-white">admin_panel_settings</i>
                <span class="ms-1 font-weight-bold text-white">Admin Panel</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse w-auto">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo MainRouter::url('home'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-6">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="users.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-6">group</i>
                        </div>
                        <span class="nav-link-text ms-1">Usuarios</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="payments.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-6">payments</i>
                        </div>
                        <span class="nav-link-text ms-1">Pagos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="settings.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-6">settings</i>
                        </div>
                        <span class="nav-link-text ms-1">Configuración</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="<?php echo MainRouter::url('home'); ?>">Admin</a></li>
                        <li class="breadcrumb-item text-sm text-dark active">Configuración</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Configuración del Sistema</h6>
                </nav>
            </div>
        </nav>

        <!-- Content -->
        <div class="container-fluid py-4">
            <!-- Alerts -->
            <?php if (!empty($success_message)): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="material-icons me-2">check_circle</i>
                    <?php echo htmlspecialchars($success_message); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <?php if (!empty($error_message)): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="material-icons me-2">error</i>
                    <?php echo htmlspecialchars($error_message); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <div class="row">
                <!-- System Information -->
                <div class="col-lg-4">
                    <div class="card card-custom mb-4">
                        <div class="card-header pb-0">
                            <h6><i class="material-icons me-2">info</i>Información del Sistema</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <small class="text-uppercase text-xs font-weight-bold">Servidor</small>
                                    <p class="text-sm mb-0">PHP <?php echo $system_stats['php_version']; ?></p>
                                    <p class="text-xs text-secondary">Límite memoria: <?php echo $system_stats['memory_limit']; ?></p>
                                </div>
                                <div class="col-12 mb-3">
                                    <small class="text-uppercase text-xs font-weight-bold">Base de Datos</small>
                                    <p class="text-sm mb-0"><?php echo number_format($system_stats['db_size'], 2); ?> MB</p>
                                </div>
                                <div class="col-12 mb-3">
                                    <small class="text-uppercase text-xs font-weight-bold">Espacio en Disco</small>
                                    <div class="progress">
                                        <div class="progress-bar bg-gradient-info" style="width: <?php echo ($system_stats['disk_used'] / $system_stats['disk_total']) * 100; ?>%"></div>
                                    </div>
                                    <p class="text-xs text-secondary mt-1">
                                        <?php echo number_format($system_stats['disk_used'] / 1024 / 1024 / 1024, 2); ?> GB / 
                                        <?php echo number_format($system_stats['disk_total'] / 1024 / 1024 / 1024, 2); ?> GB
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Settings Form -->
                <div class="col-lg-8">
                    <form method="POST">
                        <!-- General Settings -->
                        <div class="card card-custom mb-4">
                            <div class="card-header pb-0">
                                <h6><i class="material-icons me-2">settings</i>Configuración General</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="input-group input-group-outline">
                                            <label class="form-label">Nombre del Sitio</label>
                                            <input type="text" class="form-control" name="site_name" value="<?php echo htmlspecialchars($settings['site_name']); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="maintenance_mode" value="1" <?php echo $settings['maintenance_mode'] ? 'checked' : ''; ?>>
                                            <label class="form-check-label">Modo Mantenimiento</label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="input-group input-group-outline">
                                            <label class="form-label">Descripción del Sitio</label>
                                            <textarea class="form-control" name="site_description" rows="3"><?php echo htmlspecialchars($settings['site_description']); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="allow_registration" value="1" <?php echo $settings['allow_registration'] ? 'checked' : ''; ?>>
                                            <label class="form-check-label">Permitir Registro</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Membership Settings -->
                        <div class="card card-custom mb-4">
                            <div class="card-header pb-0">
                                <h6><i class="material-icons me-2">card_membership</i>Configuración de Membresías</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="input-group input-group-outline">
                                            <label class="form-label">Créditos Gratuitos</label>
                                            <input type="number" class="form-control" name="max_free_credits" value="<?php echo htmlspecialchars($settings['max_free_credits']); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="input-group input-group-outline">
                                            <label class="form-label">Precio Premium ($)</label>
                                            <input type="number" step="0.01" class="form-control" name="premium_price" value="<?php echo htmlspecialchars($settings['premium_price']); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="input-group input-group-outline">
                                            <label class="form-label">Tamaño Máximo (MB)</label>
                                            <input type="number" class="form-control" name="max_file_size" value="<?php echo htmlspecialchars($settings['max_file_size']); ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="input-group input-group-outline">
                                            <label class="form-label">Formatos Soportados</label>
                                            <input type="text" class="form-control" name="supported_formats" value="<?php echo htmlspecialchars($settings['supported_formats']); ?>">
                                        </div>
                                        <small class="text-muted">Separar con comas (ej: jpg,png,pdf)</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Email Settings -->
                        <div class="card card-custom mb-4">
                            <div class="card-header pb-0">
                                <h6><i class="material-icons me-2">email</i>Configuración de Email</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="input-group input-group-outline">
                                            <label class="form-label">Servidor SMTP</label>
                                            <input type="text" class="form-control" name="smtp_host" value="<?php echo htmlspecialchars($settings['smtp_host']); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="input-group input-group-outline">
                                            <label class="form-label">Puerto SMTP</label>
                                            <input type="number" class="form-control" name="smtp_port" value="<?php echo htmlspecialchars($settings['smtp_port']); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="input-group input-group-outline">
                                            <label class="form-label">Usuario SMTP</label>
                                            <input type="text" class="form-control" name="smtp_username" value="<?php echo htmlspecialchars($settings['smtp_username']); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="input-group input-group-outline">
                                            <label class="form-label">Contraseña SMTP</label>
                                            <input type="password" class="form-control" name="smtp_password" value="<?php echo htmlspecialchars($settings['smtp_password']); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Settings -->
                        <div class="card card-custom mb-4">
                            <div class="card-header pb-0">
                                <h6><i class="material-icons me-2">payment</i>Configuración de Pagos</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <h6 class="text-sm">PayPal</h6>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <select class="form-select" name="paypal_mode">
                                            <option value="sandbox" <?php echo $settings['paypal_mode'] === 'sandbox' ? 'selected' : ''; ?>>Sandbox</option>
                                            <option value="live" <?php echo $settings['paypal_mode'] === 'live' ? 'selected' : ''; ?>>Live</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="input-group input-group-outline">
                                            <label class="form-label">Client ID</label>
                                            <input type="text" class="form-control" name="paypal_client_id" value="<?php echo htmlspecialchars($settings['paypal_client_id']); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="input-group input-group-outline">
                                            <label class="form-label">Client Secret</label>
                                            <input type="password" class="form-control" name="paypal_client_secret" value="<?php echo htmlspecialchars($settings['paypal_client_secret']); ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3 mt-3">
                                        <h6 class="text-sm">Stripe</h6>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="input-group input-group-outline">
                                            <label class="form-label">Publishable Key</label>
                                            <input type="text" class="form-control" name="stripe_publishable_key" value="<?php echo htmlspecialchars($settings['stripe_publishable_key']); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="input-group input-group-outline">
                                            <label class="form-label">Secret Key</label>
                                            <input type="password" class="form-control" name="stripe_secret_key" value="<?php echo htmlspecialchars($settings['stripe_secret_key']); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" name="submit" class="btn bg-gradient-primary">
                                <i class="material-icons me-2">save</i>Guardar Configuración
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include __DIR__ . '/../src/Utils/footer.php'; ?>
