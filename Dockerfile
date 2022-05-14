FROM php:8.0-apache

RUN apt-get update && \
    apt-get upgrade -y 

RUN docker-php-ext-install mysqli pdo pdo_mysql && \
    docker-php-ext-enable pdo_mysql

RUN service apache2 restart

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

# Timezone
ENV TZ 'America/Sao_Paulo'
RUN echo $TZ > /etc/timezone
RUN rm /etc/localtime
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime
RUN dpkg-reconfigure -f noninteractive tzdata
USER www-data

WORKDIR /var/www/html
COPY ./src/ /var/www/html/instagram
RUN cd /var/www/html/instagram && composer install --no-dev && php artisan key:generate

RUN chown -R www-data:www-data /var/www/html
