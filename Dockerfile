FROM dunglas/frankenphp:php8.2-bookworm
COPY . /app
RUN composer install --no-dev --no-interaction
RUN npm install && npm run build
ENTRYPOINT ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]
