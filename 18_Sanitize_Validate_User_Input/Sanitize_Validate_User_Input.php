<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize and Validate the User Input</title>
</head>
<body>
    <h2>Sanitize and Validate User Input</h2>
    <form action="Sanitize_Validate_User_Input.php" method="post">
        <label>Enter Username: </label><br>
        <input type="text" name="username" required><br>
         <label>Enter Age: </label><br>
        <input type="text" name="age" required><br>
         <label>Enter Email: </label><br>
        <input type="text" name="email" required><br><br>
        <input type="submit" name="login" value="Log In">
    </form>
</body>
</html>

<?php
/*
    echo "<br><br>";
     if(isset($_POST["login"])){
        $username = $_POST["username"];
        $age = $_POST["age"];
        $email = $_POST["email"];

        echo "Hello, " . $username. "<br>";
        echo "You are {$age} years old. <br>";
        echo "Your email is {$email}. <br>";

        // This code is just okay but user can give malicious input like a script to inject a virus so validation is ver important.
        // Here are the validation code :
     }
*/

     echo "<br><br>";
     if(isset($_POST["login"])){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        echo "Hello, " . $username. "<br>";
        echo "You are {$age} years old. <br>";
        echo "Your email is {$email}. <br><br>";

        // VALIDATION CHECK :
        echo "<strong>Validation Check: <br></strong>";
        $username = filter_input(INPUT_POST, "username", FILTER_VALIDATE_FLOAT); // JUST ENTER A FLOAT VALUE FOR NOW. 
        // PHP DOESN'T HAVE BUILT-IN FIKTER VALIDATE FOR ALPHABETIC-ONLY STRING !!!
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        if(empty($username)){
            echo "The username is not valid.<br>";
        }
        else {
            echo "Hellloooo, {$username}.<br>";
        }

        if(empty($age)){
            echo "The age is not valid.<br>";
        }
        else {
            echo "Your age is {$age}.<br>";
        }

        if(empty($email)){
            echo "Your email is not valid.<br>";
        }
        else{
            echo "Your email is {$email}.<br>";
        }
     }

?>