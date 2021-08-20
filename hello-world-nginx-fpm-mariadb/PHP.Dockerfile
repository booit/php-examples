FROM php:fpm

# mysql PDO 드라이버 설치
RUN docker-php-ext-install pdo pdo_mysql

# 디버그 익스텐션 설치
RUN pecl install xdebug && docker-php-ext-enable xdebug
