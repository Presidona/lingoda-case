# Use the official PHP image with Apache as the parent image
FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y libicu-dev git unzip \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl pdo pdo_mysql

# Install Composer globally
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Set working directory in container
WORKDIR /var/www/html

# Avoid running Composer as root: Create a new user "appuser"
RUN useradd -m appuser
USER appuser

# Copy the Symfony project files into the container
COPY --chown=appuser:appuser . .

# Install Symfony dependencies as non-root user
RUN composer install --no-interaction --optimize-autoloader

# Switch back to root user to configure Apache
USER root

# Change ownership of the Symfony project files
RUN chown -R appuser:www-data /var/www/html

# Configure Apache document root
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Run the container as non-root user
USER appuser
