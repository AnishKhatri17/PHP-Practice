<?php
    // isset() = Return TRUE if a variable is declared and not null
    // empty() = Return TRUE if a variable is not declared, false, null, "" 


    // Example 1 (for isset() function)
    echo "<strong>Using isset() function Example in PHP</strong><br>";
    $username = "Anish Khatri"; // this is set
    // $username = ""; // this is set
    // $username = true; // this is set
    // $username = false; // this is set

    // $username = null; // not set
    // echo isset($username); // this will return nothing and is not ISSET

    if(isset($username)){
        echo "The username is SET.<br>";
    }
    else{
        echo "The username is NOT SET.<br>";
    }

    
    // Example 2 (for empty() function)
    echo "<br><br>";
    echo "<strong>Using empty() function Example in PHP</strong><br>";
    $name = null; // empty
    // $name = false; // empty
    // $name = true; // not empty
    // $name = ""; // empty
    if(empty($name)){
        echo "The variable is Empty !<br>";
    }
    else{
        echo "The variable is NOT empty !<br>";
    }

        echo "<br><br><br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset() and empty() functions in PHP Example</title>
</head>
<body>
    <h2 style="text-align: center;">User Login Form</h2>
    <form action ="isset_and_empty.php" method="post" style="width: 40%; margin: 0 auto;">
        <label>Enter Username: </label>
        <input type="text" name="username"><br><br>
        <label>Enter Password: </label>
        <input type="password" name="password"><br><br>
        <input type="submit" name="login" value="Log In" style="background-color:aquamarine; width: 100px; height:25px;">
    </form>
</body>
</html>

<?php 

    foreach($_POST as $key => $value){
        echo "{$key} = {$value} <br>";
    }

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo "The Username is missing !";
        }
        elseif(empty($password)){
            echo "The Password is missing !";
        }
        else{
            echo "<br><br>Hello <strong>{$username}</strong>";
        }
    }

?>