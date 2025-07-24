# Usar una imagen oficial de PHP 8.2 con el servidor Apache
FROM php:8.2-apache

# Instalar las extensiones de PHP que tu proyecto necesita (PDO para bases de datos)
# Usamos pdo_pgsql porque la base de datos gratuita de Render es PostgreSQL
RUN docker-php-ext-install pdo pdo_pgsql

# Habilitar mod_rewrite para que funcionen las URLs amigables de tu .htaccess
RUN a2enmod rewrite

# Copiar todos los archivos de tu proyecto al directorio web del servidor Apache
COPY . /var/www/html/

# Asegurar que el servidor web tenga los permisos correctos sobre los archivos
RUN chown -R www-data:www-data /var/www/html