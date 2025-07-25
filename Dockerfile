FROM php:8.3-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libxml2-dev \
    libonig-dev \
    zip unzip git \
    libcurl4-openssl-dev libssl-dev libicu-dev \
    libmcrypt-dev libxslt-dev \
    libpq-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        gd \
        pdo_mysql \
        pdo_pgsql \
        mysqli \
        bcmath \
        zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy source code
COPY . /var/www/html/

# Set permissions
RUN chmod -R 0775 /var/www/html/core/bootstrap/cache/ \
    && chmod -R 0775 /var/www/html/core/storage/ \
    && chmod -R 0775 /var/www/html/core/storage/app/ \
    && chmod -R 0775 /var/www/html/core/storage/framework/ \
    && chmod -R 0775 /var/www/html/core/storage/logs/

# Optional: Use your own php.ini if required
# COPY php.ini /usr/local/etc/php/php.ini

EXPOSE 80

CMD ["apache2-foreground"]
