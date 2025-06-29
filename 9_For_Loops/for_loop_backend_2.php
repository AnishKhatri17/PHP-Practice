<?php

    $number = $_POST["number"]; // getting the number from the html form
    $sum = 0;
    for($i = 1; $i <= $number; $i++){
        $sum = $sum + $i;
    }
        echo "The num of natural numbers upto {$number} is: <strong>{$sum}</strong>";
?>      