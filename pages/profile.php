<?php
// El front controller (index.php) ya ha inicializado $auth, $db y la sesión.

// Verificar si está logueado. La variable $auth ya existe.
if (!$auth->isLoggedIn()) {
    // La clase MainRouter ya está cargada por el autoload de index.php.
    \ObelisIA\Router\MainRouter::redirect('acceso');
}

$page_title = "Perfil - ObelisIA";
$success_message = '';
$error_message = '';

// Obtener datos del usuario actual a través del método de la clase Auth
$user_data = $auth->getCurrentUser();

// Generar token CSRF si no existe
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Manejar actualización de perfil
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar token CSRF
    if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        $error_message = "Token de seguridad inválido. Por favor, recarga la página e intenta de nuevo.";
    } else {
        $full_name = $_POST['full_name'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $bio = $_POST['bio'] ?? '';
        $address = $_POST['address'] ?? '';
        
        if (empty($full_name) || empty($email)) {
            $error_message = "El nombre completo y el email son obligatorios.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_message = "Por favor, ingrese un email válido.";
        } else {
            // Verificar si el email ya existe (excluyendo el usuario actual)
            $check_query = "SELECT id FROM users WHERE email = ? AND id != ?";
            $check_stmt = $db->prepare($check_query);
            $check_stmt->execute([$email, $_SESSION['user_id']]);
            
            if ($check_stmt->rowCount() > 0) {
                $error_message = "Este email ya está en uso por otro usuario.";
            } else {
                // Actualizar perfil
                $update_query = "UPDATE users SET full_name = ?, email = ?, phone = ?, bio = ?, address = ?, updated_at = NOW() WHERE id = ?";
                $update_stmt = $db->prepare($update_query);
                
                if ($update_stmt->execute([$full_name, $email, $phone, $bio, $address, $_SESSION['user_id']])) {
                    $success_message = "Perfil actualizado correctamente.";
                    $_SESSION['full_name'] = $full_name;
                    $_SESSION['email'] = $email;
                    // Recargar datos del usuario forzando una nueva consulta a la BD
                    $user_data = $auth->getCurrentUser(true);
                } else {
                    $error_message = "Error al actualizar el perfil.";
                }
            }
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
                    <a class="nav-link text-white active bg-gradient-primary" href="<?php echo \ObelisIA\Router\MainRouter::url('perfil'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-6">person</i>
                        </div>
                        <span class="nav-link-text ms-1">Perfil</span>
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo \ObelisIA\Router\MainRouter::url('premium'); ?>">
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
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Perfil</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Mi Perfil</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <span class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none"><?php echo htmlspecialchars($_SESSION['full_name']); ?></span>
                        </span>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card card-custom">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Editar Perfil</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php if (!empty($error_message)): ?>
                                <div class="alert alert-danger text-white alert-dismissible fade show" role="alert">
                                    <i class="material-icons me-2">error</i>
                                    <?php echo htmlspecialchars($error_message); ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($success_message)): ?>
                                <div class="alert alert-success text-white alert-dismissible fade show" role="alert">
                                    <i class="material-icons me-2">check_circle</i>
                                    <?php echo htmlspecialchars($success_message); ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>

                            <form method="POST" class="needs-validation" novalidate>
                                <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
                                <p class="text-sm">Información de Usuario</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Nombre Completo</label>
                                            <input type="text" class="form-control" name="full_name" required 
                                                   value="<?php echo htmlspecialchars($user_data['full_name']); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" required 
                                                   value="<?php echo htmlspecialchars($user_data['email']); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group input-group-static mb-3">
                                            <label>Usuario</label>
                                            <input type="text" class="form-control" readonly 
                                                   value="<?php echo htmlspecialchars($user_data['username']); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Teléfono</label>
                                            <input type="tel" class="form-control" name="phone" 
                                                   value="<?php echo htmlspecialchars($user_data['phone'] ?? ''); ?>">
                                        </div>
                                    </div>
                                </div>
                                <hr class="horizontal dark">
                                <p class="text-sm">Sobre Mí</p>
                                <div class="input-group input-group-outline mb-3">
                                    <textarea class="form-control" name="bio" rows="4" placeholder="Cuéntanos un poco sobre ti..."><?php echo htmlspecialchars($user_data['bio'] ?? ''); ?></textarea>
                                </div>
                                 <div class="input-group input-group-outline mb-3">
                                    <textarea class="form-control" name="address" rows="2" placeholder="Tu dirección..."><?php echo htmlspecialchars($user_data['address'] ?? ''); ?></textarea>
                                </div>
                                <button type="submit" class="btn bg-gradient-primary">
                                    <i class="material-icons me-2">save</i>Guardar Cambios
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-profile card-custom">
                        <img src="https://demos.creative-tim.com/material-dashboard/assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
                        <div class="row justify-content-center">
                            <div class="col-4 col-lg-4 order-lg-2">
                                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                    <a href="javascript:;">
                                        <img src="https://demos.creative-tim.com/material-dashboard/assets/img/team-2.jpg" class="rounded-circle img-fluid border border-2 border-white">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                            <div class="d-flex justify-content-between">
                                <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Conectar</a>
                                <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Mensaje</a>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="text-center mt-4">
                                <h5><?php echo htmlspecialchars($user_data['full_name']); ?><span class="font-weight-light">, 27</span></h5>
                                <div class="h6 font-weight-300">
                                    <i class="ni location_pin mr-2"></i><?php echo htmlspecialchars($user_data['address'] ?? 'Ubicación no disponible'); ?>
                                </div>
                                <div class="h6 mt-4">
                                    <i class="ni business_briefcase-24 mr-2"></i><?php echo ucfirst(htmlspecialchars($user_data['role'])); ?> - ObelisIA
                                </div>
                                <div>
                                    <i class="ni education_hat mr-2"></i><?php echo htmlspecialchars($user_data['bio'] ?? 'Biografía no disponible'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include __DIR__ . '/../src/Utils/footer.php'; ?>