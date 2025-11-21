# Stage 1: Builder
FROM php:8.3-fpm-alpine AS base

# Install necessary system dependencies and minimal PHP extensions
RUN apk add --no-cache \
    git \
    curl \
    libzip-dev \
    && docker-php-ext-install zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Stage 2: Dependencies
FROM base AS dependencies
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader

# Stage 3: Production
FROM base AS production
COPY --from=dependencies /var/www/html/vendor /var/www/html/vendor
COPY . /var/www/html

# Set the correct permissions for Laravel storage and cache directories
RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]