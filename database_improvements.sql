-- Mejoras al sistema de administración ObelisIA
-- Agregar campos faltantes a la tabla users

ALTER TABLE users 
ADD COLUMN IF NOT EXISTS phone VARCHAR(20) NULL AFTER email,
ADD COLUMN IF NOT EXISTS subscription_start DATE NULL AFTER membership_type,
ADD COLUMN IF NOT EXISTS subscription_end DATE NULL AFTER subscription_start,
ADD COLUMN IF NOT EXISTS status ENUM('active', 'suspended', 'banned') NOT NULL DEFAULT 'active' AFTER role,
ADD COLUMN IF NOT EXISTS language VARCHAR(5) NOT NULL DEFAULT 'es' AFTER status,
ADD COLUMN IF NOT EXISTS email_verified BOOLEAN NOT NULL DEFAULT FALSE AFTER language,
ADD COLUMN IF NOT EXISTS newsletter_subscribed BOOLEAN NOT NULL DEFAULT TRUE AFTER email_verified,
ADD COLUMN IF NOT EXISTS notifications_enabled BOOLEAN NOT NULL DEFAULT TRUE AFTER newsletter_subscribed,
ADD COLUMN IF NOT EXISTS max_monthly_usage INT NULL AFTER notifications_enabled,
ADD COLUMN IF NOT EXISTS api_rate_limit INT NOT NULL DEFAULT 60 AFTER max_monthly_usage,
ADD COLUMN IF NOT EXISTS notes TEXT NULL AFTER api_rate_limit,
ADD COLUMN IF NOT EXISTS last_login DATETIME NULL AFTER notes;

-- Crear tabla para configuraciones de precios premium
CREATE TABLE IF NOT EXISTS premium_settings (
    id INT PRIMARY KEY AUTO_INCREMENT,
    monthly_price DECIMAL(10,2) NOT NULL DEFAULT 9.99,
    yearly_price DECIMAL(10,2) NOT NULL DEFAULT 99.99,
    premium_credits INT NOT NULL DEFAULT 1000,
    enterprise_price DECIMAL(10,2) NOT NULL DEFAULT 299.99,
    premium_features TEXT,
    enable_trial BOOLEAN NOT NULL DEFAULT TRUE,
    trial_days INT NOT NULL DEFAULT 7,
    yearly_discount DECIMAL(5,2) NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Crear tabla para transacciones financieras
CREATE TABLE IF NOT EXISTS financial_transactions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    type ENUM('income', 'expense') NOT NULL,
    concept VARCHAR(255) NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    category VARCHAR(100) NOT NULL,
    transaction_date DATE NOT NULL,
    payment_method VARCHAR(50),
    notes TEXT,
    admin_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (admin_id) REFERENCES users(id) ON DELETE SET NULL,
    INDEX idx_transaction_date (transaction_date),
    INDEX idx_type (type),
    INDEX idx_category (category)
);

-- Mejorar tabla tools con campos adicionales
ALTER TABLE tools 
ADD COLUMN IF NOT EXISTS icon VARCHAR(50) DEFAULT 'fas fa-tools' AFTER description,
ADD COLUMN IF NOT EXISTS color VARCHAR(7) DEFAULT '#667eea' AFTER icon,
ADD COLUMN IF NOT EXISTS priority INT NOT NULL DEFAULT 2 AFTER color,
ADD COLUMN IF NOT EXISTS status ENUM('active', 'inactive', 'maintenance') NOT NULL DEFAULT 'active' AFTER priority,
ADD COLUMN IF NOT EXISTS total_uses INT NOT NULL DEFAULT 0 AFTER status,
ADD COLUMN IF NOT EXISTS monthly_uses INT NOT NULL DEFAULT 0 AFTER total_uses,
ADD COLUMN IF NOT EXISTS updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP AFTER created_at;

