# Simple PHP app with Apache, MySQL, Docker

> 튜토리얼: [PHP Websites using Docker Containers with PHP Apache and MySQL](https://www.section.io/engineering-education/dockerized-php-apache-and-mysql-container-development-environment/)

## 기술 스택

- Apache (with php module)
- MySQL
- Docker

## 실행

1. docker 실행

    ```bash
    $ docker-compose up
    ```
    - `php/Dockerfile`이 변경될 경우, 재실행 필요

2. 접속

    브라우저에서 `localhost:8000` 접속

3. docker 종료

    ```bash
    $ docker-compose down # DB 데이터도 삭제할 경우 -v 옵션 추가
    ```
