<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage of Session in Php</title>
</head>
<body>
    <h2>Home Page of php with Session</h2>
    <form action="Second_Example_Home.php" method="post">
        <input type="submit" name="logout" value="logout" style="background-color: red; border-radius: 8px;">
    </form>
</body>
</html>

<?php
    echo "<br><br><strong>Extracting form values from Session Variables: </strong><br>";
    echo "Extracted from Session, Username is: " . $_SESSION["username"] . "<br>";
    echo "Extracted from Session, Password is: " . $_SESSION["password"] . "<br>";

    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: Second_Example_Login.php");
    }
?>