
FROM php:10.19-fpm


WORKDIR /var/www/html


COPY . .


RUN composer install

EXPOSE 9000
CMD ["php-fpm"]
