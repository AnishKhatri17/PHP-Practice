<?php
// variable = A reusable container that holds data string, integer, float, boolean

$name = "Anish Khatri";
$food = "Burger";
$email = "example123@gmail.com";

    echo "Your name is {$name} <br>";
    echo "You like to eat {$food} <br>";
    echo "Your email is {$email} <br><br>";


    echo "Learning about datatypes in PHP<br>";
    echo "<strong>Integer Datatype: <br></strong>";
    // Data Types (Integer)
    $age = 24;
    $users = 7;
    $quantity = 10;

    echo "Your age is {$age}. <br>";
    echo "There are {$users} users online. <br>";
    echo "You would like to buy {$quantity} items. <br><br>";


    // Data Types (Float)
    $gpa = 3.72;
    $price = 3.50;
    $tax_rate = 1;

    echo "<strong>Float Datatype: <br></strong>";
    echo "You have obtained {$gpa} in BCA 7th Semester. <br>";
    //echo "The price of the burger is ${$price}." // Here we can't use the $ sign directly so we use a backslash before it.
    echo "The price of the burger is \${$price} dollars. <br>";
    echo "The tax rate of your SSL Salary is {$tax_rate}%<br><br>";

    
    // Data Types (Boolean)
    echo "<strong>Boolean Datatype: <br></strong>";
    $employed = true;
    $online = true;
    $for_sale = false;
    // Boolean Variables return 1 for true and returns nothing for False
    echo "Is he employed ?: {$employed} <br>"; // Returns 1 Because the boolean value is True.   
    echo "Is my girlfriend online ?: {$online} <br>"; // Returns 1 Because the boolean value is True.
    echo "Is this house is for sale ?: {$for_sale} <br>"; // Returns empty or nothing because the boolean value is False.   
    // However, this is not how we use the boolean variables we use in loop and some if else conditions in our program.

    echo "<br>This is the actual use of the boolean variables: <br>";
    if($employed && $online){
        echo "Yes, {$name} is employed and is Online. <br>";
    }
    else if($employed && !$online){
        echo "Yes, {$name} is employed and is not Online. <br>";
    }

    else {
        echo "No, {$name} is not employed neither Online. <br>";
    }

    if($for_sale){
        echo "Yes, the house is For Sale. <br>";
    }

    else{
        echo "No, the house is NOT For Sale.<br>";
    }
?>