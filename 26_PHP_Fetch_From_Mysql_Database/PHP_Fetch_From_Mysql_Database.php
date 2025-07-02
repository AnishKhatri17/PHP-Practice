<?php 

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
?>

<?php
    $sql = "SELECT * FROM users WHERE username='Rustam12' "; // Just fetching a 'single' specific user.
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            echo "<br><br><strong>Extracted data from Mysql Database: </strong><br>";
            echo "Id is: " . $row['id'] . "<br>";
            echo "Username is: " . $row['username'] . "<br>";
            echo "User Registered date is: " . $row['reg_date'] . "<br>";
    }

    else{
        echo "Ooops! No user is found.";
    }

    $sql = "SELECT * FROM users"; // fetching all the users from the 'users' table
    $output = mysqli_query($conn, $sql);

    echo "<br><br><br>Extracting all data from the Mysql Database Table:  ";
    if(mysqli_num_rows($output) > 0){
           while($row = mysqli_fetch_assoc($output))
           {
            echo "<br><br><strong>Extracted data from Mysql Database: </strong><br>";
            echo "Id is: " . $row['id'] . "<br>";
            echo "Username is: " . $row['username'] . "<br>";
            echo "User Registered date is: " . $row['reg_date'] ;
           }
    }

    else{
        echo "Ooops! No user is found.";
    }
?>