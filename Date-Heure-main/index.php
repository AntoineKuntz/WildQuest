<?php

$presentTime = new DateTime();

$destinationTime = new DateTime('30-12-1999 18:30');

$presentTime->getTimestamp();

echo " present time :  </br>"; 

echo $presentTime->format('M d Y A h i');

echo "</br>";

echo "destination time : </br>";

echo $destinationTime->format ('M d Y A h i');

echo "</br>";

$interval = $presentTime->diff ($destinationTime);

echo "interval : </br>";

echo $interval->format('%m month %d days %y years %h hour %i min ); 
