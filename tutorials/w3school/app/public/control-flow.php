<?php

// 1. if statement
$date=date("m-d"); 

if ($date=="01-10") { 
  echo "Wishing you a very Happy Birthday"; 
}
elseif($date=="08-15"){
  echo "Happy Independence Day"; 
}
else{
  //nothing
}

// 2. switch statement

$myFavColor='red';

switch ($myFavColor)
{
case 'pink':
  echo 'My favorite car color is pink!';
  break;
case 'red':
  echo 'My favorite car color is red!';
  break;
case 'orange':
  echo 'My favorite car color is orange!';
  break;
default:
  echo 'My favorite car color is not pink, red, or orange!';
}

// 3. while statement
$i = 1; 

while ($i <= 5){ 
  echo "Hello while $i times"."<br>"; 
  $i++; 
} 

// 4. do-while statement
$i=0;
do{
  $i++;
  echo "php do...while loop $i times"."<br>";
}
  while ($i<=5);

// 5. do-while statement
for ($i=1; $i <= 5; $i++ ){ 
    echo "PHP for loop print $i times"."<br>";
} 

// 6. foreach statement
$salary[]=2000;
$salary[]=3000;
$salary[]=5000;

foreach($salary as $value){
  echo "Salary: $value<br>";
}