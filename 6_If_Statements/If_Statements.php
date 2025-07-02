<?php
    //if statement = if some condition is true, so something
    //               if condition is false, don't do it

    // Example 1
    echo "<strong>----- Example 1 ------ </strong><br>";
    $age = 18;

    if($age >= 100){
        echo "You are too old to enter this site";
    }
    elseif($age >=18){
        echo "Ok, you can enter this site";
    }
    elseif($age < 0){
        echo "That is not a valid age, you're not even born lol !";
    }
    else{
        echo "You must be 18+ to enter this site";
    }
    echo "<br><br>";

    //Example 2
    echo "<strong>----- Example 2 ------</strong><br>";
    $adult = true;
    if($adult){ //if "true" this will be executed
        echo "You are an Adult, You can enter.";
    }
    else{ //if false this will be executed
        echo "You are NOT an Adult, you are prohibited to enter";
    }
    echo "<br><br>";

    //Example 3
    echo "<strong>----- Example 3 ------</strong><br>";
    $hours = 50;
    $rate = 15;
    $weekly_pay = null;

    if($hours <= 0){ // for invalid time
        $weekly_pay = 0;
    }
    elseif($hours <= 40){ // for normal time work wages
        $weekly_pay = $hours * $rate;
    }
    else{ // For overtime
        $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "You made <strong>\${$weekly_pay}</strong> this week.";
?>