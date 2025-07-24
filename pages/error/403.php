<?php
// Las páginas de error son incluidas desde router.php, no necesitan requires adicionales
$page_title = "Acceso denegado - ObelisIA";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    
    <!-- Fonts and icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Material Dashboard CSS -->
    <link id="pagestyle" href="/ObelisIA/assets/css/material-dashboard.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="/ObelisIA/assets/css/custom.css" rel="stylesheet">
    
    <style>
        .error-container {
            min-height: 100vh;
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        
        .error-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="rgba(255,255,255,0.1)"><polygon points="1000,100 1000,0 0,100"/></svg>') no-repeat bottom;
            background-size: 100% 100px;
        }
        
        .error-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            padding: 3rem;
            max-width: 600px;
            width: 100%;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        
        .error-number {
            font-size: 8rem;
            font-weight: 700;
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1;
            margin-bottom: 1rem;
        }
        
        .error-title {
            font-size: 2rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 1rem;
        }
        
        .error-description {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 2rem;
            line-height: 1.6;
        }
        
        .error-actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .lock-icon {
            font-size: 4rem;
            color: #ff6b6b;
            margin-bottom: 1rem;
            animation: shake 2s ease-in-out infinite;
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }
        
        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }
        
        .floating-element {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }
        
        .floating-element:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .floating-element:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }
        
        .floating-element:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 30%;
            left: 20%;
            animation-delay: 4s;
        }
        
        .floating-element:nth-child(4) {
            width: 100px;
            height: 100px;
            top: 15%;
            right: 25%;
            animation-delay: 1s;
        }
        
        @keyframes float {
            0%, 100% { 
                transform: translateY(0px) rotate(0deg); 
                opacity: 0.6;
            }
            50% { 
                transform: translateY(-20px) rotate(180deg); 
                opacity: 0.8;
            }
        }
        
        .permission-info {
            background: rgba(255, 107, 107, 0.1);
            border: 1px solid rgba(255, 107, 107, 0.2);
            border-radius: 10px;
            padding: 1.5rem;
            margin: 2rem 0;
            text-align: left;
        }
        
        .permission-info h6 {
            color: #ff6b6b;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }
        
        .permission-info h6 i {
            margin-right: 0.5rem;
        }
        
        .permission-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .permission-list li {
            padding: 0.5rem 0;
            border-bottom: 1px solid rgba(255, 107, 107, 0.1);
            display: flex;
            align-items: center;
        }
        
        .permission-list li:last-child {
            border-bottom: none;
        }
        
        .permission-list li i {
            margin-right: 0.75rem;
            color: #ff6b6b;
            font-size: 1.2rem;
        }
        
        .contact-admin {
            background: rgba(102, 126, 234, 0.1);
            border: 1px solid rgba(102, 126, 234, 0.2);
            border-radius: 10px;
            padding: 1.5rem;
            margin-top: 2rem;
        }
        
        .contact-admin h6 {
            color: #667eea;
            margin-bottom: 1rem;
        }
        
        @media (max-width: 768px) {
            .error-card {
                padding: 2rem;
                margin: 1rem;
            }
            
            .error-number {
                font-size: 6rem;
            }
            
            .error-title {
                font-size: 1.5rem;
            }
            
            .error-actions {
                flex-direction: column;
                align-items: center;
            }
            
            .error-actions .btn {
                width: 100%;
                max-width: 250px;
            }
        }
    </style>
</head>
<body>
    <div class="error-container">
        <!-- Elementos flotantes de fondo -->
        <div class="floating-elements">
            <div class="floating-element"></div>
            <div class="floating-element"></div>
            <div class="floating-element"></div>
            <div class="floating-element"></div>
        </div>
        
        <div class="error-card">
            <!-- Icono de bloqueo -->
            <div class="lock-icon">
                <i class="material-icons">lock</i>
            </div>
            
            <!-- Número de error -->
            <div class="error-number">403</div>
            
            <!-- Título -->
            <h1 class="error-title">Acceso Denegado</h1>
            
            <!-- Descripción -->
            <p class="error-description">
                No tienes permisos para acceder a esta página. 
                Tu cuenta puede no tener los privilegios necesarios para ver este contenido.
            </p>
            
            <!-- Información de permisos -->
            <div class="permission-info">
                <h6>
                    <i class="material-icons">info</i>
                    Posibles causas:
                </h6>
                <ul class="permission-list">
                    <li>
                        <i class="material-icons">person_off</i>
                        <span>Tu sesión ha expirado</span>
                    </li>
                    <li>
                        <i class="material-icons">security</i>
                        <span>No tienes permisos de administrador</span>
                    </li>
                    <li>
                        <i class="material-icons">block</i>
                        <span>Tu cuenta ha sido suspendida</span>
                    </li>
                    <li>
                        <i class="material-icons">verified_user</i>
                        <span>Necesitas verificar tu identidad</span>
                    </li>
                </ul>
            </div>
            
            <!-- Información de contacto -->
            <div class="contact-admin">
                <h6>¿Necesitas acceso?</h6>
                <p class="mb-0 text-muted">
                    Si crees que deberías tener acceso a esta página, 
                    contacta al administrador del sistema para solicitar los permisos necesarios.
                </p>
            </div>
            
            <!-- Botones de acción -->
            <div class="error-actions">
                <a href="/ObelisIA/acceso" class="btn btn-primary-custom">
                    <i class="material-icons me-2">login</i>
                    Iniciar Sesión
                </a>
                <a href="/ObelisIA/" class="btn btn-outline-primary">
                    <i class="material-icons me-2">home</i>
                    Ir al Inicio
                </a>
                <button onclick="history.back()" class="btn btn-outline-secondary">
                    <i class="material-icons me-2">arrow_back</i>
                    Volver Atrás
                </button>
            </div>
        </div>
    </div>
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Animación de entrada
        document.addEventListener('DOMContentLoaded', function() {
            const card = document.querySelector('.error-card');
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.6s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100);
        });
        
        // Tracking de eventos (opcional)
        if (typeof gtag !== 'undefined') {
            gtag('event', 'page_view', {
                page_title: '403 Forbidden',
                page_location: window.location.href
            });
        }
        
        // Auto-redirect después de cierto tiempo si viene de una página específica
        const referrer = document.referrer;
        if (referrer && referrer.includes('/admin/')) {
            setTimeout(() => {
                if (confirm('¿Deseas ser redirigido a la página de inicio de sesión?')) {
                    window.location.href = '/ObelisIA/acceso';
                }
            }, 10000); // 10 segundos
        }
    </script>
</body>
</html>
