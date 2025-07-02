<?php
    $username = "Anish Khatri";
    $phone = "123-456-7890";

    $username_arr = array("Anish", "de Villiers", "Khatri");

    // echo $username;
    $lower = strtolower($username);
    $upper = strtoupper($username);
    $trim = trim($username); // removes all the extra whitespaces
    $padding = str_pad($username, 20, "-"); // padd or add upto 20 as "-"
    $replace = str_replace("-", ",", $phone); // replaced "-" to ","
    $reverse = strrev($username); // this will reverse the string
    $shuffle = str_shuffle($username); // this will shuffle and give random after each load
    $equals = strcmp($username, "Anish Khatri"); // compares the string if matches then 0 otherwise -1
    $count = strlen($phone); // gives the length of the string
    $position = strpos($username, "K"); // K is at position "6"
    $firstname = substr($username, 0, 5); // gives substring from index 0 to 5
    $lastname = substr($username, 6); // gives reamining substring from 6 and the rest
    $username = implode("-", $username_arr); // merging strings from an array


    echo "<h2>String Functions in PHP</h2>";
    echo "String to lowercase is: " . $lower . "<br>";
    echo "String to uppercase is: " . $upper . "<br>";
    echo "String after using Trim() is: " . $trim . "<br>";
    echo "String after using pad() is: " . $padding . "<br>";
    echo "String after using replace() is: " . $replace . "<br>";
    echo "String after using strrev() is: " . $reverse . "<br>";
    echo "String after using str_shuffle() is: " . $shuffle . "<br>";
    echo "String after using strcmp() is: " . $equals . " ,0 means string matched !<br>";
    echo "String after using strlen() is: " . $count . "<br>";
    echo "String after using strpos() is: " . $position . "<br>";
    echo "String after using substr() is: " . $firstname . "<br>";
    echo "String after using substr() is: " . $lastname . "<br>";
    echo $username;

?>