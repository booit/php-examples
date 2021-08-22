<?php

// 1. Starting a php session
session_start(); // html 코드 이전에 실행해야 함.

// 2. Storing a session variable
// store session data
$_SESSION["username"] = "nikita";
$_SESSION["email"] = "nikita@example.com";

//retrieve session data
echo $_SESSION["username"];
echo "<br>";
echo $_SESSION["email"];

// 3. Unset session variable
if(isset($_SESSION["username"]))
unset($_SESSION["username"]);

// 4. Destroying a session
session_destroy();
