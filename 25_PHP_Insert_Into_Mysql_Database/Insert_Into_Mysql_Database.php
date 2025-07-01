<?php 

// include("Database_Connection.php");  // The VS code extension is so annoying so I added the entire connection code.

// This is the mysql database connectivity code.
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "php_practice"; // in my localhost I have this database so no issue in connection, Make sure you have the exact same name db.
    $conn = "";

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception){
        echo "Could Not Connect. <br>";
    }

    if($conn){
        echo "You are connected. <br>";
    }


    // Now the below code recognizes $conn variable properly but we can comment out this whole <?php ? > and still works :-)))
?>

<?php 
    // include("Database_Connection.php"); 

    /*
    // ----- First Example -----
    // If I run this file in the browser it will insert the values in the database.
    $sql = "INSERT INTO users (username, password)
            VALUES ('Anish', 'anish@1234$')";

    mysqli_query($conn, $sql);
    */


    /*
    // ----- Second Example -----
    $username = "Rustam12";
    $password = "Rustu%1234";

    $sql = "INSERT INTO users (username, password)
            VALUES ('$username', '$password')";

    mysqli_query($conn, $sql);
    */


    // ----- Third Example (hashing the password) -----
    $username = "Ashma111";
    $password = "Ashma%123%";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password)
            VALUES ('$username', '$hash')";
            // This will insert the data with hashed password in the database !!

    try{
        mysqli_query($conn, $sql); // $conn variable is included from different file "Database_Connection.php" so extension shows warning but is not an issue :-)
        echo "<strong> A New User is added to the Database Successfully.</strong>";
    }
    catch(mysqli_sql_exception){
        echo "<strong>Failed to register the user.</strong>";
    }


    mysqli_close($conn); // This is okay not an error (not recognizing the $conn variable)
?>

