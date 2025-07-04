<?php
$email = "anish@example.com";
echo "<h2>PHP Email Validation Example</h2><br>";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
    echo "<strong>$email</strong> is a valid email address.";
} 

else {
    echo "<strong>$email</strong> is not valid.";
}
?>
