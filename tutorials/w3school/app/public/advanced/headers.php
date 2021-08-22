<?php
// 1. Redirect
// header("HTTP/1.1 301 Moved Permanently");
// header("Location: http://www.example.com/");
// header("Refresh: 5; url=http://www.example.com"); //will redirect after 5 seconds

// 2. Do not caches pages
//Date in the past, tells the browser that the cache has expired
// header("Expires: Mon, 20 Feb 2005 20:12:03 GMT");
  
/* The following tell the browser that the last modification is right not so it must load the page again */
// header("Last-Modified: ". gmdate("D, d M Y H:i:s"). "GMT");

//HTTP/1.0
// header("Pragma: no-cache");

// 3. Content types
//Browser will deal page as PDF
// header ( "Content-type: application/pdf" );
  
//myPDF.pdf will called
// header ( "Content-Disposition: attachment; filename=myPDF.pdf' " );