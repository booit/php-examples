<?php

// 1. Opening a file
$fileName = "/doc/myFile.txt";
$fp = fopen($fileName,"r");
if( $fp == false )
{
  echo ( "Error in opening file" );
  exit();
}

// 2. Reading a file
$fileSize = filesize( $fileName );
$fileData = fread( $fp, $fileSize );

// 3. Reading a file line by line
// while(!feof($fp))
// {
//   echo fgets($fp). "<br>";
// }

// 4. Writing a file
$fileName = "/doc/myFile.txt";
$fp = fopen($fileName,"w"); // set write mode
if( $fp == false )
{
  echo ( "Error in opening file" );
  exit();
}
fwrite( $fp, "This is a sample text to write\n" );

// 4. Close file
fclose( $fp );