FROM php:7.0-apache

# Enable mode rewrite and restart apache
RUN a2enmod rewrite && service apache2 restart

# Install required services
RUN apt-get update
RUN apt-get install -y vim

COPY ./laravel /var/www/html/

# Add necessary directory permissions
RUN chmod 0777 -R storage && chmod 0777 -R bootstrap

WORKDIR /var/www/html