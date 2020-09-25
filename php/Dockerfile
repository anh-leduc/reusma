FROM php:7.4.8-fpm

RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql

RUN apt-get update && \
     apt-get install -y \
         libzip-dev \
         && docker-php-ext-install zip
#install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /home/sites/site1

EXPOSE 9000
CMD ["php-fpm"]