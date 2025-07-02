<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVER Super Global Variable in PHP</title>
</head>
<body>
    <h2>Using SERVER Super Global Variable</h2>
    <!-- Form action used to target in this same file despite the file name -->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <label>Enter Your Username</label>
        <input type="text" name="username"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
    // $_SERVER = SGB that contains headers, paths and script locations.
    //            The entries in this array are created by the web server.
    //            Shows nearly everything you need to know about the current web page env.

    /*
    // This will print everything about the server...
    foreach($_SERVER as $key => $value){
        echo "{$key} = {$value} <br>";
    }
    */
    echo "<br><br>";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "Hello Friend.";
    }
?>