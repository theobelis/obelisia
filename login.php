<?php
// Las siguientes líneas se eliminan porque ya están en index.php
// require_once __DIR__ . '/src/Config/config.php';
// require_once __DIR__ . '/src/Database/Database.php';
// require_once __DIR__ . '/src/Auth/Auth.php';
// require_once __DIR__ . '/src/Router/MainRouter.php';

// $database = new \ObelisIA\Database\Database();
// $db = $database->getConnection();
// $auth = new \ObelisIA\Auth\Auth($db);

// Si ya está logueado, redirigir al dashboard
// La variable $auth ya fue creada por index.php, así que podemos usarla directamente.
if ($auth->isLoggedIn()) {
    \ObelisIA\Router\MainRouter::redirect('panel');
}

$error_message = '';
$success_message = '';

if ($_POST) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if (empty($username) || empty($password)) {
        $error_message = "Por favor, complete todos los campos.";
    } else {
        if ($auth->login($username, $password)) {
            \ObelisIA\Router\MainRouter::redirect('panel');
        } else {
            $error_message = "Credenciales incorrectas. Verifique su usuario y contraseña.";
        }
    }
}

$page_title = "Iniciar Sesión - ObelisIA";
$body_class = "bg-gray-200";
?>

<?php include __DIR__ . '/src/Utils/header.php'; ?>

<div class="auth-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-4">
                <div class="auth-card">
                    <div class="auth-header">
                        <h2><i class="material-icons align-middle">account_circle</i> ObelisIA</h2>
                        <p>Ingresa a tu cuenta</p>
                    </div>

                    <div id="alert-container">
                        <?php if (!empty($error_message)): ?>
                            <div class="alert alert-danger alert-dismissible fade show alert-custom" role="alert">
                                <i class="material-icons me-2">error</i>
                                <?php echo htmlspecialchars($error_message); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($success_message)): ?>
                            <div class="alert alert-success alert-dismissible fade show alert-custom" role="alert">
                                <i class="material-icons me-2">check_circle</i>
                                <?php echo htmlspecialchars($success_message); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>
                    </div>

                    <form method="POST" class="needs-validation" novalidate>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="username" name="username" 
                                   placeholder="Usuario o Email" required value="<?php echo htmlspecialchars($username ?? ''); ?>">
                            <label for="username"><i class="material-icons me-2">person</i>Usuario o Email</label>
                            <div class="invalid-feedback">
                                Por favor, ingrese su usuario o email.
                            </div>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="password" name="password" 
                                   placeholder="Contraseña" required>
                            <label for="password"><i class="material-icons me-2">lock</i>Contraseña</label>
                            <div class="invalid-feedback">
                                Por favor, ingrese su contraseña.
                            </div>
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary-custom btn-lg">
                                <i class="material-icons me-2">login</i>Iniciar Sesión
                            </button>
                        </div>

                        <div class="text-center">
                            <p class="mb-2">¿No tienes cuenta? 
                                <a href="<?php echo \ObelisIA\Router\MainRouter::url('registro'); ?>" class="text-link">Regístrate aquí</a>
                            </p>
                            <p class="mb-0">
                                <a href="<?php echo \ObelisIA\Router\MainRouter::url('inicio'); ?>" class="text-link">
                                    <i class="material-icons align-middle me-1" style="font-size: 16px;">arrow_back</i>
                                    Volver al inicio
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/src/Utils/footer.php'; ?>
