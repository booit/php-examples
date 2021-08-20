FROM php:8.0-apache

# mysql MySQLi 드라이버 설치
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# OS 업데이트
RUN apt-get update && apt-get upgrade -y
