<?php

$url = "https://w3schools.in/";
$encodedUrl = urlencode("https://w3schools.in/");

echo "URL: ".$url."<br />";
echo "Encoded URL: ".$encodedUrl."<br />";
echo "Decoded URL: ".urldecode($encodedUrl);
