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

# Copy vendors and built assets from Stage 1 & Stage 2
COPY --from=composer_base /app/vendor /app/vendor
COPY --from=node_builder /app/public /app/public

# Run Composer dump-autoload to complete mapping
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer dump-autoload --no-dev --optimize

# === CRITICAL FOR RAILWAY REVERSE PROXY ===
# Tells FrankenPHP to strictly bind to HTTP on port 80 without internal SSL redirections
ENV SERVER_NAME=:80
ENV PORT=80
EXPOSE 80