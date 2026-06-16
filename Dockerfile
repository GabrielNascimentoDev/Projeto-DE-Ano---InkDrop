FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    curl zip unzip git \
    && docker-php-ext-install pdo pdo_sqlite

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

RUN composer install --no-dev --optimize-autoloader
RUN php artisan config:clear

EXPOSE 8000

CMD php artisan migrate --force && \
    php artisan db:seed --class=ProductSeeder --force && \
    php artisan serve --host=0.0.0.0 --port=8000