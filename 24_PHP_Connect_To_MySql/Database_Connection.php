<?php

// This is the mysql database connectivity code.
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "laravel_todo"; // in my localhost I have this database so no issue in connection, Make sure you have the exact same name db.
    $conn = "";

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception){
        echo "Could Not Connect. <br>";
    }

    if($conn){
        echo "You are connected. <br>";
    }
?>