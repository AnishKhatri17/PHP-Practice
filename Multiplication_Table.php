<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <h2>Enter a Number to Get Its Multiplication Table</h2>
    <form action="Multiplication_Table.php" method="post">
        <label for="num">Number:</label>
        <input type="number" name="num" id="num" min="1" placeholder="Enter the number"><br><br> 
        <input type="submit" value="Show Multiplication Table">
    </form>
</body>
</html>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        echo "<br><strong><h3>Multiplication Table of $num</h3></strong>";
        for ($i = 1; $i <= 10; $i++) 
        {
            echo "$num x $i = " . ($num * $i) . "<br>";
        }
    }
    ?>