<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions in PHP</title>
</head>
<body>
    <form action="Math_Functions.php" method="post">
    <label>x: </label>
    <input type="text" name="x"><br>
    <label>y: </label>
    <input type="text" name="y"><br>
    <label>z: </label>
    <input type="text" name="z"><br>
    <input type="submit" value="Answer">
    </form>
</body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $maximum_val = null;
    $total = null;

    // $total = abs($x); //abs() will provide absolute value "positive value"
    // $total = round($x); //round() will round up the given input value
    //$total = floor($x); //floor() will always round up the value to one digit
    // $total = ceil($x); // ceil() will always round up the number
    // $total = sqrt($x); // sqrt() will return the square root value
    // $total = pow($x, $y); // pow() returns the power of a number
    // $total = max($x, $y, $z); //max() compares and returns the maximum value 
    $maximum_val = max($x, $y, $z); //max() compares and returns the maximum value 
    // $total = min($x, $y, $z); //max() compares and returns the minimum value
    // $total = pi(); 
    // $total = rand(1, 6); // gives random number between 1 and 6 both inclusive.
    $total = rand(50, 100); // gives random number between 50 and 100 both inclusive.

    echo "<br>";
    echo "The maximum value is {$maximum_val} <br>";
    // echo "The answer is: " . $total;
    echo "The random number is: " . $total;

?>