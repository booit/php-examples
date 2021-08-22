<?php

// 1. Using environment variables by $_ENV
// "$_ENV"를 사용하기 위해서는, 다음과 같은 php.ini 설정 필요
// variables_order = "GPCSE"
echo 'The username is: ' .$_ENV["USER"] . '!';


// 2. Using environment variables by getenv()

getenv("REMOTE_ADDR"); //fetch the current user's IP address

putenv("tmp=usr"); //set the user's value for environment variable

getenv("tmp");