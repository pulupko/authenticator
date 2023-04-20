FROM php:8.2-fpm

RUN apt update \
    && apt install -y zlib1g-dev g++ git libicu-dev zip libzip-dev zip \
    && docker-php-ext-install intl opcache pdo pdo_mysql \
    && pecl install xdebug apcu \
    && docker-php-ext-enable xdebug apcu

# PHP config
RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini
COPY ./php-fpm/conf.d $PHP_INI_DIR/conf.d

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer