<?php
    // Arithmetic Operators
    // + - * / ** %
    $x = 10;
    $y = 2;
    $z = null;

    echo "<strong>Using Arithmetic Operators: </strong><br>";
    // $z = $x + $y; // The sum of two number is "10 + 2 = 12"
    // $z = $x - $y; // The difference of two number is "10 - 2 = 8"
    // $z = $x * $y; // The multiplication of two number is "10 * 2 = 20"
    // $z = $x / $y; // The division of two number is "10 / 2 = 5"
    $z = $x ** $y; // The power of 10 ^ 2 is "10 ^ 2 = 100"
    // $z = $x % $y; // The remainder of 10 % 2 is "10 % 2 = 0
    echo "The power of 10 ^ 2 is: {$z} <br><br>";
    // echo $z;

    echo "<strong>Using Increment/Decrement Operators: </strong><br>";
    // Increment and Decrement Operators
    // ++ and --
    $counter = 5;

    $counter++; // 1
    echo "After using ++ operator to 5 counter: ".$counter. "<br>";

    $counter--; // 5
    echo "After using -- operator to incremented 6 counter: ".$counter. "<br>";

    $counter+= 10; // 5 + 10
    echo "Using += operator and the answer is: ".$counter. "<br>";

    $counter-= 11; // 15 - 11
    echo "Using -= operator and the answer is: ".$counter. "<br><br>";


    echo "<strong>Using Operator Precendence (left to right): </strong><br>";
    // Operator Precedence (Very Important Topic)
    // ()
    // **
    // * / %
    // + -

    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    // Let's do it step by step based on the operator precedence.....
    // $total = 1 + 2 - 3 * 4 / 15625;   // ** is first precedence
    // $total = 1 + 2 - 12 / 15625;  // when two same precedence occurs "* and /" then do left to right order.
    // $total = 1 + 2 - 0.000768;    // Divide precedence
    $total = 3 - 0.000768;
    
    echo "The final answer after the operator precedence is : ".$total;


?>