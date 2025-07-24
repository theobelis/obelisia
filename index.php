<?php
// ¡SOLUCIÓN 1! Iniciar la sesión.
session_start();

// Cargar configuración y clases principales
require_once __DIR__ . '/src/Config/config.php';
require_once __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/src/Utils/header.php';

use ObelisIA\Router\MainRouter;
use ObelisIA\Database\Database;
use ObelisIA\Auth\Auth;

// Inicializar la base de datos y la autenticación
$database = new Database();
$db = $database->getConnection();
$auth = new Auth($db);

// ¡SOLUCIÓN 2! Añadir lógica para cerrar sesión.
if (isset($_GET['logout'])) {
    $auth->logout();
    MainRouter::redirect('inicio'); // Redirige a la página principal tras cerrar sesión
}

// 1. Resolver la ruta para obtener el archivo de la página a mostrar
$page_to_include = MainRouter::resolve();

// 2. Incluir la página resuelta por el enrutador
if (file_exists($page_to_include)) {
    include $page_to_include;
} else {
    // Por si acaso, mostrar un error si el archivo no existe
    include __DIR__ . '/pages/error/404.php';
}