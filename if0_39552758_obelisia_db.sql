-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-08-2025 a las 23:31:48
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `if0_39552758_obelisia_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `action` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `user_id`, `action`, `description`, `ip_address`, `user_agent`, `created_at`) VALUES
(596, NULL, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', '2025-08-06 01:58:46'),
(700, NULL, 'Conversión de imagen', 'Formato: image/png', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', '2025-08-06 04:32:32'),
(727, NULL, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', '2025-08-06 04:59:57'),
(728, NULL, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', '2025-08-06 05:01:32'),
(994, NULL, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', '2025-08-07 00:12:33'),
(995, NULL, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', '2025-08-07 00:23:17'),
(996, NULL, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', '2025-08-07 00:44:11'),
(997, NULL, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', '2025-08-07 00:44:29'),
(998, NULL, 'Navegación', '/', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', '2025-08-07 00:47:49'),
(999, NULL, 'Navegación', '/', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', '2025-08-07 00:47:53'),
(1036, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', '2025-08-07 03:01:27'),
(1182, 1, 'Uso de herramienta', 'El usuario utilizó una herramienta IA.', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', '2025-08-07 04:45:47'),
(1183, 1, 'Guardado de creación', 'Guardó una creación con la herramienta: ia-img', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', '2025-08-07 04:46:02'),
(1184, 1, 'Guardado de creación', 'El usuario guardó una creación.', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', '2025-08-07 04:46:02'),
(1195, 1, 'Uso de herramienta', 'El usuario utilizó una herramienta IA.', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', '2025-08-07 04:55:45'),
(1196, 1, 'Guardado de creación', 'Guardó una creación con la herramienta: ia-img', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', '2025-08-07 04:55:51'),
(1197, 1, 'Guardado de creación', 'El usuario guardó una creación.', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', '2025-08-07 04:55:51'),
(1200, 1, 'Navegación', '/mis-creaciones', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', '2025-08-07 04:57:05'),
(2275, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', '2025-08-07 23:37:56'),
(2282, 1, 'Búsqueda', 'Buscó: \'abstracto\' (tipo: all)', NULL, NULL, '2025-08-07 23:38:19'),
(2450, 1, 'Navegación', '/mis-creaciones', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 04:55:48'),
(2866, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 20:46:20'),
(2867, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 20:46:21'),
(2868, 1, 'logout', 'Cierre de sesión', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 20:52:12'),
(2869, 1, 'login', 'Inicio de sesión exitoso', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 20:52:15'),
(2870, 1, 'Navegación', '/', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 21:45:48'),
(2871, 1, 'Navegación', '/', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 21:45:50'),
(2872, 1, 'Navegación', '/herramientas', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 21:53:24'),
(2873, 1, 'Navegación', '/herramientas', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 21:53:25'),
(2874, 1, 'Navegación', '/dashboard/', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 21:54:12'),
(2875, 1, 'Navegación', '/dashboard/', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 21:54:16'),
(2876, 1, 'Navegación', '/herramientas', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 21:54:17'),
(2877, 1, 'Navegación', '/herramientas', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 21:54:18'),
(2878, 1, 'Navegación', '/herramientas/generador-de-imagenes-ia', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 21:54:48'),
(2879, 1, 'Navegación', '/herramientas/generador-de-imagenes-ia', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 21:54:49'),
(2880, 1, 'Navegación', '/herramientas/generador-de-imagenes-ia', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 21:55:40'),
(2881, 1, 'Navegación', '/herramientas/generador-de-imagenes-ia', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 21:55:43'),
(2882, 1, 'Navegación', '/herramientas', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 21:56:04'),
(2883, 1, 'Navegación', '/herramientas', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 21:56:05'),
(2884, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:05:44'),
(2885, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:05:47'),
(2886, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:07:28'),
(2887, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:07:29'),
(2888, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:31:30'),
(2889, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:31:31'),
(2890, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:31:34'),
(2891, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:31:35'),
(2892, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:34:29'),
(2893, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:34:32'),
(2894, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:35:44'),
(2895, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:35:47'),
(2896, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:37:26'),
(2897, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:37:34'),
(2898, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:40:41'),
(2899, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:40:43'),
(2900, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:41:45'),
(2901, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:41:48'),
(2902, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:43:37'),
(2903, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:43:39'),
(2904, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:43:53'),
(2905, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:43:55'),
(2906, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:44:30'),
(2907, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:44:33'),
(2908, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:45:57'),
(2909, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:46:00'),
(2910, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:46:23'),
(2911, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:46:27'),
(2912, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:47:53'),
(2913, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:47:57'),
(2914, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:48:07'),
(2915, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:48:10'),
(2916, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:48:31'),
(2917, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:48:33'),
(2918, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:52:34'),
(2919, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:52:36'),
(2920, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:53:38'),
(2921, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:53:41'),
(2922, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:55:03'),
(2923, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:55:06'),
(2924, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:57:06'),
(2925, 1, 'Navegación', '/', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:57:06'),
(2926, 1, 'Navegación', '/', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:57:06'),
(2927, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:59:04'),
(2928, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:59:05'),
(2929, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:59:32'),
(2930, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 22:59:33'),
(2931, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:00:05'),
(2932, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:00:06'),
(2933, 1, 'Navegación', '/herramientas', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:00:12'),
(2934, 1, 'Navegación', '/herramientas', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:00:13'),
(2935, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:00:20'),
(2936, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:00:23'),
(2937, 1, 'Navegación', '/comunidad?search=&type=text&tool=', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:00:46'),
(2938, 1, 'Navegación', '/comunidad?search=&type=text&tool=', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:00:49'),
(2939, 1, 'Navegación', '/comunidad?search=&type=text&tool=', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:00:52'),
(2940, 1, 'Navegación', '/studio/', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:01:00'),
(2941, 1, 'Navegación', '/studio/', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:01:03'),
(2942, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:01:15'),
(2943, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:01:16'),
(2944, 1, 'Navegación', '/usuario?id=1', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:01:23'),
(2945, 1, 'Navegación', '/usuario?id=1', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:01:26'),
(2946, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:01:37'),
(2947, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:01:38'),
(2948, 1, 'Navegación', '/soporte', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:01:59'),
(2949, 1, 'Navegación', '/soporte', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:02:02'),
(2950, 1, 'Navegación', '/contacto', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:02:07'),
(2951, 1, 'Navegación', '/contacto', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:02:11'),
(2952, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:02:12'),
(2953, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:02:13'),
(2954, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:02:58'),
(2955, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:02:59'),
(2956, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:24:37'),
(2957, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:24:39'),
(2958, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:24:51'),
(2959, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:24:52'),
(2960, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:25:06'),
(2961, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:32:55'),
(2962, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-08 23:32:56'),
(2963, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 02:24:35'),
(2964, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 02:24:37'),
(2965, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 02:27:49'),
(2966, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 02:27:58'),
(2967, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 02:28:31'),
(2968, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 02:28:37'),
(2969, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 02:30:05'),
(2970, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 02:30:09'),
(2971, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 02:30:13'),
(2972, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 02:30:15'),
(2973, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 02:32:18'),
(2974, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 02:32:22'),
(2975, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 02:32:29'),
(2976, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 02:32:31'),
(2977, 1, 'Navegación', '/mis-creaciones', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 02:34:43'),
(2978, 1, 'Navegación', '/mis-creaciones', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 02:34:45'),
(2979, 1, 'login', 'Inicio de sesión exitoso', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 02:56:58'),
(2980, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 03:46:03'),
(2981, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 03:46:04'),
(2982, 1, 'login', 'Inicio de sesión exitoso', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.103.0 Chrome/138.0.7204.100 Electron/37.2.3 Safari/537.36', '2025-08-09 04:26:34'),
(2983, 1, 'login', 'Inicio de sesión exitoso', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.103.0 Chrome/138.0.7204.100 Electron/37.2.3 Safari/537.36', '2025-08-09 04:26:43'),
(2984, 1, 'login', 'Inicio de sesión exitoso', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.103.0 Chrome/138.0.7204.100 Electron/37.2.3 Safari/537.36', '2025-08-09 04:34:18'),
(2985, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 05:28:23'),
(2986, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 05:38:02'),
(2987, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 05:38:33'),
(2988, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 05:43:23'),
(2989, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 06:22:13'),
(2990, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 06:22:30'),
(2991, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 06:53:13'),
(2992, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 06:53:51'),
(2993, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 06:57:18'),
(2994, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 06:59:07'),
(2995, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 07:10:52'),
(2996, 1, 'Navegación', '/', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 07:36:37'),
(2997, 1, 'Navegación', '/', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 07:36:42'),
(2998, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 07:36:50'),
(2999, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 07:36:51'),
(3000, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 07:38:39'),
(3001, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 07:38:42'),
(3002, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:06:39'),
(3003, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:09:47'),
(3004, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:11:53'),
(3005, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:12:24'),
(3006, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:12:28'),
(3007, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:13:24'),
(3008, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:13:56'),
(3009, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:14:06'),
(3010, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:14:37'),
(3011, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:14:59'),
(3012, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:15:03'),
(3013, 1, 'Navegación', '/', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:18:59'),
(3014, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:19:00'),
(3015, 1, 'Navegación', '/', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:19:05'),
(3016, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:20:19'),
(3017, 1, 'Navegación', '/checkout/success', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:20:33'),
(3018, 1, 'Navegación', '/checkout/success', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:20:35'),
(3019, 1, 'Navegación', '/checkout/', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:20:41'),
(3020, 1, 'Navegación', '/checkout/', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:20:43'),
(3021, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:31:46'),
(3022, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:31:48'),
(3023, 1, 'Navegación', '/herramientas', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:31:52'),
(3024, 1, 'Navegación', '/herramientas', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:31:53'),
(3025, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:49:45'),
(3026, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:49:51'),
(3027, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:49:54'),
(3028, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:49:57'),
(3029, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:50:42'),
(3030, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:50:45'),
(3031, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:50:51'),
(3032, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:50:53'),
(3033, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:51:42'),
(3034, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:51:44'),
(3035, 1, 'Navegación', '/panelasdasd', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:52:26'),
(3036, 1, 'Navegación', '/panelasdasd', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:52:29'),
(3037, 1, 'Navegación', '/panelasdasd', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:52:43'),
(3038, 1, 'Navegación', '/panelasdasd', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:52:46'),
(3039, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:52:49'),
(3040, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:52:51'),
(3041, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:57:23'),
(3042, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:57:31'),
(3043, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:58:39'),
(3044, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 08:59:28'),
(3045, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:41:13'),
(3046, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:41:17'),
(3047, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:41:24'),
(3048, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:41:26'),
(3049, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:42:53'),
(3050, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:42:57'),
(3051, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:44:58'),
(3052, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:45:05'),
(3053, 1, 'Navegación', '/creditos', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:45:11'),
(3054, 1, 'Navegación', '/creditos', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:45:13'),
(3055, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:45:18'),
(3056, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:45:20'),
(3057, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:46:30'),
(3058, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:46:32'),
(3059, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:46:44'),
(3060, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:46:45'),
(3061, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:46:57'),
(3062, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:46:59'),
(3063, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:48:00'),
(3064, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:48:04'),
(3065, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:48:32'),
(3066, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:48:36'),
(3067, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:49:03'),
(3068, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:49:06'),
(3069, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:49:20'),
(3070, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:49:55'),
(3071, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:49:59'),
(3072, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:50:10'),
(3073, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:57:01'),
(3074, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:58:25'),
(3075, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:58:55'),
(3076, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 14:58:58'),
(3077, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:05:41'),
(3078, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:05:44'),
(3079, 1, 'Navegación', '/herramientas', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:05:51'),
(3080, 1, 'Navegación', '/herramientas', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:05:52'),
(3081, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:06:09'),
(3082, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:06:26'),
(3083, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:06:27'),
(3084, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:06:29'),
(3085, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:06:33'),
(3086, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:07:04'),
(3087, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:10:23'),
(3088, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:10:29'),
(3089, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:12:30'),
(3090, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:12:36'),
(3091, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:13:34'),
(3092, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:13:35'),
(3093, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:13:38'),
(3094, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:13:42'),
(3095, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:16:34'),
(3096, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:16:35'),
(3097, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:17:31'),
(3098, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:17:33'),
(3099, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:26:10'),
(3100, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:26:12'),
(3101, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:26:14'),
(3102, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:26:17'),
(3103, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:26:19'),
(3104, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:26:21'),
(3105, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:27:10'),
(3106, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:27:37'),
(3107, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:27:40'),
(3108, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:27:46'),
(3109, 1, 'Navegación', '/creditos', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:27:50'),
(3110, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:27:51'),
(3111, 1, 'Navegación', '/creditos', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:27:54'),
(3112, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:27:59'),
(3113, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:28:00'),
(3114, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:28:02'),
(3115, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:29:53'),
(3116, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:29:56'),
(3117, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:30:03'),
(3118, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:30:19'),
(3119, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:30:20'),
(3120, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:30:22'),
(3121, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:30:29'),
(3122, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:30:40'),
(3123, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:30:48'),
(3124, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:30:49');
INSERT INTO `activity_logs` (`id`, `user_id`, `action`, `description`, `ip_address`, `user_agent`, `created_at`) VALUES
(3125, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:32:33'),
(3126, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:32:37'),
(3127, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:32:43'),
(3128, 1, 'Navegación', '/checkout', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:33:43'),
(3129, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:33:46'),
(3130, 1, 'Navegación', '/checkout', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:33:55'),
(3131, 1, 'Navegación', '/checkout', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:34:15'),
(3132, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:34:18'),
(3133, 1, 'Navegación', '/checkout', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:34:27'),
(3134, 1, 'Navegación', '/checkout', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:35:50'),
(3135, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:35:52'),
(3136, 1, 'Navegación', '/checkout', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:36:04'),
(3137, 1, 'Navegación', '/checkout', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:37:46'),
(3138, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:38:10'),
(3139, 1, 'Navegación', '/checkout', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:38:36'),
(3140, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:50:50'),
(3141, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:50:53'),
(3142, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:51:08'),
(3143, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:53:42'),
(3144, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:53:48'),
(3145, 1, 'Navegación', '/', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:55:04'),
(3146, 1, 'Navegación', '/', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:55:07'),
(3147, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:55:29'),
(3148, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:55:31'),
(3149, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:55:46'),
(3150, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:55:47'),
(3151, 1, 'Navegación', '/buy', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:55:50'),
(3152, 1, 'Navegación', '/buy', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:55:54'),
(3153, 1, 'Navegación', '/checkout', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:56:01'),
(3154, 1, 'Navegación', '/checkout', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:56:03'),
(3155, 1, 'Navegación', '/checkout', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:56:17'),
(3156, 1, 'Navegación', '/checkout', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:56:19'),
(3157, 1, 'Navegación', '/checkout', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:56:36'),
(3158, 1, 'Navegación', '/checkout', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:56:38'),
(3159, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:57:14'),
(3160, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:57:16'),
(3161, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:57:21'),
(3162, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:57:22'),
(3163, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:57:44'),
(3164, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:57:54'),
(3165, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:58:00'),
(3166, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:58:11'),
(3167, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:59:33'),
(3168, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:59:37'),
(3169, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:59:43'),
(3170, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:59:48'),
(3171, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 15:59:56'),
(3172, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:00:01'),
(3173, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:00:10'),
(3174, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:00:14'),
(3175, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:07:19'),
(3176, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:07:36'),
(3177, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:10:23'),
(3178, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:12:31'),
(3179, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:13:23'),
(3180, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:18:58'),
(3181, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:19:00'),
(3182, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:19:21'),
(3183, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:19:22'),
(3184, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:19:32'),
(3185, 1, 'Navegación', '/comunidad', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:19:37'),
(3186, 1, 'Navegación', '/creditos', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:20:02'),
(3187, 1, 'Navegación', '/creditos', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:20:08'),
(3188, 1, 'Navegación', '/mis-creaciones', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:20:24'),
(3189, 1, 'Navegación', '/mis-creaciones', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:20:27'),
(3190, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:21:35'),
(3191, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:21:37'),
(3192, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:22:54'),
(3193, 1, 'Navegación', '/perfil', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:22:55'),
(3194, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:23:38'),
(3195, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:23:39'),
(3196, 1, 'Navegación', '/mis-creaciones', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:23:39'),
(3197, 1, 'Navegación', '/mis-creaciones', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:23:40'),
(3198, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:25:04'),
(3199, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:25:06'),
(3200, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:25:14'),
(3201, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:25:15'),
(3202, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:25:26'),
(3203, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:25:27'),
(3204, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:25:43'),
(3205, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:25:44'),
(3206, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:34:05'),
(3207, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 16:34:14'),
(3208, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 19:47:12'),
(3209, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 19:47:13'),
(3210, 1, 'login', 'Inicio de sesión exitoso', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 19:47:35'),
(3211, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 20:29:13'),
(3212, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 20:29:14'),
(3213, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 20:29:29'),
(3214, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 20:29:29'),
(3215, 1, 'Navegación', '/.well-known/appspecific/com.chrome.devtools.json', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 20:30:30'),
(3216, 1, 'login', 'Inicio de sesión exitoso', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 20:37:53'),
(3217, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 20:43:37'),
(3218, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 20:43:38'),
(3219, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 20:43:56'),
(3220, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 20:43:57'),
(3221, 1, 'logout', 'Cierre de sesión manual', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 20:44:29'),
(3222, 1, 'logout', 'Cierre de sesión', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 20:44:29'),
(3223, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 20:44:51'),
(3224, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 20:44:52'),
(3225, 1, 'login', 'Inicio de sesión exitoso', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 20:45:08'),
(3226, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 21:04:22'),
(3227, 1, 'Navegación', '/panel', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 21:04:23'),
(3228, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 21:04:24'),
(3229, 1, 'Navegación', '/inicio', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 21:04:25'),
(3230, 1, 'Navegación', '/', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 21:29:53'),
(3231, 1, 'Navegación', '/', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', '2025-08-09 21:29:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_activity_logs`
--

