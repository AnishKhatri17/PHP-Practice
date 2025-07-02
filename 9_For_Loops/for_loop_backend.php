<?php
    $counter = $_POST["counter"]; // getting the counter value from the html form
    
    for($i = 1; $i <= $counter; $i++){
        echo "{$i} <br>";
    }
?>

