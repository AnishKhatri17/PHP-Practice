<?php
    // cookie = Information about a user stored in a user's web-browser
    //          targeted advertisements, browsing preferences and
    //          other non sensitive data

    // Here the first argument is "key" and second is "value"
    // Third argument is expiration time
    // (86400 * 2) means expires after 2 days
    // Last one is the file path "/"
    setcookie("fav_food", "burger", time() + (86400 * 2), "/");
    setcookie("fav_drink", "coffee", time() + (86400 * 3), "/");
    setcookie("fav_dessert", "ice cream", time() + (86400 * 4), "/");

    // To delete a cookie time() - 0
    // setcookie("fav_food", "burger", time() - 0, "/");
    // setcookie("fav_drink", "coffee", time() - 0, "/");
    // setcookie("fav_dessert", "ice cream", time() - 0, "/");

    // Displaying the key and value of the COOKIE\
    echo "<br><br> Displaying the Key and Value of the COOKIES: <br>";
    foreach($_COOKIE as $key => $value){
        echo "{$key} : {$value} <br>";
    }

    echo "<br><br><strong>Displaying an Advertisement</strong><br>";
    if(isset($_COOKIE["fav_food"])){
        echo "BUT SOME {$_COOKIE["fav_food"]}";
    }

    else{
        echo "I don't know your favourite food";
    }
?>