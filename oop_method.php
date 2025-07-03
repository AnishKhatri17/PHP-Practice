<?php

echo "<br><br><strong>First Example of OOP concept in PHP: </strong><br>";
class demo
{
    function add($a, $b)
    {
        $sum = $a + $b ;
        echo "The Sum of two numbers is : ".$sum."<br>" ;
    }

    function sub($x, $y)
    {
        $sub = $x - $y ;
        echo "The Subtract of two numbers is : ".$sub."<br>" ;
    }
}
$obj = new demo();
$obj->add(800,200); // calling the add() function
$obj->sub(1000,5000) ; // calling the sub() function
?>

<?php
echo "<br><br><br>";
echo "<strong>Second Example of OOP concept in PHP: </strong><br>";

class abc
{
    function area ($l, $b)
    {
        $area = $l * $b ;
        echo "The area of a Rectangle is : ".$area."<br>";
    }
}

$xyz = new abc(); // First Object is $xyz
$xyz->area(20,45);

$anish = new abc(); // Second Object is $anish
$anish->area(4,5);
?>