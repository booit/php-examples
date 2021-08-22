# Rest Api with MySQL

> 구성 참고: [Create Simple RESTful API with PHP & MySQL](https://www.phpzag.com/how-to-create-simple-rest-api-in-php/)

## 기술 스택

- Apache
- PHP-FPM
- MySQL
- Docker

## 실행

1. docker 실행

    ```bash
    $ docker-compose up
    ```
    - `--build`: 도커 이미지 빌드 후 실행

2. 접속

    브라우저에서 `localhost` 접속

3. docker 종료

    ```bash
    $ docker-compose down # DB 데이터도 삭제할 경우 -v 옵션 추가
    ```
