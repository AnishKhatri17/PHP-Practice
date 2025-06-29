<?php
    // associative array = an array made of key=>value pair

    // countries => capitals
    // id => username
    // item => price

    $capitals = array("Nepal" => "Kathmandu",
                      "USA" => "Washington D.C", 
                      "China" => "Beijing", 
                      "Japan" => "Tokyo");

    echo $capitals["Nepal"] . "<br><br><br><strong>Displaying Key Value pairs and Capitals of Each Country: <br></strong>"; // Kathmandu 
    $capitals["USA"] = "Las Vegas"; // we can reassign the  values
    $capitals["Sri Lanka"] = "Colombo"; // we can add new key value pair to the array
    // array_pop($capitals); // This will remove the last elemnt(key and value) from the array 
    // array_shift($capitals); // This will remove the first element(key and value) from the array

    /*
    this will just display the key values
    $keys = array_keys($capitals); // this will get just the keys
    foreach($keys as $key){
        echo "{$key} <br>";

    }*/
    /*
    this will just display the values
    $values = array_values($capitals); // this will get just the values
    foreach($values as $value){
        echo "{$value} <br>";

    }*/
    /*
    this will flip the values and keys
    $flips = array_flip($capitals); // this will flip the values and keys
    foreach($flips as $key => $value){
        echo "{$key}: {$value} <br>";

    }*/
    /*
    // this will reverse the array to the buttom element to the top and vice versa
    $reverse = array_reverse($capitals);
    foreach($reverse as $key => $value){
        echo "{$key}: {$value} <br>";
    }*/


    // using for each loop to display all the key value pairs
    foreach($capitals as $key => $value){
        echo "{$key} = {$value} <br>" ;

    }
    echo "<br><br><br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array Example</title>
</head>
<body>
    <form action="associative_array_backend.php" method="post">
        <label>Enter a Country: </label>
        <input type="text" name="country">
        <input type="submit" value="submit">
    </form>
</body>
</html>