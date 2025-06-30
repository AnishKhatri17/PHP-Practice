<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session in PHP</title>
</head>
<body>
    <h2>This is the <strong>Home</strong> Page</h2><br>
    <a href="Login_Page.php">This goes to the Login Page</a><br><br>
</body>
</html>


<?php  
    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";
?>