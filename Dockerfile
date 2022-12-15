FROM debian:latest
RUN apt update && apt -y install apache2
RUN apt -y install php7.4 libapache2-mod-php7.4 php-mysql php7.4-xml php7.4-gd php7.4-mbstring php7.4-zip
COPY ./onlybro var/www/html/
COPY ./000-default/000-default.conf /etc/apache2/site-available/000-default.conf
COPY ./apache2.conf /etc/apache2/apache2.conf
CMD ["apachectl", "-D", "FOREGROUND"]
EXPOSE 8080:80
