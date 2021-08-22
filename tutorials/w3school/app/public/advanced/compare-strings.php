<?php

// 1. strcmp($a, $b)
// $a > $b이면 양수 반환
// $a == $b이면 0 반환
// $a < $b이면 음수 반환
$strg1 = "Hey";
$strg2 = "Hey PHP";

echo strcmp($strg1, $strg2); // Outputs: -4

// 2. $a == $b
// 대소문자 구분함

// 3. strcasecmp($a, $b) 
// strcmp()와 동일하게 작동. 단, 대소문자는 구분하지 않음.

// 4. strncasecmp($a, $b, length) 
// strcmp()와 동일하게 작동. 단, 첫 문자부터 length만큼만 비교.
// $strg1 = "helloworld";
// $strg2 = "hello";

// echo strncasecmp($strg1, $strg2 , 5); // 0