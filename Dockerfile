FROM dunglas/frankenphp:php8.2-bookworm

# ⬇️ Install system zip/unzip utilities required by Composer
RUN apt-get update && apt-get install -y unzip zip libzip-dev \
    && docker-php-ext-install zip

# Copy the official composer tool
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Allow Composer plugins to run safely as root in Docker
ENV COMPOSER_ALLOW_SUPERUSER=1

COPY . /app
RUN composer install --no-dev --no-interaction --optimize-autoloader
RUN npm install && npm run build

ENTRYPOINT ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]
