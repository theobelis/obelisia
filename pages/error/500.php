<?php
// Las páginas de error son incluidas desde router.php, no necesitan requires adicionales
$page_title = "Error interno del servidor - ObelisIA";
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
            background: linear-gradient(135deg, #ffa726 0%, #ff7043 100%);
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
            background: linear-gradient(135deg, #ffa726 0%, #ff7043 100%);
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
        
        .server-icon {
            font-size: 4rem;
            color: #ffa726;
            margin-bottom: 1rem;
            animation: pulse 2s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { 
                transform: scale(1);
                opacity: 1;
            }
            50% { 
                transform: scale(1.05);
                opacity: 0.8;
            }
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
        
        .error-details {
            background: rgba(255, 167, 38, 0.1);
            border: 1px solid rgba(255, 167, 38, 0.2);
            border-radius: 10px;
            padding: 1.5rem;
            margin: 2rem 0;
            text-align: left;
        }
        
        .error-details h6 {
            color: #ffa726;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }
        
        .error-details h6 i {
            margin-right: 0.5rem;
        }
        
        .error-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .error-list li {
            padding: 0.5rem 0;
            border-bottom: 1px solid rgba(255, 167, 38, 0.1);
            display: flex;
            align-items: center;
        }
        
        .error-list li:last-child {
            border-bottom: none;
        }
        
        .error-list li i {
            margin-right: 0.75rem;
            color: #ffa726;
            font-size: 1.2rem;
        }
        
        .status-indicator {
            display: inline-flex;
            align-items: center;
            background: rgba(255, 167, 38, 0.1);
            color: #ffa726;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-size: 0.9rem;
            margin: 1rem 0;
        }
        
        .status-indicator i {
            margin-right: 0.5rem;
            animation: spin 2s linear infinite;
        }
        
        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        .support-info {
            background: rgba(102, 126, 234, 0.1);
            border: 1px solid rgba(102, 126, 234, 0.2);
            border-radius: 10px;
            padding: 1.5rem;
            margin-top: 2rem;
        }
        
        .support-info h6 {
            color: #667eea;
            margin-bottom: 1rem;
        }
        
        .retry-button {
            position: relative;
            overflow: hidden;
        }
        
        .retry-button:disabled {
            opacity: 0.6;
            cursor: not-allowed;
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
            <!-- Icono de servidor -->
            <div class="server-icon">
                <i class="material-icons">dns</i>
            </div>
            
            <!-- Número de error -->
            <div class="error-number">500</div>
            
            <!-- Título -->
            <h1 class="error-title">Error Interno del Servidor</h1>
            
            <!-- Descripción -->
            <p class="error-description">
                Algo salió mal en nuestro servidor. Nuestro equipo técnico ha sido notificado 
                y está trabajando para solucionar el problema.
            </p>
            
            <!-- Indicador de estado -->
            <div class="status-indicator">
                <i class="material-icons">sync</i>
                <span>Diagnosticando el problema...</span>
            </div>
            
            <!-- Detalles del error -->
            <div class="error-details">
                <h6>
                    <i class="material-icons">info</i>
                    Información técnica:
                </h6>
                <ul class="error-list">
                    <li>
                        <i class="material-icons">schedule</i>
                        <span>Error reportado: <span id="errorTime"></span></span>
                    </li>
                    <li>
                        <i class="material-icons">fingerprint</i>
                        <span>ID de referencia: <span id="errorId"></span></span>
                    </li>
                    <li>
                        <i class="material-icons">location_on</i>
                        <span>Ubicación: Servidor principal</span>
                    </li>
                    <li>
                        <i class="material-icons">timeline</i>
                        <span>Estado: En investigación</span>
                    </li>
                </ul>
            </div>
            
            <!-- Información de soporte -->
            <div class="support-info">
                <h6>¿Qué puedes hacer?</h6>
                <p class="mb-2">
                    <strong>1.</strong> Intenta recargar la página en unos minutos<br>
                    <strong>2.</strong> Verifica tu conexión a internet<br>
                    <strong>3.</strong> Si el problema persiste, contacta a soporte
                </p>
                <p class="mb-0 text-muted small">
                    <strong>Tiempo estimado de resolución:</strong> 5-15 minutos
                </p>
            </div>
            
            <!-- Botones de acción -->
            <div class="error-actions">
                <button onclick="retryPage()" class="btn btn-primary-custom retry-button" id="retryBtn">
                    <i class="material-icons me-2">refresh</i>
                    <span id="retryText">Reintentar</span>
                </button>
                <a href="/ObelisIA/" class="btn btn-outline-primary">
                    <i class="material-icons me-2">home</i>
                    Ir al Inicio
                </a>
                <a href="/ObelisIA/contacto" class="btn btn-outline-secondary">
                    <i class="material-icons me-2">support_agent</i>
                    Contactar Soporte
                </a>
            </div>
        </div>
    </div>
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Generar información de error
        document.addEventListener('DOMContentLoaded', function() {
            // Tiempo actual
            const now = new Date();
            document.getElementById('errorTime').textContent = now.toLocaleString('es-ES');
            
            // ID de error único
            const errorId = 'ERR-' + Date.now().toString(36).toUpperCase();
            document.getElementById('errorId').textContent = errorId;
            
            // Animación de entrada
            const card = document.querySelector('.error-card');
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.6s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100);
        });
        
        // Función para reintentar
        let retryCount = 0;
        function retryPage() {
            const retryBtn = document.getElementById('retryBtn');
            const retryText = document.getElementById('retryText');
            
            retryCount++;
            retryBtn.disabled = true;
            retryText.textContent = 'Reintentando...';
            
            // Simular verificación del servidor
            setTimeout(() => {
                if (retryCount < 3) {
                    // Reintentar cargando la página
                    window.location.reload();
                } else {
                    // Después de 3 intentos, sugerir contactar soporte
                    retryBtn.disabled = false;
                    retryText.textContent = 'Contactar Soporte';
                    retryBtn.onclick = function() {
                        window.location.href = '/ObelisIA/contacto';
                    };
                }
            }, 2000);
        }
        
        // Auto-retry después de 30 segundos
        setTimeout(() => {
            if (retryCount === 0) {
                const statusIndicator = document.querySelector('.status-indicator span');
                statusIndicator.textContent = 'Reintentando automáticamente...';
                setTimeout(() => {
                    window.location.reload();
                }, 3000);
            }
        }, 30000);
        
        // Tracking de eventos (opcional)
        if (typeof gtag !== 'undefined') {
            gtag('event', 'exception', {
                description: '500 Internal Server Error',
                fatal: false
            });
        }
        
        // Heartbeat para verificar si el servidor se recupera
        let heartbeatInterval = setInterval(() => {
            fetch(window.location.href, { method: 'HEAD' })
                .then(response => {
                    if (response.ok) {
                        clearInterval(heartbeatInterval);
                        const statusIndicator = document.querySelector('.status-indicator');
                        statusIndicator.innerHTML = '<i class="material-icons" style="color: #4caf50;">check_circle</i><span style="color: #4caf50;">Servidor recuperado - Recargando...</span>';
                        setTimeout(() => {
                            window.location.reload();
                        }, 2000);
                    }
                })
                .catch(() => {
                    // El servidor aún no responde
                });
        }, 10000); // Verificar cada 10 segundos
    </script>
</body>
</html>
