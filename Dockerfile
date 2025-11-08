# composer build stage
FROM --platform=linux/amd64 php:8.1-cli-alpine AS composer-build
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copy composer files first (layer caching)
COPY composer.json composer.lock ./

# Install dependencies (no dev dependencies for production)
RUN rm -rf bootstrap/cache/packages.php
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist

# Copy application code
COPY . .

# Generate optimized autoloader
RUN composer dump-autoload --no-dev --optimize

# Build stage for Node.js assets (if using Laravel Mix/Vite)
FROM node:18-alpine AS node-build

WORKDIR /app

# Copy package files
COPY package.json package-lock.json* ./

# Install node dependencies
RUN npm ci --only=production || npm install --only=production

# Copy application code
COPY . .

# Build assets (adjust based on your build command)
RUN npm run build || npm run production || true

# Final production image
FROM php:8.1-fpm-alpine

# Install composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install system dependencies and PHP extensions
RUN apk update && apk add --no-cache \
    nginx \
    supervisor \
    libzip-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    icu-dev \
    oniguruma-dev \
    curl \
    bash \
    mariadb-client \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        pdo_mysql \
        mysqli \
        mbstring \
        zip \
        exif \
        pcntl \
        bcmath \
        gd \
        intl \
        opcache

# Install Redis extension
RUN apk add --no-cache --virtual .build-deps $PHPIZE_DEPS \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && apk del .build-deps

# Set working directory
WORKDIR /var/www/html

# Copy PHP configuration
COPY docker/php/php.ini /usr/local/etc/php/conf.d/laravel.ini
COPY docker/php/php-fpm.conf /usr/local/etc/php-fpm.d/zzz-laravel.conf

# Copy nginx configuration
COPY docker/nginx/nginx.conf /etc/nginx/nginx.conf
COPY docker/nginx/default.conf /etc/nginx/http.d/default.conf

# Copy supervisor configuration
COPY docker/supervisor/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Copy application from build stages
COPY --from=composer-build --chown=www-data:www-data /app /var/www/html
COPY --from=node-build --chown=www-data:www-data /app/public /var/www/html/public

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Create nginx and supervisor runtime directories
RUN mkdir -p /run/nginx /var/log/supervisor \
    && chown -R www-data:www-data /run/nginx

EXPOSE 80

# Use supervisor to run nginx and php-fpm (supervisor must run as root)
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
