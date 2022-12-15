FROM php:8.1-fpm
RUN docker-php-ext-install
RUN apt install apache2
COPY ./onlybro var/www/html/
COPY ./000-default/000-default.conf /etc/apache2/site-available/000-default.conf
COPY ./apache2.conf /etc/apache2/apache2.conf
CMD ["apachectl", "-D", "FOREGROUND"]
EXPOSE 8080:80
