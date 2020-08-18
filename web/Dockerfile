FROM php:7.3.21-apache
WORKDIR /var/www/html/rise
COPY wait-for-it.sh ./wait-for-it.sh
RUN chmod +x ./wait-for-it.sh
COPY ./www/ .
COPY ./config/000-default.conf /etc/apache2/sites-available
RUN apt-get update && apt-get upgrade
RUN apt-get install -y vim
RUN docker-php-ext-install mysqli pdo_mysql
RUN a2enmod rewrite
CMD ["apache2ctl", "-D", "FOREGROUND"]