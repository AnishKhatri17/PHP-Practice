<?php
    // hashing = transforming sensitive data (password)
    //           into letters, numbers, and/or symbols
    //           via a mathematical process. (similar to encryption)
    //           Hides the original data from 3rd parties access !

    $password = "anish#123";

    $hash = password_hash($password, PASSWORD_DEFAULT);
    // echo $hash;

    // password_verify() this function is used to see the password
    if(password_verify("anish#123", $hash)){
        echo "You are logged in !";
    }

    else{
        echo "You are NOT logged in !";
    }
?>