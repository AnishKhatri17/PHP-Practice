<?php
    // Logical Operators = combine conditional statements
    // if(condition1 && condition2)

    // && = True if both the conditions are True
    // || = True if at lease one condition is True
    // !  = True if false. False is true

    // Example 1
    $temp = 30; // weather is good for 30 degrees
    $temperature = 5;
    $cloudy = true;
    // Example of && operator
    if($temp >= 0 && $temp <= 30){
        echo "The Temperature is good.🌞";
    }
    else {
        echo "The weather is bad !😶‍🌫️";
    }

    echo "<br><br>";
    // Example of || operator
    if($temperature <= 0 || $temperature <= 5){
        echo "It is Winter and Temperature is very cold.🥶";
    }
    else{
        echo "It is not Winter and Temperature is Hot. 🌞";
    }

    echo "<br><br>";
    // Example of ! operator
    if(!$cloudy){
        echo "It is cloudy weather ⛅";
    }
    else{
        echo "It is NOT cloudy. 🌦️";
    }

    echo "<br><br>";
    echo "<strong>----- Example 2 -----</strong><br>";
    //Example 2:
    $age = 101;
    $citizen_of_Nepal = true;

    if($age >=18 && $age <= 100 && $citizen_of_Nepal){
        echo "You are a valid citizen of Nepal and Age. You can Vote.";
    }
   
    else{
        echo "Opps, you cannot vote !!!";
    }


    echo "<br><br>";
    echo "<strong>----- Example 3 -----</strong><br>";
    //Example 3:
    $child = false;
    $senior = true;
    $ticket = null;

    if($child || $senior){ // if either one of the condition is TRUE this will execute
        $ticket = 10;
        echo "The price of your ticket is: Rs.{$ticket}";
    }

    else{
        $ticket = 15;
        echo "The price of your ticket is: Rs.{$ticket}";
    }
?>