FROM php:8.3.6-fpm-bullseye

# Install system dependencies
RUN apt-get update && apt-get install -y git wget p7zip-full

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer self-update --stable
 
# Set working directory
WORKDIR /var/www
