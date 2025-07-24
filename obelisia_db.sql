-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-07-2025 a las 09:30:00
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
-- Base de datos: `obelisia_db`
--
CREATE DATABASE IF NOT EXISTS `obelisia_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `obelisia_db`;

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
  `role` enum('admin','user') DEFAULT 'user',
  `status` enum('active','inactive') DEFAULT 'active',
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
  `credits_remaining` int(11) DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `full_name`, `role`, `status`, `language`, `email_verified`, `newsletter_subscribed`, `notifications_enabled`, `max_monthly_usage`, `api_rate_limit`, `notes`, `created_at`, `updated_at`, `last_login`, `profile_image`, `bio`, `phone`, `address`, `membership_type`, `subscription_start`, `subscription_end`, `membership_expires_at`, `credits_remaining`) VALUES
(1, 'admin', 'admin@obelisia.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Administrador', 'admin', 'active', 'es', 0, 1, 1, NULL, 60, NULL, '2025-07-15 21:53:49', '2025-07-15 22:14:26', NULL, NULL, NULL, NULL, NULL, 'premium', NULL, NULL, NULL, 10),
(2, 'ppkntoo', 'peppecanto18@gmail.com', '$2y$10$3otWdliepDLaY5VpZRXBq.fIzHd7PHfI/L6N/dM8ZTZaUby6T/TeK', 'Samuel Rondón', 'admin', 'active', 'es', 0, 1, 1, NULL, 60, NULL, '2025-07-15 22:02:16', '2025-07-23 04:07:06', '2025-07-23 04:07:06', NULL, NULL, NULL, NULL, 'premium', NULL, NULL, '2025-08-16 00:09:29', 10),
(3, 'user_free_1', 'free1@test.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Usuario Free 1', 'user', 'active', 'es', 0, 1, 1, NULL, 60, NULL, '2025-07-16 10:06:11', '2025-07-16 10:06:11', NULL, NULL, 'Usuario de prueba con plan gratuito', '+1234567890', NULL, 'free', NULL, NULL, NULL, 10),
(4, 'user_free_2', 'free2@test.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Usuario Free 2', 'user', 'active', 'es', 0, 1, 1, NULL, 60, NULL, '2025-07-16 10:06:11', '2025-07-16 10:06:11', NULL, NULL, 'Otro usuario gratuito', '+1234567891', NULL, 'free', NULL, NULL, NULL, 5),
(5, 'user_premium_1', 'premium1@test.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Usuario Premium 1', 'user', 'active', 'es', 0, 1, 1, NULL, 60, NULL, '2025-07-16 10:06:11', '2025-07-16 10:06:11', NULL, NULL, 'Usuario premium activo', '+1234567892', NULL, 'premium', NULL, NULL, NULL, 100),
(6, 'user_premium_2', 'premium2@test.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Usuario Premium 2', 'user', 'active', 'es', 0, 1, 1, NULL, 60, NULL, '2025-07-16 10:06:11', '2025-07-16 10:06:11', NULL, NULL, 'Segundo usuario premium', '+1234567893', NULL, 'premium', NULL, NULL, NULL, 80),
(7, 'user_inactive', 'inactive@test.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Usuario Inactivo', 'user', 'inactive', 'es', 0, 1, 1, NULL, 60, NULL, '2025-07-16 10:06:11', '2025-07-16 10:06:11', NULL, NULL, 'Usuario desactivado', NULL, NULL, 'free', NULL, NULL, NULL, 0);


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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_activity_log`
--

CREATE TABLE `admin_activity_log` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `target_type` varchar(50) DEFAULT NULL,
  `target_id` int(11) DEFAULT NULL,
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`details`)),
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_notifications`
--

CREATE TABLE `admin_notifications` (
  `id` int(11) NOT NULL,
  `type` enum('info','warning','error','success') DEFAULT 'info',
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) DEFAULT 0,
  `priority` enum('low','medium','high','critical') DEFAULT 'medium',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `read_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `financial_transactions`
--

