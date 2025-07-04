<?php
echo ("<strong style='font-size: 20px;'>php program to calculate simple interest.</strong><br>");
$principal = 2400 ;
$time = 4.3 ;
$rate = 9.99 ;

$SI = ($principal * $time * $rate)/100 ;
echo("<br>");
echo("The simple interest using php is :" . $SI); 

?>