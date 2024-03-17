# Use the official PHP image with Apache as the parent image
FROM php:8.2-apache

# Install system dependencies including PostgreSQL driver
RUN apt-get update && apt-get install -y \
        libicu-dev \
        libpq-dev \
        git \
        unzip \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl pdo pdo_mysql pdo_pgsql

# Install Composer globally
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Set working directory in container
WORKDIR /var/www/html

# Avoid running Composer as root: Create a new user "appuser"
RUN useradd -m appuser

# Copy the Symfony project files into the container
# Ensure you copy the .env or any relevant files if necessary
COPY --chown=appuser:appuser . .

# Switch to user 'appuser' for the following commands
USER appuser

# Install Symfony dependencies as non-root user
# Using --no-scripts to avoid issues related to missing environment variables
RUN composer install --no-interaction --optimize-autoloader --no-scripts

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

# Ensure the .env file or environment variables are not required during the build process.
# Environment variables should be set in Kubernetes deployment configuration.

# Run the container as non-root user
USER appuser
