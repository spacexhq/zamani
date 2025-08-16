FROM php:8.2-apache

# Install dependencies
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy application
COPY src/ /var/www/html/

# Set working dir
WORKDIR /var/www/html

# Permissions (optional if Laravel/other frameworks)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html
