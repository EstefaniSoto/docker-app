FROM php:7.4-apache

RUN docker-php-ext-install mysqli

WORKDIR /var/www/html

COPY ./index.php /var/www/html

EXPOSE 80
