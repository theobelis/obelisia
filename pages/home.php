<?php
// BORRAMOS todo el bloque de inicialización de PHP.

// Las variables $db y $auth ya existen porque las creó index.php.
// Solo definimos las variables específicas de esta página.
$page_title = "Inicio - ObelisIA";
$body_class = "";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="<?php echo $body_class; ?>">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo \ObelisIA\Router\MainRouter::url('inicio'); ?>">ObelisIA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo \ObelisIA\Router\MainRouter::url('inicio'); ?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo \ObelisIA\Router\MainRouter::url('acerca'); ?>">Acerca</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo \ObelisIA\Router\MainRouter::url('contacto'); ?>">Contacto</a>
                </li>
            </ul>
            
            <ul class="navbar-nav">
                <?php if ($auth->isLoggedIn()): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="material-icons align-middle me-1">person</i>
                            <?php echo htmlspecialchars($_SESSION['full_name']); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo \ObelisIA\Router\MainRouter::url('panel'); ?>">
                                <i class="material-icons me-2">dashboard</i>Mi Panel
                            </a></li>
                            <li><a class="dropdown-item" href="<?php echo \ObelisIA\Router\MainRouter::url('perfil'); ?>">
                                <i class="material-icons me-2">person</i>Mi Perfil
                            </a></li>
                            <?php if (($_SESSION['role'] ?? 'user') === 'admin'): ?>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?php echo \ObelisIA\Router\MainRouter::url('admin'); ?>">
                                <i class="material-icons me-2">admin_panel_settings</i>Admin Panel
                            </a></li>
                            <?php endif; ?>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="?logout=1">
                                <i class="material-icons me-2">logout</i>Cerrar Sesión
                            </a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo \ObelisIA\Router\MainRouter::url('acceso'); ?>">
                            <i class="material-icons align-middle me-1">login</i>Acceder
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ms-2" href="<?php echo \ObelisIA\Router\MainRouter::url('registro'); ?>">
                            <i class="material-icons align-middle me-1">person_add</i>Registrarse
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="hero-title">Potencia tu creatividad con <span class="text-gradient">ObelisIA</span></h1>
                    <p class="hero-subtitle">Suite completa de herramientas de IA para crear, editar y transformar</p>
                    <p class="hero-description">
                        Genera imágenes, videos, música y texto con IA. Edita fotos profesionalmente, 
                        remueve fondos, mejora resolución y crea paletas de colores únicas. Todo en una sola plataforma.
                    </p>
                    <div class="hero-buttons">
                        <?php if ($auth->isLoggedIn()): ?>
                            <a href="<?php echo \ObelisIA\Router\MainRouter::url('panel'); ?>" class="btn btn-primary-custom btn-lg me-3">
                                <i class="material-icons me-2">dashboard</i>
                                Ir al Dashboard
                            </a>
                        <?php else: ?>
                            <a href="<?php echo \ObelisIA\Router\MainRouter::url('registro'); ?>" class="btn btn-primary-custom btn-lg me-3">
                                <i class="material-icons me-2">auto_awesome</i>
                                Crear Gratis
                            </a>
                            <a href="<?php echo \ObelisIA\Router\MainRouter::url('acceso'); ?>" class="btn btn-outline-primary btn-lg">
                                <i class="material-icons me-2">login</i>
                                Iniciar Sesión
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="hero-stats mt-4">
                        <div class="row text-center">
                            <div class="col-4">
                                <div class="stat-mini">
                                    <h4 class="text-white mb-0">50K+</h4>
                                    <small class="text-white-50">Imágenes generadas</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="stat-mini">
                                    <h4 class="text-white mb-0">15+</h4>
                                    <small class="text-white-50">Herramientas IA</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="stat-mini">
                                    <h4 class="text-white mb-0">99.9%</h4>
                                    <small class="text-white-50">Uptime</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image">
                    <div class="floating-card">
                        <div class="card border-0 shadow-lg">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-box bg-gradient-primary me-3">
                                        <i class="material-icons text-white">image</i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Generador de Imágenes IA</h6>
                                        <small class="text-muted">Crea arte increíble con texto</small>
                                    </div>
                                </div>
                                <div class="progress mb-2" style="height: 8px;">
                                    <div class="progress-bar bg-gradient-primary" style="width: 85%"></div>
                                </div>
                                <small class="text-success"><i class="material-icons align-middle" style="font-size: 16px;">check_circle</i> Imagen generada exitosamente</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="features" class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="section-title">Herramientas de IA Profesionales</h2>
                <p class="section-subtitle">Todo lo que necesitas para crear contenido increíble con inteligencia artificial</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon bg-gradient-primary">
                        <i class="material-icons">image</i>
                    </div>
                    <h5>Generador de Imágenes IA</h5>
                    <p>Crea arte digital espectacular a partir de descripciones de texto con modelos de IA avanzados.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon bg-gradient-success">
                        <i class="material-icons">videocam</i>
                    </div>
                    <h5>Videos con IA</h5>
                    <p>Genera videos únicos, animaciones y contenido visual dinámico usando inteligencia artificial.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon bg-gradient-info">
                        <i class="material-icons">music_note</i>
                    </div>
                    <h5>Composición Musical</h5>
                    <p>Crea música original, efectos de sonido y composiciones personalizadas con IA.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon bg-gradient-warning">
                        <i class="material-icons">edit</i>
                    </div>
                    <h5>Editor de Imágenes</h5>
                    <p>Edita fotos profesionalmente con herramientas avanzadas y filtros inteligentes.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon bg-gradient-danger">
                        <i class="material-icons">layers_clear</i>
                    </div>
                    <h5>Removedor de Fondo</h5>
                    <p>Elimina fondos automáticamente con precisión perfecta usando IA avanzada.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon bg-gradient-dark">
                        <i class="material-icons">palette</i>
                    </div>
                    <h5>Paletas de Colores</h5>
                    <p>Genera paletas de colores armoniosas para tus proyectos de diseño y branding.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pricing" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="section-title">Planes y Precios</h2>
                <p class="section-subtitle">Elige el plan perfecto para tus necesidades creativas</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Gratuito</h3>
                        <div class="price">
                            <span class="currency">$</span>
                            <span class="amount">0</span>
                            <span class="period">/mes</span>
                        </div>
                        <p class="pricing-subtitle">Perfecto para empezar</p>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="material-icons">check</i> 10 generaciones de imágenes/mes</li>
                        <li><i class="material-icons">check</i> 3 videos IA/mes</li>
                        <li><i class="material-icons">check</i> Removedor de fondo básico</li>
                        <li><i class="material-icons">check</i> Editor de imágenes estándar</li>
                        <li><i class="material-icons">close text-muted</i> Marca de agua incluida</li>
                        <li><i class="material-icons">close text-muted</i> Resolución limitada</li>
                    </ul>
                    <div class="pricing-footer">
                        <?php if (!$auth->isLoggedIn()): ?>
                            <a href="<?php echo \ObelisIA\Router\MainRouter::url('registro'); ?>" class="btn btn-outline-primary w-100">Comenzar Gratis</a>
                        <?php else: ?>
                            <a href="<?php echo \ObelisIA\Router\MainRouter::url('panel'); ?>" class="btn btn-outline-primary w-100">Acceder</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pricing-card pricing-card-premium">
                    <div class="pricing-badge">Más Popular</div>
                    <div class="pricing-header">
                        <h3>Premium</h3>
                        <div class="price">
                            <span class="currency">$</span>
                            <span class="amount">19</span>
                            <span class="period">/mes</span>
                        </div>
                        <p class="pricing-subtitle">Para creativos profesionales</p>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="material-icons">check</i> Generaciones ilimitadas</li>
                        <li><i class="material-icons">check</i> Videos IA sin límite</li>
                        <li><i class="material-icons">check</i> Sin marca de agua</li>
                        <li><i class="material-icons">check</i> Máxima resolución (4K)</li>
                        <li><i class="material-icons">check</i> Todas las herramientas</li>
                        <li><i class="material-icons">check</i> Soporte prioritario 24/7</li>
                        <li><i class="material-icons">check</i> API acceso</li>
                        <li><i class="material-icons">check</i> Almacenamiento en la nube</li>
                    </ul>
                    <div class="pricing-footer">
                        <?php if (!$auth->isLoggedIn()): ?>
                            <a href="<?php echo \ObelisIA\Router\MainRouter::url('registro'); ?>" class="btn btn-primary-custom w-100">Comenzar Premium</a>
                        <?php else: ?>
                            <a href="<?php echo \ObelisIA\Router\MainRouter::url('panel'); ?>" class="btn btn-primary-custom w-100">Upgrade a Premium</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="section-title">Sobre ObelisIA</h2>
                <p class="mb-4">
                    ObelisIA es la plataforma líder en herramientas de inteligencia artificial para creadores, 
                    diseñadores y empresas. Democratizamos el acceso a tecnologías de IA avanzadas para que 
                    cualquier persona pueda crear contenido profesional sin conocimientos técnicos.
                </p>
                <div class="row g-3">
                    <div class="col-6">
                        <div class="stat-item">
                            <h4 class="text-primary mb-0">50K+</h4>
                            <small class="text-muted">Creaciones generadas</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-item">
                            <h4 class="text-primary mb-0">15+</h4>
                            <small class="text-muted">Herramientas IA</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-item">
                            <h4 class="text-primary mb-0">5K+</h4>
                            <small class="text-muted">Usuarios activos</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-item">
                            <h4 class="text-primary mb-0">99.9%</h4>
                            <small class="text-muted">Satisfacción</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="AI Creative Tools" class="img-fluid rounded-3 shadow">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title mb-4">¿Listo para crear con IA?</h2>
                <p class="section-subtitle mb-4">
                    Únete a miles de creadores que ya usan ObelisIA para dar vida a sus ideas con inteligencia artificial.
                </p>
                <?php if (!$auth->isLoggedIn()): ?>
                    <div class="cta-buttons">
                        <a href="<?php echo \ObelisIA\Router\MainRouter::url('registro'); ?>" class="btn btn-primary-custom btn-lg me-3">
                            <i class="material-icons me-2">auto_awesome</i>
                            Comenzar Gratis
                        </a>
                        <a href="<?php echo \ObelisIA\Router\MainRouter::url('precios'); ?>" class="btn btn-outline-primary btn-lg">
                            <i class="material-icons me-2">credit_card</i>
                            Ver Planes
                        </a>
                    </div>
                <?php else: ?>
                    <a href="<?php echo \ObelisIA\Router\MainRouter::url('panel'); ?>" class="btn btn-primary-custom btn-lg">
                        <i class="material-icons me-2">dashboard</i>
                        Ir al Dashboard
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="mb-3">
                    <i class="material-icons align-middle me-2">dashboard</i>
                    ObelisIA
                </h5>
                <p class="mb-0">Suite completa de herramientas de IA para crear, editar y transformar contenido.</p>
            </div>
            <div class="col-lg-6 text-lg-end">
                <p class="mb-0">&copy; <?php echo date('Y'); ?> ObelisIA. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>

<?php 
// Ruta corregida para el footer. Salimos de /pages para llegar a la raíz.
include __DIR__ . '/../src/Utils/footer.php'; 
?>
</body>
</html>