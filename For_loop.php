<?php
// Php program to generate natural numbers from 1 to 10.

echo "<br><strong>Program to generate natural numbers from 1 to 10.</strong>" ;
echo "<br><br>" ;
for($i=1; $i<=10; $i++)
{
    echo "The number is : ".$i ;
    echo "<br>" ;
}
echo "<br><br><br>" ;
 
$sum = 0;
for($j=1; $j<=10; $j++)
{
    $sum = $sum + $j ;
}
    echo "The sum of numbers between 1 to 10 is : ".$sum ;

?>