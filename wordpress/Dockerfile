FROM wordpress:php8.1-fpm

RUN apt-get update && apt-get install -y \
  libzip-dev \
  unzip \
  && docker-php-ext-install zip

RUN pecl install redis && docker-php-ext-enable redis

COPY ../plugins /var/www/html/wp-content/plugins/

RUN chown -R www-data:www-data /var/www/html/wp-content/plugins \
  && chmod -R 755 /var/www/html/wp-content/plugins

RUN mkdir -p /var/www/html/wp-content/uploads \
  && chown -R www-data:www-data /var/www/html/wp-content/uploads