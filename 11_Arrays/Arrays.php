<?php
    // array = "variable" which can hold more than one value at a time
    
    $foods = array("apple", "orange", "banana", "mango");

    // echo $fruits; // This is give an error "array to string conversion"

    echo $foods[0] . "<br>";
    echo $foods[1] . "<br>";
    echo $foods[2] . "<br>";
    echo $foods[3] . "<br>";

    // $foods[0] = "pineapple";// changing Array Element
    // array_push($foods, "pineapple", "coconut"); // This will add more than one elements in the array
    // array_pop($foods); // Thos will remove the last element of the array
    // array_shift($foods); // This will remove the first element of the array
    // $foods = array_reverse($foods); // This will reverse the array but we need to assign it to a variable to display it  

    echo "<br><br> <strong>Printing the Array Elements using foreach loop.<br></strong>";
    foreach($foods as $food){
        echo $food."<br>";
    }

    
    echo "<br> Number of elements of the array: " . count($foods);
?>