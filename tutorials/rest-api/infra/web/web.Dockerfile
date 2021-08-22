FROM ubuntu:latest

# 설치 시 사용자 입력을 요구하는 것을 방지
ENV DEBIAN_FRONTEND=noninteractive

# apache 설치 및 fcgi 활성화
RUN apt update
RUN apt install -y apache2
RUN apt install libapache2-mod-fcgid
RUN a2enmod proxy
RUN a2enmod proxy_fcgi

# php-fpm 구성
RUN apt install -y php7.4-fpm
RUN a2enconf php7.4-fpm
RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer 

# php 확장 구성
RUN apt install -y php7.4-mysql

# 포트 설정
EXPOSE 80

# php-fpm 및 apache 서비스 실행
CMD service php7.4-fpm start && /usr/sbin/apache2ctl -D FOREGROUND

#set working directory to where Apache serves files
WORKDIR /var/www/html
RUN rm index.html