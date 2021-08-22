<?php

// Method signature (timestamps 인자를 생략하면 현재 시간 반영)
// date(string format, int timestamp)

//current Date, i.e. 2013-08-01  
echo date("Y-m-d");
   
//current Time in 12 hour format, i.e. 08:50:55pm    
echo date("h:i:sa");
   
//current Time in 24 hour format, i.e. 18:00:23    
echo date("H:i:s");
   
//current Month, i.e. 08     
echo date("m");
   
//current Month name, i.e. Aug      
echo date("M"); 

//current Timestamp, i.e. 1377540167
echo time();

// Increase one day from current date
echo "Date is ".date("Y-m-d", time()+86400); 

// Decrease 15 days from current date
echo "Date is ".date("Y-m-d",time()-(86400*15)); 

// set timezone
date_default_timezone_set("Asia/Seoul");
