<?php
     echo "<strong>This is is the example of POST Method in PHP: <br><br><br></strong>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET And Post Method Example Program</title>
</head>
<body>
    <form action="GET_And_POST_Method_Example.php" method="POST">
        <label>Enter Quantity of the Burger:  </label> 
        <input type="text" name="quantity"><br>
        <input type="submit" value="Calculate the Total">
    </form>
</body>
</html>

<!-- PHP CODE IN THE SAME FILE -->
 <?php

    $item = "Burger";
    $price = 190;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $quantity * $price;

    echo "<br>";
    echo "You have ordered {$quantity} × {$item}/s🍔😋 <br>";
    echo "Your Total is Rs.{$total}💰<br>";
   
 ?>