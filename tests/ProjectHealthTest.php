<?php
use PHPUnit\Framework\TestCase;

class ProjectHealthTest extends TestCase
{
    /**
     * Verifica que todos los archivos PHP principales se puedan incluir sin errores fatales.
     */
    public function test_includes_main_php_files(): void
    {
        $mainFiles = [
            'index.php',
            'login.php',
            'register.php',
            'dashboard.php',
            'dashboard/index.html', // HTML, solo existencia
            'admin/admin_panel.php',
            'admin/analytics.php',
            'admin/creations.php',
            'admin/debug_admin.php',
            'admin/index.php',
            'admin/payments.php',
            'admin/settings.php',
            'admin/simple_admin.php',
            'admin/users.php',
            'pages/about.php',
            'pages/contact.php',
            'pages/profile.php',
            'pages/upgrade.php',
            'pages/error/403.php',
            'pages/error/404.php',
            'pages/error/500.php',
            'src/Auth/auth.php',
            'src/Config/config.php',
            'src/Database/Database.php',
            'src/Router/MainRouter.php',
            'src/Utils/footer.php',
            'src/Utils/header.php',
        ];
        foreach ($mainFiles as $file) {
            $path = __DIR__ . '/../' . $file;
            if (str_ends_with($file, '.php')) {
                $this->assertFileExists($path, "No existe: $file");
                try {
                    include_once $path;
                } catch (\Throwable $e) {
                    $this->fail("Error al incluir $file: " . $e->getMessage());
                }
            } else {
                $this->assertFileExists($path, "No existe: $file");
            }
        }
    }

    /**
     * Verifica que la configuración de Composer y autoload sea válida.
     */
    public function test_composer_autoload(): void
    {
        $autoload = __DIR__ . '/../vendor/autoload.php';
        $this->assertFileExists($autoload, 'No se encontró vendor/autoload.php');
        try {
            require_once $autoload;
        } catch (\Throwable $e) {
            $this->fail('Error al cargar autoload: ' . $e->getMessage());
        }
    }

    /**
     * Verifica que la configuración de PHPUnit sea válida.
     */
    public function test_phpunit_config(): void
    {
        $config = __DIR__ . '/../phpunit.xml';
        $this->assertFileExists($config, 'No se encontró phpunit.xml');
        $xml = simplexml_load_file($config);
        $this->assertNotFalse($xml, 'phpunit.xml no es válido');
    }
}