CREATE TABLE `financial_transactions` (
  `id` int(11) NOT NULL,
  `type` enum('income','expense') NOT NULL,
  `concept` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `category` varchar(100) NOT NULL,
  `transaction_date` date NOT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
(1, 'site_name', 'ObelisIA', 'string', 'Nombre del sitio web', 1, '2025-07-16 10:03:27', '2025-07-16 10:03:27'),
(2, 'site_description', 'Plataforma de herramientas de inteligencia artificial', 'string', 'Descripción del sitio', 1, '2025-07-16 10:03:27', '2025-07-16 10:03:27'),
(3, 'maintenance_mode', '0', 'boolean', 'Modo de mantenimiento (0=desactivado, 1=activado)', 1, '2025-07-16 10:03:27', '2025-07-16 17:11:20'),
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
  `color` varchar(7) DEFAULT '#667eea',
  `priority` int(11) NOT NULL DEFAULT 2,
  `status` enum('active','inactive','maintenance') NOT NULL DEFAULT 'active',
  `is_active` tinyint(1) DEFAULT 1,
  `is_premium` tinyint(1) DEFAULT 0,
  `monthly_uses` int(11) DEFAULT 0,
  `total_uses` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


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
-- Estructura de tabla para la tabla `user_creations`
--

CREATE TABLE `user_creations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` enum('image','video','music','text','utility') NOT NULL,
  `tool_used` varchar(100) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `file_path` varchar(500) NOT NULL,
  `file_size` int(11) DEFAULT NULL,
  `file_type` varchar(100) DEFAULT NULL,
  `prompt` text DEFAULT NULL,
  `settings` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`settings`)),
  `credits_used` int(11) DEFAULT 1,
  `is_public` tinyint(1) DEFAULT 0,
  `status` enum('processing','completed','failed') DEFAULT 'completed',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


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
-- Estructura para la vista `financial_summary`
--
DROP TABLE IF EXISTS `financial_summary`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `financial_summary`  AS SELECT year(`financial_transactions`.`transaction_date`) AS `year`, month(`financial_transactions`.`transaction_date`) AS `month`, sum(case when `financial_transactions`.`amount` > 0 then `financial_transactions`.`amount` else 0 end) AS `total_income`, sum(case when `financial_transactions`.`amount` < 0 then abs(`financial_transactions`.`amount`) else 0 end) AS `total_expenses`, sum(`financial_transactions`.`amount`) AS `net_profit`, count(0) AS `transaction_count` FROM `financial_transactions` GROUP BY year(`financial_transactions`.`transaction_date`), month(`financial_transactions`.`transaction_date`) ;

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
-- Indices de la tabla `admin_activity_log`
--
ALTER TABLE `admin_activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_admin_action` (`admin_id`,`action`),
  ADD KEY `idx_created_at` (`created_at`);

--
-- Indices de la tabla `admin_notifications`
--
ALTER TABLE `admin_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_admin_notifications_is_read` (`is_read`),
  ADD KEY `idx_admin_notifications_priority` (`priority`);

--
-- Indices de la tabla `financial_transactions`
--
ALTER TABLE `financial_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `idx_transaction_date` (`transaction_date`),
  ADD KEY `idx_type` (`type`),
  ADD KEY `idx_category` (`category`);

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
-- Indices de la tabla `user_creations`
--
ALTER TABLE `user_creations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_creation_type` (`type`),
  ADD KEY `idx_created_at` (`created_at`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `admin_activity_log`
--
ALTER TABLE `admin_activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `admin_notifications`
--
ALTER TABLE `admin_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `financial_transactions`
--
ALTER TABLE `financial_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tool_ratings`
--
ALTER TABLE `tool_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tool_usage`
--
ALTER TABLE `tool_usage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `user_creations`
--
ALTER TABLE `user_creations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD CONSTRAINT `activity_logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `admin_activity_log`
--
ALTER TABLE `admin_activity_log`
  ADD CONSTRAINT `admin_activity_log_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `financial_transactions`
--
ALTER TABLE `financial_transactions`
  ADD CONSTRAINT `financial_transactions_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
-- Filtros para la tabla `user_creations`
--
ALTER TABLE `user_creations`
  ADD CONSTRAINT `user_creations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_sessions`
--
ALTER TABLE `user_sessions`
  ADD CONSTRAINT `user_sessions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;