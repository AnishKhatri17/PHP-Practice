<?php
    $number = $_POST["number"];
    $i = 1;
    $sum = 0;

    while($i <= $number){
        $sum += $i;
        $i++;
    }

    echo "The sum of natural numbers up to {$number} is: <strong>{$sum}</strong>";
?>