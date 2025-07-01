<?php
    include("Database_Connection_Backend.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Project</title>
    <style>
        form{
            border: 5px solid black;
            width: 50%;
            margin: 0 auto; 
            height: 300px; 
            background-color: azure;
        }
        .container{
        align-items: center; 
        justify-content: center; 
        }
        h2{
           margin-left: 160px;
           margin-bottom: 30px;
        }
        label{
            background-color: lightgreen;
             margin-left: 250px;
             font-size: 18px;
        }
        input[type="text"],
        input[type="password"]{
            margin-left: 20%; 
            width: 50%;
            height: 30px;
        }
        input[type="submit"]{
            background-color: antiquewhite; 
            width: 100px; 
            height: 30px; 
            margin-left: 37%; 
            border-radius: 8px; 
            cursor: pointer; 
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <div class="container">
        <h2>Welcome to my PHP Form Project</h2>
        <label> Enter Your Username: </label><br>
        <input type="text" name="username"><br><br>
        <label>Enter Your Password:</label><br>
        <input type="password" name="password" ><br><br>
        <input type="submit" name="submit" value="Register">
        </div>
    </form> 
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
            $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

            if(empty($username)){
                echo "<br><strong>Please Enter A Username !</strong>";
            }

            elseif(empty($password)){
                echo "<br><strong>Please Enter a Password !</strong>";
            }

            else{
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (username, password) 
                        VALUES('$username', '$hash')";

                try{
                    mysqli_query($conn, $sql);
                    echo "<p style='color: green; font-weight: bold; text-align: center; font-size: 22px;'>Congratulations! You have been registered.</p>";
                }

                catch(mysqli_sql_exception){
                     echo "<p style='color: green; font-weight: bold; text-align: center; font-size: 22px;'>Sorry! The username has been already Taken, Please Try Again !!!!!</p>";
                }
            }
    }

    mysqli_close($conn); // Connection Close to save the resources
?>