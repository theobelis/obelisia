# Usar una imagen oficial de PHP 8.2 con el servidor Apache
FROM php:8.2-apache

# ---- PASO AÑADIDO ----
# Instalar las dependencias del sistema necesarias para compilar la extensión de PostgreSQL.
# libpq-dev contiene los archivos de desarrollo (como libpq-fe.h).
RUN apt-get update && apt-get install -y libpq-dev \
    && rm -rf /var/lib/apt/lists/*

# Instalar las extensiones de PHP que tu proyecto necesita (PDO para bases de datos).
# Ahora este paso funcionará porque ya instalamos las dependencias.
RUN docker-php-ext-install pdo pdo_pgsql

# Habilitar mod_rewrite para que funcionen las URLs amigables de tu .htaccess
RUN a2enmod rewrite

# Copiar todos los archivos de tu proyecto al directorio web del servidor Apache
COPY . /var/www/html/

# Asegurar que el servidor web tenga los permisos correctos sobre los archivos
RUN chown -R www-data:www-data /var/www/html