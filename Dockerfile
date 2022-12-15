FROM php:apache
RUN apt update
RUN sudo apt install php-mysqli
COPY ./onlybro var/www/html/
COPY ./000-default/000-default.conf /etc/apache2/site-available/000-default.conf
COPY ./apache2.conf /etc/apache2/apache2.conf
CMD ["apachectl", "-D", "FOREGROUND"]
EXPOSE 8080:80
