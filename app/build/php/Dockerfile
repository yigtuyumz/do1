ARG FPM_VER=8.3

FROM php:${FPM_VER}-fpm

RUN apt update
RUN apt upgrade -y
RUN apt-get install vim -y

RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql
