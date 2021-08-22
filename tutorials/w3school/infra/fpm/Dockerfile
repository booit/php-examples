FROM php:fpm

# gd 익스텐션 의존 패키지 설치
RUN apt-get update -y && apt-get install -y zlib1g-dev libpng-dev libjpeg62-turbo-dev

# mysql PDO 드라이버 설치
RUN docker-php-ext-install pdo pdo_mysql 

# gd 익스텍션 설치
RUN docker-php-ext-configure gd --with-jpeg
RUN docker-php-ext-install gd

# 디버그 익스텐션 설치
RUN pecl install xdebug && docker-php-ext-enable xdebug
