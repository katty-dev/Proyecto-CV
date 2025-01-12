
FROM php:8.0-apache

RUN apt-get update && apt-get install -y \
    php-mysqli \
    libapache2-mod-php \
    && docker-php-ext-install mysqli \
    && a2enmod rewrite

COPY . /var/www/html/


EXPOSE 80


CMD ["apache2-foreground"]
