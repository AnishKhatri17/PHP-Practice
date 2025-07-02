<?php
    // session = SGB(Super Global Variable) used to store information on a user
    //           to be used across multiple pages.
    //           A user is assigned a session-id
    //           example: login credentials

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
    <h2>This is the <strong>Login</strong> Page</h2><br>
    <a href="Home.php">This goes to the Homepage</a><br><br>
</body>
</html>

<?php
    $_SESSION["username"] = "Anish Khatri";
    $_SESSION["password"] = "anish@123#";

    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";
?>