FROM php:7.2-apache

RUN apt-get update
RUN apt-get install fortune-mod fortunes-mario fortunes -yy

RUN a2enmod rewrite

COPY www /var/www/html

EXPOSE 80
EXPOSE 443