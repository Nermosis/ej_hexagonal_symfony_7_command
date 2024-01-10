FROM php:8.2-fpm-alpine
RUN apk add --no-cache icu-dev


# Instalar las dependencias necesarias para symfony y composer

# Copiar la configuración de PHP
#COPY ./php.ini /usr/local/etc/php/php.ini

# Copiar los archivos del proyecto
COPY .. /var/www/html

# Establecer el directorio de trabajo
WORKDIR /var/www/html

# Habilitar la extensión intl
RUN docker-php-ext-install intl

# Habilitar la extensión mbstring
#RUN docker-php-ext-install mbstring

# Instalar las dependencias de composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --quiet
ENV COMPOSER_ALLOW_SUPERUSER=1

# Ejecutar composer install
#RUN composer install
