# === Stage 1: Install Composer Dependencies ===
FROM composer:latest AS composer_base
WORKDIR /app
COPY composer.json composer.lock ./
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install --no-dev --no-interaction --no-scripts --no-autoloader

# === Stage 2: Compile Frontend Assets (Node.js) ===
FROM node:20-alpine AS node_builder
WORKDIR /app
COPY package.json package-lock.json* yarn.lock* ./
RUN if [ -f yarn.lock ]; then yarn install; else npm ci; fi
COPY . .
RUN if [ -f yarn.lock ]; then yarn build; else npm run build; fi

# === Stage 3: Final Production Server Build ===
FROM dunglas/frankenphp:php8.2-bookworm
WORKDIR /app

# Install system utilities and the required PHP zip extension
RUN apt-get update && apt-get install -y \
    unzip \
    zip \
    && rm -rf /var/lib/apt/lists/* \
    && install-php-extensions zip

# Copy the entire codebase to the container
COPY . /app

# Copy vendors and built assets safely from the local build stages above
COPY --from=composer_base /app/vendor /app/vendor
COPY --from=node_builder /app/public /app/public

# Pull the runtime binary for composer to run the optimized dump-autoload
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer dump-autoload --no-dev --optimize

# === CRITICAL FOR RAILWAY REVERSE PROXY ===
ENV SERVER_NAME=:80
ENV PORT=80
EXPOSE 80