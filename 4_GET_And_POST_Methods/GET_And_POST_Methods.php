<?php 
    /*  
        $_GET, $_POST = special variables used to collect data from an HTML form data is sent to the file in the action attribute of <form>
        <form action= "some.file.php" method ="get">
    */
    /*
        $_GET = Data is appended to the url
                NOT SECURE
                chat limit
                Bookmark is possible w/ values
                GET request can be cached
                Better for a search page
    */
    /*
        $_POST = Data is packaged inside the body of the HTTP request
                 MORE SECURE
                 No data limit
                 Cannot bookmark
                 GET requests are not cached
                 Better for submitting credentials
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET and POST Methods</title>
</head>
<body>
    <form action="GET_AND_POST_Methods.php" method="POST">
    <label>Username:</label><br>
    <input type="text" name="username"><br><br>
    <label>Password:</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Log in"><br>
    </form>
</body>
</html>

<?php
    /*
    echo "{$_GET["username"]} <br>"; // Different ways of line break in PHP
    echo $_GET["password"]. "<br>";
    // By using the $_GET method we are appending the credentials in the URL which is not secure, so if it is for security reasons we use the $_POST Method.
    */
    echo $_POST["username"] . "<br>";
    echo $_POST["password"] . "<br>";
?>

