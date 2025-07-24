<?php
// El front controller (index.php) ya ha inicializado $auth y $db.
// No es necesario volver a requerir archivos ni instanciar clases.

// Verificar autenticación
if (!$auth->isLoggedIn()) {
    \ObelisIA\Router\MainRouter::redirect('acceso');
}
$user = $auth->getCurrentUser();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ObelisIA</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <style>
        .dashboard-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .dashboard-card:hover {
            transform: translateY(-2px);
        }
        .stat-icon {
            font-size: 2.5rem;
            opacity: 0.8;
        }
        .welcome-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 12px;
            color: white;
            padding: 2rem;
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/src/Utils/header.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Welcome Section -->
                <div class="welcome-section">
                    <h1 class="mb-3">¡Bienvenido, <?php echo htmlspecialchars($user['username']); ?>!</h1>
                    <p class="mb-0">Gestiona tu cuenta y accede a todas las herramientas de IA desde tu panel personal.</p>
                </div>

                <!-- Quick Stats -->
                <div class="row mb-4">
                    <div class="col-md-3 mb-3">
                        <div class="card dashboard-card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-user stat-icon text-primary mb-3"></i>
                                <h5 class="card-title">Mi Perfil</h5>
                                <p class="text-muted">Gestiona tu información personal</p>
                                <a href="perfil" class="btn btn-primary btn-sm">Ver Perfil</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card dashboard-card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-robot stat-icon text-success mb-3"></i>
                                <h5 class="card-title">Herramientas IA</h5>
                                <p class="text-muted">Accede a nuestras herramientas</p>
                                <a href="#tools" class="btn btn-success btn-sm">Explorar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card dashboard-card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-crown stat-icon text-warning mb-3"></i>
                                <h5 class="card-title">Upgrade</h5>
                                <p class="text-muted">Mejora tu plan</p>
                                <a href="premium" class="btn btn-warning btn-sm">Ver Planes</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card dashboard-card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-cogs stat-icon text-info mb-3"></i>
                                <h5 class="card-title">Configuración</h5>
                                <p class="text-muted">Ajusta tus preferencias</p>
                                <a href="#settings" class="btn btn-info btn-sm">Configurar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Admin Panel Access -->
                <?php if ($user['role'] === 'admin'): ?>
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card dashboard-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-shield-alt stat-icon text-danger me-4"></i>
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-1">Panel de Administración</h5>
                                        <p class="text-muted mb-0">Gestiona usuarios, pagos, herramientas y configuraciones del sistema</p>
                                    </div>
                                    <a href="admin/" class="btn btn-danger">Acceder al Panel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Recent Activity -->
                <div class="row">
                    <div class="col-lg-8 mb-4">
                        <div class="card dashboard-card">
                            <div class="card-header bg-transparent">
                                <h5 class="card-title mb-0">
                                    <i class="fas fa-clock me-2"></i>Actividad Reciente
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item border-0 px-0">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-user-circle text-primary me-3"></i>
                                            <div>
                                                <h6 class="mb-1">Perfil actualizado</h6>
                                                <small class="text-muted">Hace 2 horas</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item border-0 px-0">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-robot text-success me-3"></i>
                                            <div>
                                                <h6 class="mb-1">Herramienta IA utilizada</h6>
                                                <small class="text-muted">Hace 1 día</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item border-0 px-0">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-sign-in-alt text-info me-3"></i>
                                            <div>
                                                <h6 class="mb-1">Sesión iniciada</h6>
                                                <small class="text-muted">Hace 2 días</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card dashboard-card">
                            <div class="card-header bg-transparent">
                                <h5 class="card-title mb-0">
                                    <i class="fas fa-chart-line me-2"></i>Estadísticas
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <small class="text-muted">Herramientas utilizadas</small>
                                    <div class="progress mt-1" style="height: 8px;">
                                        <div class="progress-bar bg-primary" style="width: 75%"></div>
                                    </div>
                                    <small class="text-muted">15/20 este mes</small>
                                </div>
                                <div class="mb-3">
                                    <small class="text-muted">Tiempo activo</small>
                                    <div class="progress mt-1" style="height: 8px;">
                                        <div class="progress-bar bg-success" style="width: 60%"></div>
                                    </div>
                                    <small class="text-muted">12h esta semana</small>
                                </div>
                                <div>
                                    <small class="text-muted">Plan actual</small>
                                    <div class="mt-1">
                                        <span class="badge bg-<?php echo $user['subscription_type'] === 'premium' ? 'warning' : 'secondary'; ?>">
                                            <?php echo ucfirst($user['subscription_type']); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/src/Utils/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>
