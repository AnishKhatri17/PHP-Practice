<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page with storing in Session</title>
</head>
<body>
    <h2>Login Page in php with Session</h2>
    <form action="Second_Example_Login.php" method="post">
        <label>Enter Your Username: </label><br>
        <input type="text" name="username"><br>
        <label>Enter Your Password: </label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="login" value="Log In" style="background-color: antiquewhite; border-radius: 8px;">
    </form>
</body>
</html>

<?php
    if(isset($_POST["login"])){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){

            //storing the form data in the SESSION Variables...
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            // echo $_SESSION["username"] . "<br>";
            // echo $_SESSION["password"] . "<br>";

            header("Location: Second_Example_Home.php");
        }

        else{
            echo "Missing username/password !!!!!<br>";
        }
    }
?>