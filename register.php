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
// La variable $auth ya fue creada por index.php.
if ($auth->isLoggedIn()) {
    \ObelisIA\Router\MainRouter::redirect('panel');
}

$error_message = '';
$success_message = '';

if ($_POST) {
    // ... La lógica de tu formulario no cambia ...
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $full_name = $_POST['full_name'] ?? '';
    
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password) || empty($full_name)) {
        $error_message = "Por favor, complete todos los campos.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Por favor, ingrese un email válido.";
    } elseif (strlen($password) < 6) {
        $error_message = "La contraseña debe tener al menos 6 caracteres.";
    } elseif ($password !== $confirm_password) {
        $error_message = "Las contraseñas no coinciden.";
    } else {
        if ($auth->register($username, $email, $password, $full_name)) {
            $success_message = "Registro exitoso. Ya puedes iniciar sesión.";
            $username = $email = $full_name = '';
        } else {
            $error_message = "El usuario o email ya existe. Por favor, elija otro.";
        }
    }
}

$page_title = "Registro - ObelisIA";
$body_class = "bg-gray-200";
?>

<?php include __DIR__ . '/src/Utils/header.php'; ?>

<div class="auth-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="auth-card">
                    <div class="auth-header">
                        <h2><i class="material-icons align-middle">person_add</i> ObelisIA</h2>
                        <p>Crea tu cuenta</p>
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
                            <input type="text" class="form-control" id="full_name" name="full_name" 
                                   placeholder="Nombre Completo" required value="<?php echo htmlspecialchars($full_name ?? ''); ?>">
                            <label for="full_name"><i class="material-icons me-2">badge</i>Nombre Completo</label>
                            <div class="invalid-feedback">
                                Por favor, ingrese su nombre completo.
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="username" name="username" 
                                   placeholder="Usuario" required value="<?php echo htmlspecialchars($username ?? ''); ?>">
                            <label for="username"><i class="material-icons me-2">person</i>Usuario</label>
                            <div class="invalid-feedback">
                                Por favor, elija un nombre de usuario.
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" 
                                   placeholder="Email" required value="<?php echo htmlspecialchars($email ?? ''); ?>">
                            <label for="email"><i class="material-icons me-2">email</i>Email</label>
                            <div class="invalid-feedback">
                                Por favor, ingrese un email válido.
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" name="password" 
                                   placeholder="Contraseña" required minlength="6">
                            <label for="password"><i class="material-icons me-2">lock</i>Contraseña</label>
                            <div class="invalid-feedback">
                                La contraseña debe tener al menos 6 caracteres.
                            </div>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" 
                                   placeholder="Confirmar Contraseña" required>
                            <label for="confirm_password"><i class="material-icons me-2">lock</i>Confirmar Contraseña</label>
                            <div class="invalid-feedback">
                                Por favor, confirme su contraseña.
                            </div>
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary-custom btn-lg">
                                <i class="material-icons me-2">person_add</i>Registrarse
                            </button>
                        </div>

                        <div class="text-center">
                            <p class="mb-2">¿Ya tienes cuenta? 
                                <a href="<?php echo \ObelisIA\Router\MainRouter::url('acceso'); ?>" class="text-link">Inicia sesión aquí</a>
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
