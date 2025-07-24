<?php
namespace ObelisIA\Config;

// Configuración general del sitio
define('SITE_NAME', 'ObelisIA');
define('SITE_URL', 'http://localhost/ObelisIA');
define('SITE_DESCRIPTION', 'Sistema de gestión moderno con PHP y Material Dashboard');
// Configuración de seguridad
define('SESSION_LIFETIME', 3600); // 1 hora
define('PASSWORD_MIN_LENGTH', 6);
// Configuración de email (para futuras funcionalidades)
define('SMTP_HOST', 'localhost');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', '');
define('SMTP_PASSWORD', '');
define('FROM_EMAIL', 'noreply@obelisia.com');
define('FROM_NAME', 'ObelisIA System');
// Configuración de uploads
define('UPLOAD_PATH', 'uploads/');
define('MAX_FILE_SIZE', 5 * 1024 * 1024); // 5MB
define('ALLOWED_EXTENSIONS', ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'doc', 'docx']);
// Timezone
date_default_timezone_set('America/Mexico_City');
// Configuración de logs
define('LOG_ERRORS', true);
define('LOG_PATH', 'logs/');
// Función para logging
function writeLog($message, $level = 'INFO') {
    if (LOG_ERRORS) {
        $timestamp = date('Y-m-d H:i:s');
        $log_message = "[$timestamp] [$level] $message" . PHP_EOL;
        $log_file = LOG_PATH . 'app_' . date('Y-m-d') . '.log';
        if (!is_dir(LOG_PATH)) {
            mkdir(LOG_PATH, 0755, true);
        }
        file_put_contents($log_file, $log_message, FILE_APPEND);
    }
}
