<?php
// El front controller (index.php) ya ha inicializado $auth, $db y la sesión.

// Verificar si está logueado
if (!$auth->isLoggedIn()) {
    \ObelisIA\Router\MainRouter::redirect('acceso');
}

$page_title = "Upgrade a Premium - ObelisIA";
$success_message = '';
$error_message = '';

// Generar token CSRF si no existe
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Manejar upgrade (simulado)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['upgrade'])) {
    // Verificar token CSRF
    if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        $error_message = "Acción no permitida. Por favor, recarga la página e intenta de nuevo.";
    } else {
        // En un sistema real, aquí se integraría con un procesador de pagos como Stripe
        $update_query = "UPDATE users SET membership_type = 'premium', membership_expires_at = DATE_ADD(NOW(), INTERVAL 1 MONTH) WHERE id = ?";
        $update_stmt = $db->prepare($update_query);
        
        if ($update_stmt->execute([$_SESSION['user_id']])) {
            $_SESSION['membership_type'] = 'premium';
            $success_message = "¡Felicidades! Tu cuenta ha sido actualizada a Premium.";
        } else {
            $error_message = "Error al procesar el upgrade. Inténtalo nuevamente.";
        }
    }
}
?>

<?php include __DIR__ . '/../src/Utils/header.php'; ?>

<div class="g-sidenav-show bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <a class="navbar-brand m-0" href="<?php echo \ObelisIA\Router\MainRouter::url('panel'); ?>">
                <i class="material-icons opacity-6 text-white">dashboard</i>
                <span class="ms-1 font-weight-bold text-white">ObelisIA</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse w-auto">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo \ObelisIA\Router\MainRouter::url('panel'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-6">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo \ObelisIA\Router\MainRouter::url('perfil'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-6">person</i>
                        </div>
                        <span class="nav-link-text ms-1">Perfil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="<?php echo \ObelisIA\Router\MainRouter::url('premium'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-6">star</i>
                        </div>
                        <span class="nav-link-text ms-1">Upgrade Premium</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidenav-footer position-absolute w-100 bottom-0">
            <div class="mx-3">
                <a class="btn bg-gradient-primary mt-4 w-100" href="?logout=1" type="button">
                    <i class="material-icons opacity-6 me-2">logout</i>Cerrar Sesión
                </a>
            </div>
        </div>
    </aside>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="<?php echo \ObelisIA\Router\MainRouter::url('panel'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Upgrade Premium</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Upgrade a Premium</h6>
                </nav>
            </div>
        </nav>

        <div class="container-fluid py-4">
             <?php if (!empty($success_message)): ?>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card card-custom text-center">
                            <div class="card-body p-5">
                                <div class="icon-box bg-gradient-success mx-auto mb-4" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                                    <i class="material-icons text-white" style="font-size: 2.5rem;">star</i>
                                </div>
                                <h3 class="mb-3">¡Ya eres Premium!</h3>
                                <p class="text-muted mb-4"><?php echo htmlspecialchars($success_message); ?></p>
                                <a href="<?php echo \ObelisIA\Router\MainRouter::url('panel'); ?>" class="btn btn-primary-custom btn-lg">
                                    <i class="material-icons me-2">dashboard</i>
                                    Ir al Dashboard
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php elseif (($_SESSION['membership_type'] ?? 'free') === 'premium'): ?>
                 <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card card-custom text-center">
                            <div class="card-body p-5">
                                <div class="icon-box bg-gradient-success mx-auto mb-4" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                                    <i class="material-icons text-white" style="font-size: 2.5rem;">check_circle</i>
                                </div>
                                <h3 class="mb-3">Tu cuenta ya es Premium</h3>
                                <p class="text-muted mb-4">Ya disfrutas de todas las funciones ilimitadas de ObelisIA.</p>
                                <a href="<?php echo \ObelisIA\Router\MainRouter::url('panel'); ?>" class="btn btn-primary-custom btn-lg">
                                    <i class="material-icons me-2">dashboard</i>
                                    Ir al Dashboard
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2 class="section-title">Desbloquea el Poder Completo de la IA</h2>
                        <p class="section-subtitle">Crea sin límites con nuestro plan Premium</p>
                    </div>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6 mb-4">
                        <div class="pricing-card h-100">
                            <div class="pricing-header">
                                <h3>Plan Actual: Gratuito</h3>
                                <div class="price">
                                    <span class="currency">$</span>
                                    <span class="amount">0</span>
                                    <span class="period">/mes</span>
                                </div>
                            </div>
                            <ul class="pricing-features">
                                <li><i class="material-icons text-warning">warning</i> Generaciones limitadas</li>
                                <li><i class="material-icons text-warning">warning</i> Con marca de agua</li>
                                <li><i class="material-icons text-warning">warning</i> Resolución estándar</li>
                                <li><i class="material-icons text-warning">warning</i> Sin soporte prioritario</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6 mb-4">
                        <div class="pricing-card pricing-card-premium h-100">
                            <div class="pricing-badge">¡Recomendado!</div>
                            <div class="pricing-header">
                                <h3>Premium</h3>
                                <div class="price">
                                    <span class="currency">$</span>
                                    <span class="amount">19</span>
                                    <span class="period">/mes</span>
                                </div>
                            </div>
                            <ul class="pricing-features">
                                <li><i class="material-icons text-success">check_circle</i> Generaciones ilimitadas</li>
                                <li><i class="material-icons text-success">check_circle</i> Sin marca de agua</li>
                                <li><i class="material-icons text-success">check_circle</i> Máxima resolución (4K)</li>
                                <li><i class="material-icons text-success">check_circle</i> Soporte prioritario 24/7</li>
                                <li><i class="material-icons text-success">check_circle</i> Acceso API</li>
                            </ul>
                            <div class="pricing-footer mt-auto">
                                <?php if (!empty($error_message)): ?>
                                    <div class="alert alert-danger text-white" role="alert">
                                        <i class="material-icons me-2">error</i>
                                        <?php echo htmlspecialchars($error_message); ?>
                                    </div>
                                <?php endif; ?>
                                
                                <form method="POST">
                                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
                                    <input type="hidden" name="upgrade" value="1">
                                    <button type="submit" class="btn btn-primary-custom w-100 btn-lg">
                                        <i class="material-icons me-2">rocket_launch</i>
                                        Upgrade a Premium
                                    </button>
                                </form>
                                <small class="text-muted d-block mt-2">*Prueba gratuita por 7 días, luego se cobra mensualmente.</small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </main>
</div>

<?php include __DIR__ . '/../src/Utils/footer.php'; ?>