-- Crear tabla para ratings de herramientas
CREATE TABLE IF NOT EXISTS tool_ratings (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tool_id INT NOT NULL,
    user_id INT NOT NULL,
    rating INT NOT NULL CHECK (rating >= 1 AND rating <= 5),
    review TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (tool_id) REFERENCES tools(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    UNIQUE KEY unique_user_tool_rating (user_id, tool_id),
    INDEX idx_tool_rating (tool_id, rating)
);

-- Crear tabla para log de actividades del admin
CREATE TABLE IF NOT EXISTS admin_activity_log (
    id INT PRIMARY KEY AUTO_INCREMENT,
    admin_id INT NOT NULL,
    action VARCHAR(100) NOT NULL,
    target_type VARCHAR(50),
    target_id INT,
    details JSON,
    ip_address VARCHAR(45),
    user_agent TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (admin_id) REFERENCES users(id) ON DELETE CASCADE,
    INDEX idx_admin_action (admin_id, action),
    INDEX idx_created_at (created_at)
);

-- Mejorar tabla payments con más campos
ALTER TABLE payments 
ADD COLUMN IF NOT EXISTS payment_type ENUM('subscription', 'one_time', 'refund') NOT NULL DEFAULT 'subscription' AFTER status,
ADD COLUMN IF NOT EXISTS transaction_id VARCHAR(255) UNIQUE AFTER payment_type,
ADD COLUMN IF NOT EXISTS metadata JSON AFTER transaction_id;

-- Crear vista para estadísticas financieras
CREATE OR REPLACE VIEW financial_summary AS
SELECT 
    YEAR(transaction_date) as year,
    MONTH(transaction_date) as month,
    SUM(CASE WHEN amount > 0 THEN amount ELSE 0 END) as total_income,
    SUM(CASE WHEN amount < 0 THEN ABS(amount) ELSE 0 END) as total_expenses,
    SUM(amount) as net_profit,
    COUNT(*) as transaction_count
FROM financial_transactions 
GROUP BY YEAR(transaction_date), MONTH(transaction_date);

-- Crear vista para estadísticas de usuarios
CREATE OR REPLACE VIEW user_statistics AS
SELECT 
    u.id,
    u.username,
    u.email,
    u.membership_type,
    u.status,
    u.created_at,
    u.last_login,
    COUNT(tu.id) as total_tool_usage,
    COALESCE(SUM(p.amount), 0) as total_payments,
    (SELECT COUNT(*) FROM tool_usage tu2 WHERE tu2.user_id = u.id AND tu2.created_at >= DATE_SUB(NOW(), INTERVAL 30 DAY)) as monthly_usage
FROM users u
LEFT JOIN tool_usage tu ON u.id = tu.user_id
LEFT JOIN payments p ON u.id = p.user_id AND p.status = 'completed'
WHERE u.role != 'admin'
GROUP BY u.id;

-- Insertar datos de ejemplo para configuraciones premium
INSERT IGNORE INTO premium_settings (
    monthly_price, yearly_price, premium_credits, enterprise_price, 
    premium_features, enable_trial, trial_days, yearly_discount
) VALUES (
    9.99, 99.99, 1000, 299.99,
    'Acceso ilimitado a herramientas\nSoporte prioritario\nAPI avanzada\nAnalíticas detalladas\nIntegraciones personalizadas',
    TRUE, 7, 16.68
);

-- Insertar categorías de gastos predefinidas
INSERT IGNORE INTO financial_transactions (type, concept, amount, category, transaction_date, admin_id) VALUES
('expense', 'Configuración inicial del sistema', 0.01, 'Tecnología', CURDATE(), 1),
('income', 'Configuración inicial del sistema', 0.01, 'Configuración', CURDATE(), 1);

-- Índices adicionales para optimización
CREATE INDEX IF NOT EXISTS idx_users_membership_status ON users(membership_type, status);
CREATE INDEX IF NOT EXISTS idx_users_created_at ON users(created_at);
CREATE INDEX IF NOT EXISTS idx_tools_status_category ON tools(status, category);
CREATE INDEX IF NOT EXISTS idx_payments_status_created ON payments(status, created_at);

-- Actualizar datos existentes
UPDATE tools SET status = 'active' WHERE status IS NULL;
UPDATE users SET status = 'active' WHERE status IS NULL;
UPDATE users SET language = 'es' WHERE language IS NULL;
UPDATE users SET email_verified = FALSE WHERE email_verified IS NULL;
UPDATE users SET newsletter_subscribed = TRUE WHERE newsletter_subscribed IS NULL;
UPDATE users SET notifications_enabled = TRUE WHERE notifications_enabled IS NULL;
UPDATE users SET api_rate_limit = 60 WHERE api_rate_limit IS NULL;
