<?php

// 1. Data types
$intValue = 100; // Numeric(integer)
$doubleValue = 55.5; // Nueric(float)
$strValue = "abc"; // String
$boolValue = true; // Boolean
// Array
// object
// Resource
// NULL

// 2. Casting
$a = 9.88;
$casted = (int) $a; // 9

// 3. Variable variables
$varName = "me";
$$varName = "Hello";
echo $me; // Displays "Hello"

// 4. Constants
define("CONSTANT_VAR", "Hello World.");
echo CONSTANT_VAR; // Displasy "Hello World."

// 5. Referencing variables (&변수)
// $a = 5;
// $b = &$a; // Reference
// $b = 10;
// echo $a;; // Print 10
