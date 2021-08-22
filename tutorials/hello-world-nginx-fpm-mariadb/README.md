# Simple PHP app with NGINX, MariaDB, Docker

> 튜토리얼: [Setting Up a Modern PHP Development Environment with Docker](https://www.sitepoint.com/docker-php-development-environment/)

## 기술 스택

- NGINX 
- PHP-FPM
- MariaDB
- Docker

## 실행

1. docker 실행

    ```bash
    $ docker-compose up
    ```
    - `nginx.conf` 또는 `PHP.Dockerfile`이 변경될 경우, 재실행 필요

2. 접속

    브라우저에서 `127.0.0.1` 접속

3. docker 종료

    ```bash
    $ docker-compose down # DB 데이터도 삭제할 경우 -v 옵션 추가
    ```