CREATE TABLE `admin_activity_logs` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL COMMENT 'ID del admin que realiza la acción',
  `action` varchar(50) NOT NULL COMMENT 'Ej: user_created, user_deleted, bulk_suspend',
  `target_user_id` int(11) DEFAULT NULL COMMENT 'ID del usuario afectado (si aplica)',
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT 'Datos adicionales como IP, cambios específicos, etc.' CHECK (json_valid(`details`)),
  `ip_address` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_notifications`
--

CREATE TABLE `admin_notifications` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL DEFAULT 1,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `link` varchar(500) DEFAULT NULL,
  `type` enum('info','success','warning','error') DEFAULT 'info',
  `icon` varchar(50) DEFAULT 'fa-bell',
  `is_read` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `read_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `admin_notifications`
--

INSERT INTO `admin_notifications` (`id`, `admin_id`, `title`, `message`, `link`, `type`, `icon`, `is_read`, `created_at`, `read_at`) VALUES
(1, 1, 'Nuevo usuario registrado', 'Juan Pérez se ha registrado en la plataforma', 'users', 'success', 'fa-user-plus', 1, '2025-08-09 07:55:06', '2025-08-09 08:12:32'),
(2, 1, 'Usuario Premium', 'María García ha adquirido una suscripción Premium', 'subscriptions', 'success', 'fa-crown', 1, '2025-08-09 07:55:06', '2025-08-09 08:12:32'),
(3, 1, 'Nuevo contenido creado', 'Se ha publicado nuevo contenido en el sistema', 'content_creations', 'info', 'fa-palette', 1, '2025-08-09 07:55:06', '2025-08-09 08:12:32'),
(4, 1, 'Pago recibido', 'Se ha recibido un pago de $29.99', 'payments', 'success', 'fa-dollar-sign', 1, '2025-08-09 07:55:06', '2025-08-09 08:12:32'),
(5, 1, 'Reporte de contenido', 'Se ha reportado contenido inapropiado', 'reports', 'warning', 'fa-flag', 1, '2025-08-09 07:55:06', '2025-08-09 08:12:32'),
(6, 1, 'Nuevo usuario registrado', 'Juan Pérez se ha registrado en la plataforma', 'users', 'success', 'fa-user-plus', 1, '2025-08-09 07:58:18', '2025-08-09 08:14:56'),
(7, 1, 'Usuario Premium', 'María García ha adquirido una suscripción Premium', 'subscriptions', 'success', 'fa-crown', 1, '2025-08-09 07:58:18', '2025-08-09 08:12:32'),
(8, 1, 'Nuevo contenido creado', 'Se ha publicado nuevo contenido en el sistema', 'content_creations', 'info', 'fa-palette', 1, '2025-08-09 07:58:18', '2025-08-09 08:12:32'),
(9, 1, 'Pago recibido', 'Se ha recibido un pago de $29.99', 'payments', 'success', 'fa-dollar-sign', 1, '2025-08-09 07:58:18', '2025-08-09 08:12:32'),
(10, 1, 'Reporte de contenido', 'Se ha reportado contenido inapropiado', 'reports', 'warning', 'fa-flag', 1, '2025-08-09 07:58:18', '2025-08-09 08:12:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ad_views`
--

CREATE TABLE `ad_views` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ad_id` varchar(100) NOT NULL,
  `tool_type` varchar(50) NOT NULL,
  `view_duration` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `alt_headline` varchar(255) DEFAULT NULL,
  `image` varchar(512) DEFAULT NULL,
  `description` text NOT NULL,
  `content` longtext NOT NULL,
  `author` varchar(128) DEFAULT 'Equipo ObelisIA',
  `date_published` date NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `genre` varchar(128) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('publicado','borrador','oculto') DEFAULT 'publicado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `headline`, `alt_headline`, `image`, `description`, `content`, `author`, `date_published`, `keywords`, `genre`, `created_at`, `updated_at`, `status`) VALUES
(4001, 'Bienvenido al Blog', NULL, NULL, 'Primer post de bienvenida', '¡Hola mundo!', 'admin_demo', '2025-08-01', 'bienvenida,blog', 'general', '2025-08-05 20:45:22', '2025-08-05 20:45:22', 'publicado'),
(4002, 'Novedades de Agosto', NULL, NULL, 'Actualizaciones y novedades', 'Contenido de novedades', 'usuario_demo', '2025-08-05', 'novedades,agosto', 'actualizaciones', '2025-08-05 20:45:22', '2025-08-05 20:45:22', 'publicado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `content_reports`
--

CREATE TABLE `content_reports` (
  `id` int(11) NOT NULL,
  `reporter_id` int(11) NOT NULL,
  `creation_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT 'Usuario reportado',
  `report_type` enum('spam','inappropriate','copyright','harassment','other') NOT NULL,
  `description` text DEFAULT NULL,
  `status` enum('pending','reviewed','resolved','dismissed') DEFAULT 'pending',
  `admin_notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creation_comments`
--

CREATE TABLE `creation_comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `status` enum('active','hidden','deleted') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `creation_comments`
--

INSERT INTO `creation_comments` (`id`, `user_id`, `creation_id`, `parent_id`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 5, NULL, '¡Increíble trabajo! Me encanta el estilo futurista.', 'active', '2025-08-07 08:46:01', '2025-08-07 08:46:01'),
(2, 1, 6, NULL, 'Esta historia me atrapó desde el primer párrafo.', 'active', '2025-08-07 08:46:01', '2025-08-07 08:46:01'),
(3, 1007, 5, NULL, '¡Qué talento! Felicidades', 'active', '2025-08-07 03:07:09', '2025-08-07 10:07:09'),
(4, 1008, 4, NULL, 'Esto merece más reconocimiento', 'active', '2025-08-07 01:07:09', '2025-08-07 10:07:09'),
(5, 1008, 4, NULL, '¡Qué talento! Felicidades', 'active', '2025-08-07 08:07:09', '2025-08-07 10:07:09'),
(6, 1, 3, NULL, 'Me da mucha creatividad ver esto', 'active', '2025-08-07 02:07:09', '2025-08-07 10:07:09'),
(7, 1007, 2, NULL, 'Esto está genial, ¿cómo lo hiciste?', 'active', '2025-08-07 09:07:09', '2025-08-07 10:07:09'),
(8, 1, 11, NULL, 'Inspirador, definitivamente seguiré tu trabajo', 'active', '2025-08-07 00:07:09', '2025-08-07 10:07:09'),
(11, 1, 5, NULL, '¡Increíble trabajo! 🎨✨ Me encanta cómo quedó 👍😍', 'active', '2025-08-07 10:12:24', '2025-08-07 10:12:24'),
(12, 1, 6, NULL, 'Esto está genial 🔥💯 ¿Cómo lo hiciste? 🤔', 'active', '2025-08-07 10:12:24', '2025-08-07 10:12:24'),
(13, 1, 2, NULL, '¡Increíble trabajo! 🎨✨ Me encanta el estilo 👍', 'active', '2025-08-07 05:20:51', '2025-08-07 10:20:51'),
(14, 1, 3, NULL, 'Esto está súper creativo 🔥💯 ¿Cómo lo hiciste? 🤔', 'active', '2025-08-07 03:20:51', '2025-08-07 10:20:51'),
(15, 1, 4, NULL, 'Wow, qué talento! 😍🎉 Sigue así 👏', 'active', '2025-08-06 23:20:51', '2025-08-07 10:20:51'),
(16, 1, 5, NULL, 'Me inspira mucho ver esto 💡✨ Excelente trabajo 🚀', 'active', '2025-08-07 07:20:51', '2025-08-07 10:20:51'),
(17, 1, 6, NULL, 'Fantástico resultado 🌟 Definitivamente voy a seguir tu trabajo 📱', 'active', '2025-08-07 04:20:52', '2025-08-07 10:20:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creation_likes`
--

CREATE TABLE `creation_likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `creation_likes`
--

INSERT INTO `creation_likes` (`id`, `user_id`, `creation_id`, `created_at`) VALUES
(1, 1, 6, '2025-08-07 08:46:01'),
(2, 1, 7, '2025-08-07 08:46:01'),
(3, 1008, 5, '2025-08-07 07:07:09'),
(4, 1009, 5, '2025-08-07 01:07:09'),
(5, 1, 4, '2025-08-07 01:07:09'),
(6, 1, 3, '2025-08-07 06:07:09'),
(7, 1008, 2, '2025-08-06 14:07:09'),
(8, 1008, 11, '2025-08-07 04:07:09'),
(9, 1009, 11, '2025-08-06 10:07:09'),
(10, 1, 11, '2025-08-07 10:23:39'),
(12, 1, 10, '2025-08-07 10:23:51'),
(13, 1, 14, '2025-08-07 10:24:05'),
(14, 1, 13, '2025-08-07 11:31:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `credit_packages`
--

CREATE TABLE `credit_packages` (
  `id` int(11) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `credits_amount` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `currency` varchar(3) DEFAULT 'USD',
  `bonus_credits` int(11) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 1,
  `sort_order` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `credit_packages`
--

INSERT INTO `credit_packages` (`id`, `package_name`, `credits_amount`, `price`, `currency`, `bonus_credits`, `is_active`, `sort_order`, `created_at`) VALUES
(1, 'Paquete Básico', 100, 9.99, 'USD', 0, 1, 1, '2025-08-08 00:25:26'),
(2, 'Paquete Estándar', 250, 19.99, 'USD', 25, 1, 2, '2025-08-08 00:25:26'),
(3, 'Paquete Premium', 500, 34.99, 'USD', 75, 1, 3, '2025-08-08 00:25:26'),
(4, 'Paquete Pro', 1000, 59.99, 'USD', 200, 1, 4, '2025-08-08 00:25:26'),
(5, 'Mega Paquete', 2500, 119.99, 'USD', 500, 1, 5, '2025-08-08 00:25:26'),
(6, 'Pack Starter', 100, 9.99, 'USD', 0, 1, 1, '2025-08-08 00:32:41'),
(7, 'Pack Popular', 250, 19.99, 'USD', 25, 1, 2, '2025-08-08 00:32:41'),
(8, 'Pack Pro', 500, 34.99, 'USD', 75, 1, 3, '2025-08-08 00:32:41'),
(9, 'Pack Business', 1000, 59.99, 'USD', 200, 1, 4, '2025-08-08 00:32:41'),
(10, 'Pack Enterprise', 2500, 119.99, 'USD', 500, 1, 5, '2025-08-08 00:32:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `credit_purchases`
--

CREATE TABLE `credit_purchases` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `credits_amount` int(11) NOT NULL,
  `price_paid` decimal(10,2) DEFAULT NULL,
  `currency` varchar(3) DEFAULT 'USD',
  `transaction_id` varchar(255) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `status` enum('pending','completed','failed') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generation_logs`
--

CREATE TABLE `generation_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tool_type` varchar(50) NOT NULL,
  `credits_cost` int(11) NOT NULL,
  `experience_gained` int(11) NOT NULL,
  `generation_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`generation_data`)),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos_financieros`
--

CREATE TABLE `movimientos_financieros` (
  `id` int(11) NOT NULL,
  `tipo` enum('ingreso','egreso') NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `monto` decimal(10,2) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `movimientos_financieros`
--

INSERT INTO `movimientos_financieros` (`id`, `tipo`, `descripcion`, `monto`, `fecha`) VALUES
(2, 'ingreso', 'pago', 19.00, '2025-08-06 19:44:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obelis_studio_elements`
--

CREATE TABLE `obelis_studio_elements` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `element_type` enum('image','text','audio','video','other') DEFAULT NULL,
  `element_id` int(11) DEFAULT NULL,
  `position_order` int(11) DEFAULT 0,
  `settings` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`settings`)),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obelis_studio_projects`
--

CREATE TABLE `obelis_studio_projects` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `tags` varchar(500) DEFAULT NULL,
  `category` enum('personal','education','business','creative','other') DEFAULT 'personal',
  `content` longtext DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `is_public` tinyint(1) DEFAULT 0,
  `views` int(11) DEFAULT 0,
  `status` enum('draft','published','archived') DEFAULT 'draft',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `obelis_studio_projects`
--

INSERT INTO `obelis_studio_projects` (`id`, `user_id`, `title`, `description`, `tags`, `category`, `content`, `thumbnail`, `is_public`, `views`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'asdasd', 'asdasd', NULL, 'personal', '{}', NULL, 0, 0, 'draft', '2025-08-07 22:00:07', '2025-08-07 22:00:07'),
(2, 1, 'asdasd', 'asdasd', NULL, 'personal', '{}', NULL, 0, 0, 'draft', '2025-08-07 22:05:09', '2025-08-07 22:05:09'),
(3, 1, 'aaaaaa', 'aaaaa', NULL, 'personal', '{}', NULL, 0, 0, 'draft', '2025-08-07 23:05:09', '2025-08-07 23:05:09'),
(4, 1, 'pilimili', '', NULL, 'personal', '{}', NULL, 0, 0, 'draft', '2025-08-07 23:35:02', '2025-08-07 23:35:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pages_meta`
--

CREATE TABLE `pages_meta` (
  `id` int(11) NOT NULL,
  `route` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `keywords` text DEFAULT NULL,
  `generated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pages_meta`
--

INSERT INTO `pages_meta` (`id`, `route`, `title`, `description`, `keywords`, `generated_at`, `last_updated`) VALUES
(1, 'soporte/contacto', 'Contacto | Soporte', 'Contacta con nuestro equipo de soporte. Envíanos tus dudas, sugerencias o solicita ayuda a través del formulario o por email.', 'contacto, soporte, ayuda, formulario, email', '2025-08-08 02:36:19', '2025-08-08 02:36:19'),
(2, 'checkout/success', 'Pago Exitoso | Suscripción Activada', '¡Tu pago se ha completado! Suscripción activada correctamente. Recibirás un email de confirmación. ¡Disfruta de tu nuevo servicio!', 'pago exitoso, suscripción, confirmación, checkout, compra', '2025-08-08 02:40:09', '2025-08-08 02:40:09'),
(3, 'notificaciones', 'Notificaciones | ObelisIA', 'Consulta tus notificaciones importantes en ObelisIA. Mantente al día con las últimas actualizaciones y recordatorios de tu cuenta.', 'notificaciones, alertas, avisos, cuenta, ObelisIA', '2025-08-08 02:47:01', '2025-08-08 02:47:01'),
(4, '.well-known/appspecific/com.chrome.devtools.json', 'Error 404: Página No Encontrada', '¡Oops! La página .well-known/appspecific/com.chrome.devtools.json no existe. Usa nuestro buscador o regresa al inicio para encontrar lo que buscas.', 'error 404, página no encontrada, chrome devtools, .well-known, appspecific', '2025-08-08 02:48:23', '2025-08-08 02:48:23'),
(5, 'creditos', 'Comprar Créditos IA | Impulsa tu Creatividad', 'Compra créditos para usar todas nuestras herramientas de IA. Paquetes flexibles, sin expiración y acceso inmediato. ¡Empieza ahora!', 'créditos IA, comprar créditos, herramientas IA, paquetes créditos, inteligencia artificial', '2025-08-08 04:09:00', '2025-08-08 04:09:00'),
(6, 'buscar', 'Búsqueda Avanzada: Encuentra Creaciones y Creadores', 'Realiza búsquedas avanzadas de creaciones y creadores. Filtra por tipo, herramienta y más. ¡Descubre contenido increíble ahora!', 'búsqueda, creaciones, creadores, filtros, herramientas', '2025-08-08 04:09:11', '2025-08-08 04:09:11'),
(7, 'error', 'Error 404: Página no encontrada', 'Página no encontrada. Usa nuestro buscador o las sugerencias para encontrar lo que buscas. ¡Te ayudamos a volver al camino correcto!', 'error 404, página no encontrada, búsqueda, ayuda, inicio', '2025-08-08 04:53:17', '2025-08-08 04:53:17'),
(8, 'mis-creaciones', 'Mis Creaciones IA y Proyectos Studio', 'Gestiona tus creaciones de IA y proyectos del Studio. Crea, comparte y elimina tus obras. ¡Da rienda suelta a tu creatividad!', 'creaciones IA, proyectos studio, inteligencia artificial, herramientas IA, mis creaciones', '2025-08-08 05:02:34', '2025-08-08 05:02:34'),
(9, 'creditos/comprar', 'Comprar Créditos - [Nombre de la Plataforma]', 'Compra créditos para [Nombre de la Plataforma] de forma segura. Elige tu paquete y método de pago. ¡Aumenta tus créditos hoy!', 'comprar créditos, créditos, pago, paypal, stripe', '2025-08-08 05:22:23', '2025-08-08 05:22:23'),
(10, 'terminos', 'Error 404 - Página No Encontrada', '¡Oops! La página no existe. Usa nuestro buscador o las sugerencias para encontrar lo que buscas. ¡Te ayudamos!', 'error 404, página no encontrada, buscador, ayuda, inicio', '2025-08-08 05:26:30', '2025-08-08 05:26:30'),
(11, 'legal/terminos', 'Términos y Condiciones - Obelis', 'Lee los Términos y Condiciones de Obelis. Conoce tus derechos y responsabilidades al usar nuestros servicios de diseño y IA.', 'términos, condiciones, obelis, legal, privacidad', '2025-08-08 05:26:40', '2025-08-08 05:26:40'),
(12, 'legal/privacidad', 'Política de Privacidad - Obelis', 'Conoce cómo Obelis protege tu privacidad. Detalles sobre la recopilación, uso y seguridad de tus datos. ¡Tu privacidad es nuestra prioridad!', 'privacidad, política de privacidad, datos, protección de datos, Obelis', '2025-08-08 05:27:33', '2025-08-08 05:27:33'),
(13, 'acerca', 'Acerca de ObelisIA: Plataforma de Inteligencia Artificial', 'Descubre ObelisIA, la plataforma de IA en español que potencia tu creatividad y productividad. Conoce nuestra misión, visión y valores.', 'Inteligencia Artificial, IA en español, ObelisIA, plataforma IA, herramientas IA', '2025-08-08 05:28:07', '2025-08-08 05:28:07'),
(14, 'caracteristicas', 'ObelisIA: Características y Herramientas IA', 'Descubre las increíbles herramientas de ObelisIA: Generador de imágenes, asistente de escritura y compositor musical. ¡Crea sin límites!', 'IA, herramientas IA, generador imágenes, asistente escritura, compositor musical', '2025-08-08 05:28:12', '2025-08-08 05:28:12'),
(15, 'succes', 'Página No Encontrada (404) - Te Ayudamos', '¡Oops! Error 404. La página no existe. Usa nuestro buscador o las sugerencias para encontrar lo que buscas. ¡Volver al inicio!', 'error 404, página no encontrada, buscador, ayuda, inicio', '2025-08-08 05:28:25', '2025-08-08 05:28:25'),
(16, 'success', 'Éxito', '¡Felicidades! Has completado la acción con éxito. Vuelve al inicio o explora otras opciones disponibles.', 'éxito, completado, felicitaciones, inicio, opciones', '2025-08-08 05:28:33', '2025-08-08 05:28:33'),
(17, 'herramientas', 'Herramientas IA Online | Crea Contenido Increíble', 'Descubre nuestras herramientas IA para escritura, música, diseño y más. ¡Potencia tu creatividad con inteligencia artificial!', 'herramientas IA, inteligencia artificial, generador contenido, asistente escritura, editor imagenes', '2025-08-08 05:35:58', '2025-08-08 05:35:58'),
(18, 'herramientas/generador-de-imagenes-ia', 'Generador de Imágenes IA | Crea Imágenes con Inteligencia ', 'Genera imágenes únicas y creativas con nuestra herramienta de IA. ¡Crea arte digital, diseños y mucho más con facilidad!', 'generador de imágenes IA, IA, inteligencia artificial, crear imágenes, arte digital', '2025-08-08 05:37:30', '2025-08-08 05:37:30'),
(19, 'herramientas/...', 'Herramientas IA: Asistente de Escritura, Música y Más', 'Descubre herramientas de IA para escritura, música, diseño y más. ¡Crea contenido increíble con nuestra selección de herramientas!', 'herramientas IA, asistente escritura, generador imágenes, composición musical, editor imagenes', '2025-08-08 05:37:33', '2025-08-08 05:37:33'),
(20, 'panel', 'Panel de Control | Herramientas IA', 'Gestiona tu cuenta y accede a todas las herramientas de IA desde tu panel personal. ¡Optimiza tu experiencia ahora!', 'panel, IA, herramientas, perfil, notificaciones', '2025-08-08 05:41:13', '2025-08-08 05:41:13'),
(21, 'perfil', 'Mi Perfil | Edita tu información personal', 'Actualiza tu perfil. Modifica tu nombre, email, teléfono, biografía y dirección. Guarda tus cambios de forma segura.', 'perfil, editar perfil, información personal, datos usuario, actualizar perfil', '2025-08-08 05:44:19', '2025-08-08 05:44:19'),
(22, 'inicio', 'ObelisIA: Herramientas de IA para Creatividad', 'Crea imágenes, videos, música y texto con IA. Edita fotos, remueve fondos y mucho más. ¡Potencia tu creatividad con ObelisIA!', 'IA, inteligencia artificial, generador de imágenes, editor de fotos, creación de contenido', '2025-08-08 06:11:36', '2025-08-08 06:11:36'),
(23, '', 'Herramientas IA: Crea Contenido Increíble con Inteligencia ', 'Suite completa de herramientas de IA para crear imágenes, videos, música y texto. ¡Potencia tu creatividad con nuestra tecnología avanzada!', 'IA, Inteligencia Artificial, Generación IA, Contenido IA, Herramientas IA', '2025-08-08 06:32:04', '2025-08-08 06:32:04'),
(24, 'acceso', 'Acceso a ObelisIA - Inicia Sesión', 'Inicia sesión en ObelisIA. Accede a tu cuenta de forma segura con usuario/email y contraseña. ¿Olvidaste tu contraseña? ¡Recupérala aquí!', 'acceso, iniciar sesión, login, ObelisIA, contraseña', '2025-08-08 09:42:26', '2025-08-08 09:42:26'),
(25, 'registro', 'Registro | ObelisIA - Crea tu cuenta', 'Regístrate en ObelisIA y únete a nuestra comunidad de creadores. Crea tu cuenta de forma fácil y rápida. ¡Comienza hoy!', 'registro, crear cuenta, ObelisIA, comunidad, creadores', '2025-08-08 09:43:54', '2025-08-08 09:43:54'),
(26, 'login', 'Iniciar Sesión | ObelisIA', 'Inicia sesión en ObelisIA. Accede a tu cuenta de forma segura. ¿Olvidaste tu contraseña? Recupera tu acceso aquí.', 'login, iniciar sesión, ObelisIA, contraseña, recuperar cuenta', '2025-08-08 09:44:23', '2025-08-08 09:44:23'),
(27, 'recuperar-password', 'Recuperar Contraseña | ObelisIA', 'Recupera tu contraseña de ObelisIA fácilmente. Ingresa tu email y recibe las instrucciones para restablecer tu acceso.', 'recuperar contraseña, password, reset password, ObelisIA, email', '2025-08-08 10:13:27', '2025-08-08 10:13:27'),
(28, 'herramientas/asistente-de-escritura', 'Asistente de Escritura IA | Herramientas IA', 'Crea textos increíbles con nuestro asistente de escritura IA. ¡Potencia tu creatividad y optimiza tu contenido ahora!', 'asistente escritura, IA, redacción, texto, herramientas', '2025-08-08 11:06:12', '2025-08-08 11:06:12'),
(29, 'herramientas/composicion-musical', 'Composición Musical IA: Crea Música Fácilmente', 'Crea música original con nuestra herramienta de composición musical con IA. ¡Experimenta y genera melodías únicas en segundos!', 'composición musical, IA, música, melodías, herramienta IA', '2025-08-08 11:08:50', '2025-08-08 11:08:50'),
(30, 'herramientas/creador-de-creaciones', 'Creador de Creaciones IA | Herramientas Online', 'Crea diseños únicos con nuestra herramienta de creación IA. ¡Fácil, rápido y potente! Descubre todas nuestras herramientas online.', 'creador de creaciones, IA, diseño, herramientas online, inteligencia artificial', '2025-08-08 11:10:04', '2025-08-08 11:10:04'),
(31, 'herramientas/editor-de-imagenes', 'Editor de Imágenes IA | Herramientas Online', 'Edita tus imágenes online con IA. Herramienta fácil de usar para mejorar y transformar tus fotos. ¡Pruébalo gratis!', 'editor de imágenes, ia, online, gratis, editar fotos', '2025-08-08 11:12:50', '2025-08-08 11:12:50'),
(32, 'herramientas/creador-de-contenido', 'Creador de Contenido IA | Herramientas', 'Crea contenido increíble con nuestra herramienta de IA. Descubre un mundo de posibilidades para tus proyectos. ¡Pruébala ahora!', 'creador contenido IA, herramientas IA, generador texto, redacción IA, asistente escritura', '2025-08-08 11:13:02', '2025-08-08 11:13:02'),
(33, 'herramientas/paletas-de-colores', 'Paletas de Colores IA | Herramientas Creativas', 'Crea paletas de colores únicas con IA. Encuentra la inspiración perfecta para tus diseños. ¡Explora nuestras herramientas creativas!', 'paletas de colores, IA, diseño, herramientas, creatividad', '2025-08-08 11:13:17', '2025-08-08 11:13:17'),
(34, 'herramientas/videos-con-ia', 'Videos con IA: Crea Videos Asombrosos | Herramientas IA', 'Crea videos impactantes con IA. Descubre herramientas para edición, generación y optimización de videos. ¡Potencia tu contenido audiovisual!', 'videos IA, generador videos, editor videos IA, herramientas IA, creación videos', '2025-08-08 11:17:09', '2025-08-08 11:17:09'),
(35, 'configuracion', 'Error 404 - Página No Encontrada', '¡Oops! Error 404. La página no existe. Usa nuestro buscador o las sugerencias para encontrar lo que necesitas. ¡Te ayudamos!', 'error 404, página no encontrada, búsqueda, ayuda, configuración', '2025-08-08 11:35:36', '2025-08-08 11:35:36'),
(36, 'suscripcion', 'Mi Suscripción - Gestiona tu Plan Premium', 'Consulta tu plan actual, historial de pagos y cancela tu suscripción Premium fácilmente. ¡Control total sobre tu cuenta!', 'suscripcion, plan premium, historial pagos, cancelar suscripcion, cuenta', '2025-08-08 11:37:08', '2025-08-08 11:37:08'),
(37, 'creation/15', 'Error 404 - Página no encontrada', '¡Oops! La página creation/15 no existe. Usa nuestro buscador o las sugerencias para encontrar lo que buscas. ¡Te ayudamos!', 'error 404, página no encontrada, búsqueda, ayuda, inicio', '2025-08-08 12:02:05', '2025-08-08 12:02:05'),
(38, 'dashboard', 'Error 404 - Página no encontrada', '¡Oops! No encontramos la página. Usa el buscador o las sugerencias para volver a tu Dashboard o encontrar lo que necesitas.', 'error 404, página no encontrada, dashboard, buscador, ayuda', '2025-08-08 21:54:14', '2025-08-08 21:54:14'),
(39, 'legal/cookies', 'Política de Cookies | [Nombre de la Empresa]', 'Información sobre las cookies que utilizamos en [Nombre de la Empresa]. Consulta nuestra política de cookies para más detalles y opciones de gestión.', 'cookies, política de cookies, privacidad, legal, consentimiento', '2025-08-08 22:31:01', '2025-08-08 22:31:01'),
(40, 'herramientas/convert-img', 'Convertidor de Imágenes IA | Herramientas', 'Convierte tus imágenes con IA. Herramienta fácil y rápida para transformar formatos. ¡Pruébala ahora y optimiza tus archivos!', 'convertir imagen, IA, formatos, optimizar, herramienta', '2025-08-08 22:58:19', '2025-08-08 22:58:19'),
(41, 'soporte', 'Error 404 - Página no encontrada | Soporte', 'Página no encontrada. Te ayudamos a encontrar lo que buscas. Usa nuestro buscador o explora las sugerencias. ¡Vuelve al inicio!', 'error 404, página no encontrada, soporte, ayuda, buscar', '2025-08-08 23:02:01', '2025-08-08 23:02:01'),
(42, 'contacto', 'Contacto | [Nombre de la Empresa]', 'Contacta con nosotros para resolver tus dudas o solicitar soporte. ¡Estamos aquí para ayudarte! Encuentra nuestro formulario y datos de contacto.', 'contacto, soporte, ayuda, formulario, [nombre de la empresa]', '2025-08-08 23:02:08', '2025-08-08 23:02:08'),
(43, 'panelasdasd', 'Error 404 - Página no encontrada', 'Página no encontrada. Te ayudamos a encontrar lo que buscas. Usa nuestro buscador o explora las sugerencias. ¡Vuelve al inicio!', 'error 404, página no encontrada, búsqueda, ayuda, panelasdasd', '2025-08-09 08:52:28', '2025-08-09 08:52:28'),
(44, 'buy', 'Error 404 - Página No Encontrada', '¡Oops! Página no encontrada. Usa nuestro buscador o las sugerencias para encontrar lo que buscas. Te ayudamos a comprar lo que necesitas.', 'error 404, página no encontrada, comprar, búsqueda, ayuda', '2025-08-09 15:55:53', '2025-08-09 15:55:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(64) NOT NULL,
  `expires_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `currency` varchar(3) DEFAULT 'USD',
  `status` enum('pending','completed','failed','refunded','cancelled') DEFAULT 'pending',
  `payment_type` enum('subscription','one_time','refund') NOT NULL DEFAULT 'subscription',
  `payment_method` enum('credit_card','paypal','bank_transfer','crypto','apple_pay','google_pay') NOT NULL,
  `gateway` varchar(50) NOT NULL,
  `gateway_reference` varchar(100) DEFAULT NULL,
  `plan_type` enum('premium_monthly','premium_yearly') NOT NULL,
  `description` text DEFAULT NULL,
  `metadata` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`metadata`)),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `completed_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_comments`
--

CREATE TABLE `project_comments` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `content` text NOT NULL,
  `is_edited` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Disparadores `project_comments`
--
DELIMITER $$
CREATE TRIGGER `update_comments_count_delete` AFTER DELETE ON `project_comments` FOR EACH ROW BEGIN
    UPDATE project_stats_cache 
    SET comments_count = GREATEST(0, comments_count - 1),
        last_updated = CURRENT_TIMESTAMP
    WHERE project_id = OLD.project_id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_comments_count_insert` AFTER INSERT ON `project_comments` FOR EACH ROW BEGIN
    INSERT INTO project_stats_cache (project_id, comments_count) 
    VALUES (NEW.project_id, 1)
    ON DUPLICATE KEY UPDATE 
    comments_count = comments_count + 1,
    last_updated = CURRENT_TIMESTAMP;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_favorites`
--

CREATE TABLE `project_favorites` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Disparadores `project_favorites`
--
DELIMITER $$
CREATE TRIGGER `update_favorites_count_delete` AFTER DELETE ON `project_favorites` FOR EACH ROW BEGIN
    UPDATE project_stats_cache 
    SET favorites_count = GREATEST(0, favorites_count - 1),
        last_updated = CURRENT_TIMESTAMP
    WHERE project_id = OLD.project_id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_favorites_count_insert` AFTER INSERT ON `project_favorites` FOR EACH ROW BEGIN
    INSERT INTO project_stats_cache (project_id, favorites_count) 
    VALUES (NEW.project_id, 1)
    ON DUPLICATE KEY UPDATE 
    favorites_count = favorites_count + 1,
    last_updated = CURRENT_TIMESTAMP;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_likes`
--

CREATE TABLE `project_likes` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Disparadores `project_likes`
--
DELIMITER $$
CREATE TRIGGER `update_likes_count_delete` AFTER DELETE ON `project_likes` FOR EACH ROW BEGIN
    UPDATE project_stats_cache 
    SET likes_count = GREATEST(0, likes_count - 1),
        last_updated = CURRENT_TIMESTAMP
    WHERE project_id = OLD.project_id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_likes_count_insert` AFTER INSERT ON `project_likes` FOR EACH ROW BEGIN
    INSERT INTO project_stats_cache (project_id, likes_count) 
    VALUES (NEW.project_id, 1)
    ON DUPLICATE KEY UPDATE 
    likes_count = likes_count + 1,
    last_updated = CURRENT_TIMESTAMP;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_reports`
--

CREATE TABLE `project_reports` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reason` enum('spam','inappropriate','copyright','other') NOT NULL,
  `description` text DEFAULT NULL,
  `status` enum('pending','reviewed','resolved','dismissed') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_stats_cache`
--

CREATE TABLE `project_stats_cache` (
  `project_id` int(11) NOT NULL,
  `views_count` int(11) DEFAULT 0,
  `likes_count` int(11) DEFAULT 0,
  `comments_count` int(11) DEFAULT 0,
  `favorites_count` int(11) DEFAULT 0,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `project_stats_cache`
--

INSERT INTO `project_stats_cache` (`project_id`, `views_count`, `likes_count`, `comments_count`, `favorites_count`, `last_updated`) VALUES
(1, 0, 0, 0, 0, '2025-08-08 19:38:58'),
(2, 0, 0, 0, 0, '2025-08-08 19:38:58'),
(3, 0, 0, 0, 0, '2025-08-08 19:38:58'),
(4, 0, 0, 0, 0, '2025-08-08 19:38:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_tags`
--

CREATE TABLE `project_tags` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_views`
--

CREATE TABLE `project_views` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `viewed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `social_notifications`
--

CREATE TABLE `social_notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `type` enum('like','comment','follow') NOT NULL,
  `creation_id` int(11) DEFAULT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) DEFAULT 0,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `social_notifications`
--

INSERT INTO `social_notifications` (`id`, `user_id`, `from_user_id`, `type`, `creation_id`, `message`, `is_read`, `read_at`, `created_at`) VALUES
(4, 1, 1007, 'like', 5, 'le gustó tu creación 😍❤️', 0, NULL, '2025-08-07 08:44:24'),
(5, 1, 1007, 'comment', 6, 'comentó en tu creación 💬✨', 1, '2025-08-07 10:05:05', '2025-08-07 08:59:24'),
(6, 1, 1007, 'follow', NULL, 'comenzó a seguirte 👥🎉', 1, '2025-08-07 09:41:15', '2025-08-07 09:09:24'),
(8, 1, 1008, 'like', 5, 'le gustó tu creación ��❤️', 0, NULL, '2025-08-07 09:51:38'),
(9, 1, 1009, 'comment', 6, 'comentó en tu creación 💬✨', 0, NULL, '2025-08-07 10:06:38'),
(10, 1, 1010, 'follow', NULL, 'comenzó a seguirte 👥🎉', 1, '2025-08-08 02:31:08', '2025-08-07 10:16:38'),
(11, 1010, 1, 'like', 11, 'le gustó tu creación 😍❤️', 0, NULL, '2025-08-07 10:23:39'),
(13, 1009, 1, 'like', 10, 'le gustó tu creación 😍❤️', 0, NULL, '2025-08-07 10:23:51'),
(14, 1010, 1, 'like', 14, 'le gustó tu creación 😍❤️', 0, NULL, '2025-08-07 10:24:05'),
(15, 1009, 1, 'like', 13, 'le gustó tu creación 😍❤️', 0, NULL, '2025-08-07 11:31:58'),
(16, 1007, 1, 'follow', NULL, 'comenzó a seguirte 👥🎉', 0, NULL, '2025-08-07 11:33:30'),
(17, 1008, 1, 'follow', NULL, 'comenzó a seguirte 👥🎉', 0, NULL, '2025-08-07 11:33:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(11) NOT NULL,
  `setting_key` varchar(100) NOT NULL,
  `setting_value` text DEFAULT NULL,
  `setting_type` enum('string','number','boolean','json') DEFAULT 'string',
  `description` text DEFAULT NULL,
  `is_editable` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `system_settings`
--

INSERT INTO `system_settings` (`id`, `setting_key`, `setting_value`, `setting_type`, `description`, `is_editable`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'ObelisIA', 'string', 'Nombre del sitio', 1, '2025-07-16 10:03:27', '2025-08-05 20:45:23'),
(2, 'site_description', 'Plataforma de herramientas de inteligencia artificial', 'string', 'Descripción del sitio', 1, '2025-07-16 10:03:27', '2025-07-16 10:03:27'),
(3, 'maintenance_mode', 'off', 'boolean', 'Modo mantenimiento', 1, '2025-07-16 10:03:27', '2025-08-05 20:45:23'),
(4, 'max_file_size_mb', '10', 'number', 'Tamaño máximo de archivo en Megabytes', 1, '2025-07-16 10:03:27', '2025-07-16 10:03:27'),
(5, 'allowed_file_types', '[\"jpg\", \"jpeg\", \"png\", \"gif\", \"mp4\", \"mp3\", \"wav\"]', 'json', 'Tipos de archivo permitidos para subida', 1, '2025-07-16 10:03:27', '2025-07-16 10:03:27'),
(6, 'free_plan_credits', '10', 'number', 'Créditos por defecto para usuarios con plan gratuito', 1, '2025-07-16 10:03:27', '2025-07-16 10:03:27'),
(7, 'premium_monthly_price', '9.99', 'number', 'Precio mensual de la membresía premium', 1, '2025-07-16 10:03:27', '2025-07-16 17:11:20'),
(8, 'premium_yearly_price', '99.99', 'number', 'Precio anual de la membresía premium', 1, '2025-07-16 10:03:27', '2025-07-16 10:03:27'),
(9, 'app_version', '1.0.0', 'string', 'Versión actual del sistema', 0, '2025-07-16 17:11:20', '2025-07-16 17:11:20'),
(10, 'registration_enabled', '1', 'boolean', 'Permitir registro de nuevos usuarios', 1, '2025-07-16 17:11:20', '2025-07-16 17:11:20'),
(11, 'email_notifications_enabled', '1', 'boolean', 'Habilitar envío de notificaciones por email', 1, '2025-07-16 17:11:20', '2025-07-16 17:11:20'),
(12, 'api_rate_limit_per_hour', '100', 'number', 'Límite de peticiones API por hora para usuarios', 1, '2025-07-16 17:11:20', '2025-07-16 17:11:20'),
(13, 'backup_frequency', 'daily', 'string', 'Frecuencia de respaldos automáticos (daily, weekly, monthly)', 1, '2025-07-16 17:11:20', '2025-07-16 17:11:20'),
(14, 'timezone', 'America/Lima', 'string', 'Zona horaria del servidor', 1, '2025-07-16 17:11:20', '2025-07-23 07:30:00'),
(15, 'currency', 'USD', 'string', 'Moneda por defecto para transacciones', 1, '2025-07-16 17:11:20', '2025-07-16 17:11:20'),
(16, 'support_email', 'support@obelisia.com', 'string', 'Email de contacto para soporte técnico', 1, '2025-07-16 17:11:20', '2025-07-16 17:11:20'),
(17, 'analytics_enabled', '1', 'boolean', 'Habilitar Google Analytics y otros trackers', 1, '2025-07-16 17:11:20', '2025-07-16 17:11:20'),
(18, 'premium_trial_enabled', '1', 'boolean', 'Habilitar período de prueba para plan premium', 1, '2025-07-16 22:38:14', '2025-07-16 22:38:14'),
(19, 'premium_trial_days', '7', 'number', 'Días de duración del período de prueba', 1, '2025-07-16 22:38:14', '2025-07-16 22:38:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tools`
--

CREATE TABLE `tools` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `category` enum('image','video','music','text','utility') NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `style_class` varchar(50) NOT NULL DEFAULT 'bg-gradient-primary',
  `php_file` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT '#667eea',
  `priority` int(11) NOT NULL DEFAULT 2,
  `status` enum('active','inactive','maintenance') NOT NULL DEFAULT 'active',
  `is_active` tinyint(1) DEFAULT 1,
  `is_premium` tinyint(1) DEFAULT 0,
  `credits_required` int(11) NOT NULL DEFAULT 1,
  `monthly_uses` int(11) DEFAULT 0,
  `total_uses` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tools`
--

INSERT INTO `tools` (`id`, `name`, `slug`, `description`, `category`, `icon`, `style_class`, `php_file`, `color`, `priority`, `status`, `is_active`, `is_premium`, `credits_required`, `monthly_uses`, `total_uses`, `created_at`, `updated_at`) VALUES
(2, 'Generador de Imágenes IA', 'generador-de-imagenes-ia', 'Crea arte digital espectacular a partir de descripciones de texto con modelos de IA avanzados.', 'image', 'image', 'bg-gradient-primary', 'ImageGenerator.php', '#667eea', 2, 'active', 1, 0, 1, 0, 0, '2025-07-25 07:10:49', '2025-07-25 07:10:49'),
(3, 'Videos con IA', 'videos-con-ia', 'Genera videos únicos, animaciones y contenido visual dinámico usando inteligencia artificial.', 'video', 'videocam', 'bg-gradient-success', 'VideoGenerator.php', '#667eea', 2, 'active', 1, 1, 1, 0, 0, '2025-07-25 07:10:49', '2025-07-30 20:15:45'),
(4, 'Composición Musical', 'composicion-musical', 'Crea música original, efectos de sonido y composiciones personalizadas con IA.', 'music', 'music_note', 'bg-gradient-info', 'MusicComposer.php', '#667eea', 2, 'active', 1, 1, 1, 0, 0, '2025-07-25 07:10:49', '2025-07-30 20:15:38'),
(5, 'Editor de Imágenes', 'editor-de-imagenes', 'Edita fotos profesionalmente con herramientas avanzadas y filtros inteligentes.', 'image', 'edit', 'bg-gradient-warning', 'ImageEditor.php', '#667eea', 2, 'active', 1, 0, 1, 0, 0, '2025-07-25 07:10:49', '2025-07-25 07:15:57'),
(6, 'Removedor de Fondo', 'removedor-de-fondo', 'Elimina fondos automáticamente con precisión perfecta usando IA avanzada.', 'image', 'layers_clear', 'bg-gradient-danger', 'BackgroundRemover.php', '#667eea', 2, 'active', 1, 1, 1, 0, 0, '2025-07-25 07:10:49', '2025-07-30 20:15:59'),
(7, 'Paletas de Colores', 'paletas-de-colores', 'Genera paletas de colores armoniosas para tus proyectos de diseño y branding.', 'utility', 'palette', 'bg-gradient-warning', 'ColorPaletteGenerator.php', '#667eea', 2, 'active', 1, 0, 1, 0, 0, '2025-07-25 07:10:49', '2025-08-03 22:40:17'),
(8, 'Convertidor de Imagenes', 'convert-img', 'Convierte imagenes a todos los formatos disponibles manteniendo la calidad intacta.', 'utility', 'swipe', 'bg-gradient-success', 'ImageConverter.php', '#667eea', 2, 'active', 1, 0, 1, 0, 0, '2025-07-25 07:10:49', '2025-07-30 20:06:12'),
(9, 'Asistente de Escritura IA', 'asistente-de-escritura', 'Valiosa herramienta para cualquier persona que desee mejorar su escritura, desde estudiantes y profesionales hasta creadores de contenido y marketers.', 'text', 'text_fields', 'bg-gradient-danger', 'TextGenerator.php', '#667eea', 2, 'active', 1, 0, 1, 0, 0, '2025-07-25 07:10:49', '2025-07-30 20:17:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tool_limits`
--

CREATE TABLE `tool_limits` (
  `id` int(11) NOT NULL,
  `plan_type` enum('free','premium') NOT NULL,
  `tool_type` varchar(50) NOT NULL,
  `daily_limit` int(11) DEFAULT NULL,
  `monthly_limit` int(11) DEFAULT NULL,
  `requires_credits` tinyint(1) DEFAULT 1,
  `requires_ads` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tool_limits`
--

INSERT INTO `tool_limits` (`id`, `plan_type`, `tool_type`, `daily_limit`, `monthly_limit`, `requires_credits`, `requires_ads`, `created_at`) VALUES
(1, 'free', 'text_generation', 10, 50, 1, 1, '2025-08-08 00:25:27'),
(2, 'free', 'image_generation', 3, 20, 1, 1, '2025-08-08 00:25:27'),
(3, 'free', 'audio_generation', 2, 10, 1, 1, '2025-08-08 00:25:27'),
(4, 'free', 'translation', 20, 100, 1, 1, '2025-08-08 00:25:27'),
(5, 'free', 'text_improvement', 5, 30, 1, 1, '2025-08-08 00:25:27'),
(6, 'free', 'seo_optimization', 3, 15, 1, 1, '2025-08-08 00:25:27'),
(7, 'premium', 'text_generation', 200, 5000, 0, 0, '2025-08-08 00:25:27'),
(8, 'premium', 'image_generation', 50, 1000, 0, 0, '2025-08-08 00:25:27'),
(9, 'premium', 'audio_generation', 30, 300, 0, 0, '2025-08-08 00:25:27'),
(10, 'premium', 'translation', 500, 10000, 0, 0, '2025-08-08 00:25:27'),
(11, 'premium', 'text_improvement', 100, 2000, 0, 0, '2025-08-08 00:25:27'),
(12, 'premium', 'seo_optimization', 50, 1000, 0, 0, '2025-08-08 00:25:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tool_ratings`
--

CREATE TABLE `tool_ratings` (
  `id` int(11) NOT NULL,
  `tool_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL CHECK (`rating` >= 1 and `rating` <= 5),
  `review` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tool_usage`
--

CREATE TABLE `tool_usage` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tool_id` int(11) NOT NULL,
  `credits_used` int(11) DEFAULT 1,
  `success` tinyint(1) DEFAULT 1,
  `metadata` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`metadata`)),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usage_stats`
--

CREATE TABLE `usage_stats` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tool_type` varchar(50) NOT NULL,
  `usage_date` date NOT NULL,
  `usage_count` int(11) DEFAULT 1,
  `credits_spent` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `role` enum('admin','moderator','user') DEFAULT 'user',
  `status` enum('active','suspended','deleted') DEFAULT 'active',
  `language` varchar(5) NOT NULL DEFAULT 'es',
  `email_verified` tinyint(1) NOT NULL DEFAULT 0,
  `newsletter_subscribed` tinyint(1) NOT NULL DEFAULT 1,
  `notifications_enabled` tinyint(1) NOT NULL DEFAULT 1,
  `max_monthly_usage` int(11) DEFAULT NULL,
  `api_rate_limit` int(11) NOT NULL DEFAULT 60,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_login` timestamp NULL DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `membership_type` enum('free','premium') DEFAULT 'free',
  `subscription_start` date DEFAULT NULL,
  `subscription_end` date DEFAULT NULL,
  `membership_expires_at` timestamp NULL DEFAULT NULL,
  `credits_remaining` int(11) DEFAULT 10,
  `verification_token` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT 1,
  `exp_total` int(11) DEFAULT 0,
  `exp_until_next_level` int(11) DEFAULT 100,
  `credits` int(11) DEFAULT 100,
  `total_experience` int(11) DEFAULT 0,
  `total_generations` int(11) DEFAULT 0,
  `daily_generations` int(11) DEFAULT 0,
  `monthly_generations` int(11) DEFAULT 0,
  `last_generation_date` date DEFAULT NULL,
  `last_monthly_reset` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `full_name`, `role`, `status`, `language`, `email_verified`, `newsletter_subscribed`, `notifications_enabled`, `max_monthly_usage`, `api_rate_limit`, `notes`, `created_at`, `updated_at`, `last_login`, `profile_image`, `bio`, `phone`, `address`, `membership_type`, `subscription_start`, `subscription_end`, `membership_expires_at`, `credits_remaining`, `verification_token`, `level`, `exp_total`, `exp_until_next_level`, `credits`, `total_experience`, `total_generations`, `daily_generations`, `monthly_generations`, `last_generation_date`, `last_monthly_reset`) VALUES
(1, 'ObelisTest', 'test@obelis.online', '$2y$10$E/FIDqHW6peMOC.Ehvrs/.NYoctP8IXbjnDTCty60YQBpwiLM/Ani', 'Obelis Test', 'admin', 'active', 'es', 1, 1, 1, NULL, 60, NULL, '2025-08-07 03:00:04', '2025-08-09 20:45:08', '2025-08-09 20:45:08', 'uploads/admin_image.jpeg', NULL, NULL, NULL, 'premium', NULL, NULL, NULL, 10, NULL, 101, 150, 10200, 100, 0, 0, 0, 0, NULL, NULL),
(1007, 'testuser', 'test@test.com', 'dummy_hash', 'Usuario de Prueba', 'user', 'active', 'es', 0, 1, 1, NULL, 60, NULL, '2025-08-07 09:14:24', '2025-08-07 09:14:24', NULL, NULL, NULL, NULL, NULL, 'free', NULL, NULL, NULL, 10, NULL, 1, 0, 100, 100, 0, 0, 0, 0, NULL, NULL),
(1008, 'artista1', 'artista1@test.com', '$2y$10$0NlOzTZtZKDN5ovzogdhmuUEgxK6SbPC5/2jFMhWCGO5.FCRO1XFm', 'María González', 'user', 'active', 'es', 0, 1, 1, NULL, 60, NULL, '2025-08-07 10:07:08', '2025-08-07 10:07:08', NULL, NULL, 'Artista digital especializada en retratos', NULL, NULL, 'free', NULL, NULL, NULL, 10, NULL, 1, 0, 100, 100, 0, 0, 0, 0, NULL, NULL),
(1009, 'creativo2', 'creativo2@test.com', '$2y$10$xF2jzlukvXPOnAo5CPNTpeLD1feEMxoaRKP7QCXSbklZ/v4p1oF4S', 'Carlos Martínez', 'user', 'active', 'es', 0, 1, 1, NULL, 60, NULL, '2025-08-07 10:07:09', '2025-08-07 10:07:09', NULL, NULL, 'Diseñador gráfico y compositor musical', NULL, NULL, 'free', NULL, NULL, NULL, 10, NULL, 1, 0, 100, 100, 0, 0, 0, 0, NULL, NULL),
(1010, 'innovador3', 'innovador3@test.com', '$2y$10$r1Ifw0Vifrva5sVPCXV6/uuEvY8X4DKLQfg63LKUC8WygT/7QHlQO', 'Ana López', 'user', 'active', 'es', 0, 1, 1, NULL, 60, NULL, '2025-08-07 10:07:09', '2025-08-07 10:07:09', NULL, NULL, 'Creadora de contenido y escritora', NULL, NULL, 'free', NULL, NULL, NULL, 10, NULL, 1, 0, 100, 100, 0, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_achievements`
--

CREATE TABLE `user_achievements` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `achievement_type` varchar(50) NOT NULL,
  `achievement_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`achievement_data`)),
  `credits_reward` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_creations`
--

CREATE TABLE `user_creations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` enum('image','video','music','text','utility') NOT NULL,
  `tool_used` varchar(100) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `file_path` varchar(500) NOT NULL,
  `file_size` int(11) DEFAULT NULL,
  `file_type` varchar(100) DEFAULT NULL,
  `prompt` text DEFAULT NULL,
  `settings` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`settings`)),
  `credits_used` int(11) DEFAULT 1,
  `is_public` tinyint(1) DEFAULT 0,
  `status` enum('processing','completed','failed') DEFAULT 'completed',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `privacy` enum('public','private') NOT NULL DEFAULT 'private'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user_creations`
--

INSERT INTO `user_creations` (`id`, `user_id`, `type`, `tool_used`, `title`, `description`, `content`, `file_path`, `file_size`, `file_type`, `prompt`, `settings`, `credits_used`, `is_public`, `status`, `created_at`, `updated_at`, `privacy`) VALUES
(2, 1, 'image', 'ia-img', NULL, ' [Archivo corregido automáticamente]', NULL, '/uploads/sample1.jpg', NULL, NULL, NULL, NULL, 1, 0, 'completed', '2025-08-07 04:55:51', '2025-08-07 18:14:22', 'private'),
(3, 1, 'image', 'ia-img', 'Dragon Celeste', 'Dragon Japones Celeste [Archivo corregido automáticamente]', NULL, '/uploads/sample1.jpg', NULL, NULL, NULL, NULL, 1, 0, 'completed', '2025-08-07 05:11:05', '2025-08-07 18:14:22', 'private'),
(4, 1, 'image', 'ia-img', 'asdasd', 'asdasd [Archivo corregido automáticamente]', NULL, '/uploads/sample1.jpg', NULL, NULL, NULL, NULL, 1, 0, 'completed', '2025-08-07 06:12:00', '2025-08-07 18:14:22', 'public'),
(5, 1, 'image', 'ia-img', 'Paisaje Futurista con IA', 'Una hermosa imagen de un paisaje futurista generada con inteligencia artificial', NULL, '/uploads/sample1.jpg', NULL, NULL, NULL, NULL, 1, 1, 'completed', '2025-08-07 08:45:50', '2025-08-07 08:45:50', 'public'),
(6, 1, 'text', 'ia-text', 'Historia Épica Medieval', 'Una emocionante historia sobre caballeros y dragones creada con IA', NULL, '/uploads/sample2.txt', NULL, NULL, NULL, NULL, 1, 1, 'completed', '2025-08-06 08:45:50', '2025-08-07 08:45:50', 'public'),
(7, 1, 'music', 'ia-audio', 'Podcast sobre Tecnología', 'Audio generado sobre las últimas tendencias en tecnología', NULL, '/uploads/sample3.mp3', NULL, NULL, NULL, NULL, 1, 1, 'completed', '2025-08-05 08:45:50', '2025-08-07 08:45:50', 'public'),
(8, 1, 'image', 'ia-img', 'Arte Abstracto Digital', 'Composición abstracta creada con herramientas de IA', NULL, '/uploads/sample4.jpg', NULL, NULL, NULL, NULL, 1, 1, 'completed', '2025-08-04 08:45:50', '2025-08-07 08:45:50', 'public'),
(9, 1008, 'image', 'AI Image Generator', 'Paisaje Místico', 'Un hermoso paisaje creado con IA generativa', NULL, '/uploads/sample1.jpg', NULL, NULL, NULL, NULL, 1, 0, 'completed', '2025-08-05 10:07:09', '2025-08-07 18:14:59', 'public'),
(10, 1009, 'text', 'AI Text Generator', 'Historia Fantástica', 'Cuento corto sobre mundos paralelos', NULL, '/uploads/sample2.txt', NULL, NULL, NULL, NULL, 1, 0, 'completed', '2025-08-06 11:07:09', '2025-08-07 18:14:59', 'public'),
(11, 1010, 'music', 'AI Music Composer', 'Melodía Inspiradora', 'Composición musical relajante', NULL, '/uploads/sample3.mp3', NULL, NULL, NULL, NULL, 1, 0, 'completed', '2025-08-06 19:07:09', '2025-08-07 18:14:59', 'public'),
(12, 1008, 'image', 'Image Editor', 'Retrato Moderno', 'Retrato artístico con estilo contemporáneo', NULL, '/uploads/sample4.jpg', NULL, NULL, NULL, NULL, 1, 0, 'completed', '2025-08-06 00:07:09', '2025-08-07 18:14:59', 'public'),
(13, 1009, 'text', 'AI Text Generator', 'Poema Digital', 'Versos sobre la era digital', NULL, '/uploads/sample5.jpg', NULL, NULL, NULL, NULL, 1, 0, 'completed', '2025-08-06 05:07:09', '2025-08-07 18:14:59', 'public'),
(14, 1010, 'music', 'AI Music Composer', 'Sinfonía Urbana', 'Sonidos de la ciudad moderna', NULL, '/uploads/sample6.txt', NULL, NULL, NULL, NULL, 1, 0, 'completed', '2025-08-05 12:07:09', '2025-08-07 18:14:59', 'public'),
(15, 1, 'image', 'ia-img', 'city', 'city', NULL, '/api/tools/proxy-crop-image.php?url=https%3A%2F%2Fimage.pollinations.ai%2Fprompt%2Fasdasdasd%3Fwidth%3D768%26height%3D768%26seed%3D1754631463561%26attempt%3D0&crop=60', NULL, NULL, NULL, NULL, 1, 0, 'completed', '2025-08-08 05:38:16', '2025-08-08 05:38:16', 'public');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_follows`
--

CREATE TABLE `user_follows` (
  `id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL COMMENT 'Usuario que sigue',
  `following_id` int(11) NOT NULL COMMENT 'Usuario seguido',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user_follows`
--

INSERT INTO `user_follows` (`id`, `follower_id`, `following_id`, `created_at`) VALUES
(3, 1007, 1, '2025-07-15 10:07:09'),
(4, 1008, 1, '2025-07-14 10:07:09'),
(5, 1009, 1007, '2025-07-14 10:07:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_sessions`
--

CREATE TABLE `user_sessions` (
  `id` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `user_agent` text DEFAULT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `user_statistics`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `user_statistics` (
`id` int(11)
,`username` varchar(50)
,`email` varchar(100)
,`membership_type` enum('free','premium')
,`status` enum('active','suspended','deleted')
,`created_at` timestamp
,`last_login` timestamp
,`total_tool_usage` bigint(21)
,`total_payments` decimal(32,2)
,`monthly_usage` bigint(21)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `user_statistics`
--
DROP TABLE IF EXISTS `user_statistics`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_statistics`  AS SELECT `u`.`id` AS `id`, `u`.`username` AS `username`, `u`.`email` AS `email`, `u`.`membership_type` AS `membership_type`, `u`.`status` AS `status`, `u`.`created_at` AS `created_at`, `u`.`last_login` AS `last_login`, count(`tu`.`id`) AS `total_tool_usage`, coalesce(sum(`p`.`amount`),0) AS `total_payments`, (select count(0) from `tool_usage` `tu2` where `tu2`.`user_id` = `u`.`id` and `tu2`.`created_at` >= current_timestamp() - interval 30 day) AS `monthly_usage` FROM ((`users` `u` left join `tool_usage` `tu` on(`u`.`id` = `tu`.`user_id`)) left join `payments` `p` on(`u`.`id` = `p`.`user_id` and `p`.`status` = 'completed')) WHERE `u`.`role` <> 'admin' GROUP BY `u`.`id` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `admin_activity_logs`
--
ALTER TABLE `admin_activity_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `target_user_id` (`target_user_id`);

--
-- Indices de la tabla `admin_notifications`
--
ALTER TABLE `admin_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_admin_unread` (`admin_id`,`is_read`),
  ADD KEY `idx_created_at` (`created_at`);

--
-- Indices de la tabla `ad_views`
--
ALTER TABLE `ad_views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_date` (`user_id`,`created_at`),
  ADD KEY `idx_tool_type` (`tool_type`);

--
-- Indices de la tabla `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `content_reports`
--
ALTER TABLE `content_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_content_reports_reporter_id` (`reporter_id`),
  ADD KEY `idx_content_reports_creation_id` (`creation_id`),
  ADD KEY `idx_content_reports_comment_id` (`comment_id`),
  ADD KEY `idx_content_reports_user_id` (`user_id`),
  ADD KEY `idx_content_reports_status` (`status`),
  ADD KEY `idx_content_reports_created_at` (`created_at`);

--
-- Indices de la tabla `creation_comments`
--
ALTER TABLE `creation_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_creation_comments_user_id` (`user_id`),
  ADD KEY `idx_creation_comments_creation_id` (`creation_id`),
  ADD KEY `idx_creation_comments_parent_id` (`parent_id`),
  ADD KEY `idx_creation_comments_created_at` (`created_at`),
  ADD KEY `idx_creation_comments_status` (`status`);

--
-- Indices de la tabla `creation_likes`
--
ALTER TABLE `creation_likes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_user_creation_like` (`user_id`,`creation_id`),
  ADD KEY `idx_creation_likes_user_id` (`user_id`),
  ADD KEY `idx_creation_likes_creation_id` (`creation_id`),
  ADD KEY `idx_creation_likes_created_at` (`created_at`);

--
-- Indices de la tabla `credit_packages`
--
ALTER TABLE `credit_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `credit_purchases`
--
ALTER TABLE `credit_purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_transaction_id` (`transaction_id`);

--
-- Indices de la tabla `generation_logs`
--
ALTER TABLE `generation_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_tool` (`user_id`,`tool_type`),
  ADD KEY `idx_created_at` (`created_at`);

--
-- Indices de la tabla `movimientos_financieros`
--
ALTER TABLE `movimientos_financieros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `obelis_studio_elements`
--
ALTER TABLE `obelis_studio_elements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indices de la tabla `obelis_studio_projects`
--
ALTER TABLE `obelis_studio_projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_projects_public_recent` (`is_public`,`created_at`),
  ADD KEY `idx_projects_category_public` (`category`,`is_public`),
  ADD KEY `idx_projects_user_public` (`user_id`,`is_public`);

--
-- Indices de la tabla `pages_meta`
--
ALTER TABLE `pages_meta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `route` (`route`),
  ADD KEY `idx_route` (`route`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `token` (`token`),
  ADD KEY `expires_at` (`expires_at`);

--
-- Indices de la tabla `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaction_id` (`transaction_id`),
  ADD KEY `idx_payments_user_id` (`user_id`),
  ADD KEY `idx_payments_status` (`status`),
  ADD KEY `idx_payments_created_at` (`created_at`),
  ADD KEY `idx_payments_status_created` (`status`,`created_at`);

--
-- Indices de la tabla `project_comments`
--
ALTER TABLE `project_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_project_comments` (`project_id`),
  ADD KEY `idx_user_comments` (`user_id`),
  ADD KEY `idx_parent_comments` (`parent_id`),
  ADD KEY `idx_comment_date` (`created_at`);

--
-- Indices de la tabla `project_favorites`
--
ALTER TABLE `project_favorites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_favorite` (`project_id`,`user_id`),
  ADD KEY `idx_project_favorites` (`project_id`),
  ADD KEY `idx_user_favorites` (`user_id`);

--
-- Indices de la tabla `project_likes`
--
ALTER TABLE `project_likes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_like` (`project_id`,`user_id`),
  ADD KEY `idx_project_likes` (`project_id`),
  ADD KEY `idx_user_likes` (`user_id`);

--
-- Indices de la tabla `project_reports`
--
ALTER TABLE `project_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_project_reports` (`project_id`),
  ADD KEY `idx_user_reports` (`user_id`),
  ADD KEY `idx_report_status` (`status`);

--
-- Indices de la tabla `project_stats_cache`
--
ALTER TABLE `project_stats_cache`
  ADD PRIMARY KEY (`project_id`);

--
-- Indices de la tabla `project_tags`
--
ALTER TABLE `project_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_project_tag` (`project_id`,`tag`),
  ADD KEY `idx_project_tags` (`project_id`),
  ADD KEY `idx_tag_name` (`tag`);

--
-- Indices de la tabla `project_views`
--
ALTER TABLE `project_views`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_user_view` (`project_id`,`user_id`),
  ADD KEY `idx_project_views` (`project_id`),
  ADD KEY `idx_user_views` (`user_id`),
  ADD KEY `idx_view_date` (`viewed_at`);

--
-- Indices de la tabla `social_notifications`
--
ALTER TABLE `social_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from_user_id` (`from_user_id`),
  ADD KEY `creation_id` (`creation_id`),
  ADD KEY `idx_user_notifications` (`user_id`,`created_at`),
  ADD KEY `idx_user_unread` (`user_id`,`is_read`);

--
-- Indices de la tabla `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_key` (`setting_key`);

--
-- Indices de la tabla `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `idx_tools_status_category` (`status`,`category`);

--
-- Indices de la tabla `tool_limits`
--
ALTER TABLE `tool_limits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_plan_tool` (`plan_type`,`tool_type`);

--
-- Indices de la tabla `tool_ratings`
--
ALTER TABLE `tool_ratings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_user_tool_rating` (`user_id`,`tool_id`),
  ADD KEY `idx_tool_rating` (`tool_id`,`rating`);

--
-- Indices de la tabla `tool_usage`
--
ALTER TABLE `tool_usage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_tool_usage_user_id` (`user_id`),
  ADD KEY `idx_tool_usage_tool_id` (`tool_id`),
  ADD KEY `idx_tool_usage_created_at` (`created_at`);

--
-- Indices de la tabla `usage_stats`
--
ALTER TABLE `usage_stats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_user_tool_date` (`user_id`,`tool_type`,`usage_date`),
  ADD KEY `idx_usage_date` (`usage_date`),
  ADD KEY `idx_tool_type` (`tool_type`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idx_users_email` (`email`),
  ADD KEY `idx_users_username` (`username`),
  ADD KEY `idx_users_status` (`status`),
  ADD KEY `idx_users_created_at` (`created_at`),
  ADD KEY `idx_users_membership_status` (`membership_type`,`status`);

--
-- Indices de la tabla `user_achievements`
--
ALTER TABLE `user_achievements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_user_achievement` (`user_id`,`achievement_type`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_achievement_type` (`achievement_type`);

--
-- Indices de la tabla `user_creations`
--
ALTER TABLE `user_creations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_creation_type` (`type`),
  ADD KEY `idx_created_at` (`created_at`);

--
-- Indices de la tabla `user_follows`
--
ALTER TABLE `user_follows`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_follow_relationship` (`follower_id`,`following_id`),
  ADD KEY `idx_user_follows_follower_id` (`follower_id`),
  ADD KEY `idx_user_follows_following_id` (`following_id`),
  ADD KEY `idx_user_follows_created_at` (`created_at`);

--
-- Indices de la tabla `user_sessions`
--
ALTER TABLE `user_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3232;

--
-- AUTO_INCREMENT de la tabla `admin_activity_logs`
--
ALTER TABLE `admin_activity_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `admin_notifications`
--
ALTER TABLE `admin_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `ad_views`
--
ALTER TABLE `ad_views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4003;

--
-- AUTO_INCREMENT de la tabla `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `content_reports`
--
ALTER TABLE `content_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `creation_comments`
--
ALTER TABLE `creation_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `creation_likes`
--
ALTER TABLE `creation_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `credit_packages`
--
ALTER TABLE `credit_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `credit_purchases`
--
ALTER TABLE `credit_purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `generation_logs`
--
ALTER TABLE `generation_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `movimientos_financieros`
--
ALTER TABLE `movimientos_financieros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `obelis_studio_elements`
--
ALTER TABLE `obelis_studio_elements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `obelis_studio_projects`
--
ALTER TABLE `obelis_studio_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pages_meta`
--
ALTER TABLE `pages_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2003;

--
-- AUTO_INCREMENT de la tabla `project_comments`
--
ALTER TABLE `project_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `project_favorites`
--
ALTER TABLE `project_favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `project_likes`
--
ALTER TABLE `project_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `project_reports`
--
ALTER TABLE `project_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `project_tags`
--
ALTER TABLE `project_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `project_views`
--
ALTER TABLE `project_views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `social_notifications`
--
ALTER TABLE `social_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6003;

--
-- AUTO_INCREMENT de la tabla `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3006;

--
-- AUTO_INCREMENT de la tabla `tool_limits`
--
ALTER TABLE `tool_limits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tool_ratings`
--
ALTER TABLE `tool_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tool_usage`
--
ALTER TABLE `tool_usage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `usage_stats`
--
ALTER TABLE `usage_stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT de la tabla `user_achievements`
--
ALTER TABLE `user_achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user_creations`
--
ALTER TABLE `user_creations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `user_follows`
--
ALTER TABLE `user_follows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD CONSTRAINT `activity_logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `admin_activity_logs`
--
ALTER TABLE `admin_activity_logs`
  ADD CONSTRAINT `admin_activity_logs_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `admin_activity_logs_ibfk_2` FOREIGN KEY (`target_user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `ad_views`
--
ALTER TABLE `ad_views`
  ADD CONSTRAINT `ad_views_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD CONSTRAINT `contact_messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `content_reports`
--
ALTER TABLE `content_reports`
  ADD CONSTRAINT `content_reports_ibfk_1` FOREIGN KEY (`reporter_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `content_reports_ibfk_2` FOREIGN KEY (`creation_id`) REFERENCES `user_creations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `content_reports_ibfk_3` FOREIGN KEY (`comment_id`) REFERENCES `creation_comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `content_reports_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `creation_comments`
--
ALTER TABLE `creation_comments`
  ADD CONSTRAINT `creation_comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `creation_comments_ibfk_2` FOREIGN KEY (`creation_id`) REFERENCES `user_creations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `creation_comments_ibfk_3` FOREIGN KEY (`parent_id`) REFERENCES `creation_comments` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `creation_likes`
--
ALTER TABLE `creation_likes`
  ADD CONSTRAINT `creation_likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `creation_likes_ibfk_2` FOREIGN KEY (`creation_id`) REFERENCES `user_creations` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `credit_purchases`
--
ALTER TABLE `credit_purchases`
  ADD CONSTRAINT `credit_purchases_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `generation_logs`
--
ALTER TABLE `generation_logs`
  ADD CONSTRAINT `generation_logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `obelis_studio_elements`
--
ALTER TABLE `obelis_studio_elements`
  ADD CONSTRAINT `obelis_studio_elements_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `obelis_studio_projects` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `obelis_studio_projects`
--
ALTER TABLE `obelis_studio_projects`
  ADD CONSTRAINT `obelis_studio_projects_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD CONSTRAINT `password_reset_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `project_comments`
--
ALTER TABLE `project_comments`
  ADD CONSTRAINT `project_comments_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `obelis_studio_projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_comments_ibfk_3` FOREIGN KEY (`parent_id`) REFERENCES `project_comments` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `project_favorites`
--
ALTER TABLE `project_favorites`
  ADD CONSTRAINT `project_favorites_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `obelis_studio_projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_favorites_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `project_likes`
--
ALTER TABLE `project_likes`
  ADD CONSTRAINT `project_likes_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `obelis_studio_projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_likes_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `project_reports`
--
ALTER TABLE `project_reports`
  ADD CONSTRAINT `project_reports_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `obelis_studio_projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_reports_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `project_stats_cache`
--
ALTER TABLE `project_stats_cache`
  ADD CONSTRAINT `project_stats_cache_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `obelis_studio_projects` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `project_tags`
--
ALTER TABLE `project_tags`
  ADD CONSTRAINT `project_tags_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `obelis_studio_projects` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `project_views`
--
ALTER TABLE `project_views`
  ADD CONSTRAINT `project_views_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `obelis_studio_projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_views_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `social_notifications`
--
ALTER TABLE `social_notifications`
  ADD CONSTRAINT `social_notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `social_notifications_ibfk_2` FOREIGN KEY (`from_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `social_notifications_ibfk_3` FOREIGN KEY (`creation_id`) REFERENCES `user_creations` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tool_ratings`
--
ALTER TABLE `tool_ratings`
  ADD CONSTRAINT `tool_ratings_ibfk_1` FOREIGN KEY (`tool_id`) REFERENCES `tools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tool_ratings_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tool_usage`
--
ALTER TABLE `tool_usage`
  ADD CONSTRAINT `tool_usage_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tool_usage_ibfk_2` FOREIGN KEY (`tool_id`) REFERENCES `tools` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `usage_stats`
--
ALTER TABLE `usage_stats`
  ADD CONSTRAINT `usage_stats_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_achievements`
--
ALTER TABLE `user_achievements`
  ADD CONSTRAINT `user_achievements_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_creations`
--
ALTER TABLE `user_creations`
  ADD CONSTRAINT `user_creations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_follows`
--
ALTER TABLE `user_follows`
  ADD CONSTRAINT `user_follows_ibfk_1` FOREIGN KEY (`follower_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_follows_ibfk_2` FOREIGN KEY (`following_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_sessions`
--
ALTER TABLE `user_sessions`
  ADD CONSTRAINT `user_sessions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
