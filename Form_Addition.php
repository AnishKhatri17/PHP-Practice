
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition of two numbers using a Form</title>
</head>
<body>
    <h2>Addition of Two numbers in PHP using HTML form</h2><br>
    <form action="Form_Addition.php" method="post">
    Number 1: <input type="number" name="num1"><br>
    Number 2: <input type="number" name="num2"><br>
    <input type="submit" value="Add">
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["num1"];
    $b = $_POST["num2"];
    $sum = $a + $b;
    echo "<br><br>The Sum of two numbers is : $sum";
}
?>
