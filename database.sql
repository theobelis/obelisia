-- Crear base de datos ObelisIA
CREATE DATABASE IF NOT EXISTS obelisia_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Usar la base de datos
USE obelisia_db;

-- Crear tabla de usuarios
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(100) NOT NULL,
    role ENUM('admin', 'user') DEFAULT 'user',
    status ENUM('active', 'inactive') DEFAULT 'active',
    membership_type ENUM('free', 'premium') DEFAULT 'free',
    membership_expires_at TIMESTAMP NULL,
    credits_remaining INT DEFAULT 10,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    last_login TIMESTAMP NULL,
    profile_image VARCHAR(255) NULL,
    bio TEXT NULL,
    phone VARCHAR(20) NULL,
    address TEXT NULL
);

-- Insertar usuario administrador por defecto
INSERT INTO users (username, email, password, full_name, role, membership_type) 
VALUES ('admin', 'admin@obelisia.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Administrador', 'admin', 'premium')
ON DUPLICATE KEY UPDATE username = username;

-- Nota: La contraseña por defecto es "password"
-- Se recomienda cambiarla después del primer login

-- Tabla de proyectos/creaciones de los usuarios
CREATE TABLE IF NOT EXISTS user_creations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    type ENUM('image', 'video', 'music', 'text') NOT NULL,
    tool_used VARCHAR(100) NOT NULL,
    title VARCHAR(255),
    description TEXT,
    file_path VARCHAR(500),
    thumbnail_path VARCHAR(500),
    settings JSON,
    credits_used INT DEFAULT 1,
    is_public BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Tabla de límites de herramientas por plan
CREATE TABLE IF NOT EXISTS plan_limits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    plan_type ENUM('free', 'premium') NOT NULL,
    tool_name VARCHAR(100) NOT NULL,
    monthly_limit INT,
    has_watermark BOOLEAN DEFAULT TRUE,
    max_resolution VARCHAR(20),
    priority_queue BOOLEAN DEFAULT FALSE
);

-- Insertar límites para plan gratuito
INSERT INTO plan_limits (plan_type, tool_name, monthly_limit, has_watermark, max_resolution, priority_queue) VALUES
('free', 'image_generator', 10, TRUE, '512x512', FALSE),
('free', 'video_generator', 3, TRUE, '480p', FALSE),
('free', 'music_generator', 5, TRUE, '128kbps', FALSE),
('free', 'background_remover', 20, TRUE, '1024x1024', FALSE),
('free', 'image_editor', 15, TRUE, '1024x1024', FALSE),
('free', 'color_palette', 50, FALSE, 'unlimited', FALSE);

-- Insertar límites para plan premium
INSERT INTO plan_limits (plan_type, tool_name, monthly_limit, has_watermark, max_resolution, priority_queue) VALUES
('premium', 'image_generator', NULL, FALSE, '4K', TRUE),
('premium', 'video_generator', NULL, FALSE, '4K', TRUE),
('premium', 'music_generator', NULL, FALSE, '320kbps', TRUE),
('premium', 'background_remover', NULL, FALSE, '4K', TRUE),
('premium', 'image_editor', NULL, FALSE, '4K', TRUE),
('premium', 'color_palette', NULL, FALSE, 'unlimited', TRUE);

-- Índices adicionales para optimización
CREATE INDEX idx_users_email ON users(email);
CREATE INDEX idx_users_username ON users(username);
CREATE INDEX idx_users_status ON users(status);
CREATE INDEX idx_users_created_at ON users(created_at);

-- Tabla de sesiones (opcional, para sesiones en BD)
CREATE TABLE IF NOT EXISTS user_sessions (
    id VARCHAR(128) PRIMARY KEY,
    user_id INT NOT NULL,
    ip_address VARCHAR(45) NOT NULL,
    user_agent TEXT,
    last_activity TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Tabla de logs de actividad (opcional)
CREATE TABLE IF NOT EXISTS activity_logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    action VARCHAR(100) NOT NULL,
    description TEXT,
    ip_address VARCHAR(45),
    user_agent TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);
