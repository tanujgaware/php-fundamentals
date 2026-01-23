<?php
//Displaying date
echo "Today is ". date("Y/m/d") . "</br>";
echo "Today is " . date("l"). "<br>";

//Displaying time
echo "The time is ".date("H:i:s")."</br>";
echo "The time is ".date("h:i:s a")."</br>";

// Set date and time
date_default_timezone_set("Asia/Kolkata");
echo "The time is ".date("Y-m-d H:i:s") ."</br>";
echo date_default_timezone_get();
echo "</br>";

//mktime
$d=mktime(0,0,0,15,8,1947);
echo "The 15 aug 1947  was on " . date('l',$d) . "</br>";

//time
$ts=time();
echo "Now:" .date("h:i:s a",$ts)."</br>";


?>