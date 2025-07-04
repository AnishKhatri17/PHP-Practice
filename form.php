<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>
<body>
    <br><br>
    <h2>Rgistration Form in PHP</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        Name:    <input type="text" name="username"/><br>
        Address: <input type="text" name="address"/><br>
        Contact: <input type="text" name="contact"/><br>
        Gender:  <input type="radio" name="gender" value="male"/>male
                 <input type=radio name="gender" value="female"/>female <br><br>
                 <input type="submit" name="submit" value="submit" width="20px" height="20px"/>
    </form>

</body>
</html>


<?php

// Define variables first to avoid undefined warnings
$username = $address = $contact = $gender = "";

if($_SERVER["REQUEST_METHOD"]=="POST") 
    {
        //Collect value of input field
        $username = $_POST['username'] ?? "";
        $address = $_POST['address'] ?? "";
        $contact = $_POST['contact'] ?? "";
        $gender = $_POST['gender'] ?? "";
    }

    // Basic Validation
    if(empty($username) || empty($address) || empty($contact) || empty($gender)){
        echo "<br><strong style='color: red; font-size: 20px;'> Please fill all the fields!</strong><br>";
    }

    else{
        echo "<br><br><br>The entered username is : " . $username;
        echo "<br>The entered address is : " . $address;
        echo "<br>The entered contact is : " . $contact;
        echo "<br>The entered gender is : " . $gender;

    }
?>