<?php

// Method signature
// setcookie(name, value, expiration);

// 1. Create a cookie
setcookie("username", "Jhon", time()+3600);

// 2. Retrieve a cookie value
echo $_COOKIE["username"];

// 3. Delete a cookie
setcookie("username", "Jhon", time()-3600);
