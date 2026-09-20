FROM php:8.2-fpm
RUN apt-get update && apt-get install -y nginx libpq-dev libzip-dev unzip git && docker-php-ext-install pdo pdo_pgsql
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
WORKDIR /var/www
COPY . .
RUN composer install --no-dev --optimize-autoloader
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
COPY docker/nginx.conf /etc/nginx/sites-available/default
EXPOSE 10000
CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]
