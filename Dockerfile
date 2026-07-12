FROM dunglas/frankenphp:php8.2-bookworm

# 1. Install system zip utilities AND official Node.js (v22) natively
RUN apt-get update && apt-get install -y unzip zip libzip-dev curl \
    && docker-php-ext-install zip \
    && curl -fsSL https://nodesource.com | bash - \
    && apt-get install -y nodejs

# 2. Copy the official composer tool
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 3. Set environment rules for root
ENV COMPOSER_ALLOW_SUPERUSER=1

# 4. Copy project files and build everything
COPY . /app
WORKDIR /app
RUN composer install --no-dev --no-interaction --optimize-autoloader
RUN npm install && npm run build

ENTRYPOINT ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]
