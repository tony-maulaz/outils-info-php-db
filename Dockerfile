FROM php:8.1-fpm

RUN apt-get update

# Install debug php
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

RUN apt-get install -y postgresql libpq-dev

RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pgsql pdo_pgsql

RUN apt-get install -y nodejs npm
# RUN apt-get install -y php-pgsql
