<?php

// 1. 프로젝트 루트에 composer 설치
// $ curl -s https://getcomposer.org/installer | PHP

// 2. (선택) 전역 명령어 적용
// $ sudo mv composer.phar /usr/bin/composer (OS별 명령어 경로)

// 3. 패키지 설치
// $ composer require 패키지명 (최초 설치, 패키지는 packagist.org에서 검색)
// 또는 $ composer install (composer.json 참조)

// include composer autoload
require "../vendor/autoload.php";

// import the Intervention image manager class file
use Intervention\Image\ImageManagerStatic as Image;

$Image = Image::make("upload/image.jpg")->resize(200, 200)->save("img/thumbnail.jpg",100);

