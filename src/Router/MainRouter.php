<?php
namespace ObelisIA\Router;

class MainRouter {
    
    // Directorio base donde está instalado el proyecto
    private static $basePath = '/ObelisIA';

    // Mapa de rutas amigables a archivos reales
    private static $routes = [
        // Clave (URL amigable) => Valor (Archivo PHP a cargar)
        '' => 'pages/home.php', // Ruta a un archivo que solo contenga el contenido de la home
        'inicio' => 'pages/home.php',
        'acceso' => 'login.php',
        'registro' => 'register.php',
        'panel' => 'dashboard.php',
        'perfil' => 'pages/profile.php',
        'premium' => 'pages/upgrade.php',
        'precios' => 'pages/home.php#pricing', // Podemos manejar anclas así
        'contacto' => 'pages/contact.php',
        'acerca' => 'pages/about.php',
        
        // Rutas de administración
        'admin' => 'admin/index.php',
        'admin/usuarios' => 'admin/users.php',
        'admin/estadisticas' => 'admin/analytics.php',
        'admin/configuracion' => 'admin/settings.php',
        'admin/creaciones' => 'admin/creations.php',
        'admin/herramientas' => 'admin/admin_panel.php',
        'admin/registros' => 'admin/debug_admin.php',
        'admin/pagos' => 'admin/payments.php',

        // Páginas de error
        'error/404' => 'pages/error/404.php',
        'error/403' => 'pages/error/403.php',
        'error/500' => 'pages/error/500.php'
    ];

    /**
     * Genera una URL completa y correcta, incluyendo el subdirectorio.
     */
    public static function url($friendlyRoute) {
        return self::$basePath . '/' . ltrim($friendlyRoute, '/');
    }

    /**
     * Redirige a una ruta amigable.
     */
    public static function redirect($friendlyRoute) {
        header('Location: ' . self::url($friendlyRoute));
        exit();
    }

    /**
     * Resuelve la ruta solicitada y devuelve la ruta del archivo a incluir.
     */
    public static function resolve() {
        // Obtenemos la ruta de la URL, sin parámetros GET
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        
        // Quitamos el subdirectorio base de la ruta solicitada
        $route = substr($requestUri, strlen(self::$basePath));
        $route = trim($route, '/');
        
        // Buscamos la ruta en nuestro array de rutas
        if (isset(self::$routes[$route])) {
            $file = self::$routes[$route];
            $filePath = __DIR__ . '/../../' . $file; // Usamos rutas relativas al archivo actual

            if (file_exists($filePath)) {
                return $filePath; // Devolvemos la ruta al archivo
            }
        }
        
        // Si no se encuentra la ruta, devolvemos la página 404
        return __DIR__ . '/../../pages/error/404.php';
    }
}