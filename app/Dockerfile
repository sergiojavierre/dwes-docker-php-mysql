# Imagen base con PHP y Apache
FROM php:apache

# Instalar extensión mysqli
RUN docker-php-ext-install mysqli

# Copiar archivos PHP al directorio de trabajo del servidor Apache
COPY . /var/www/html/