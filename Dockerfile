FROM php:8.2-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    git \
    && docker-php-ext-install pdo pdo_mysql mysqli zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . /var/www/html

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Enable Apache rewrite
RUN a2enmod rewrite

# Configure Apache for Render
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Create necessary directories with proper permissions
RUN mkdir -p /tmp/ll_sessions /tmp/ll_logs /tmp/ll_cache \
    && chown -R www-data:www-data /tmp/ll_* \
    && chmod -R 755 /tmp/ll_*

# Expose port
EXPOSE 80

CMD ["apache2-foreground"]
