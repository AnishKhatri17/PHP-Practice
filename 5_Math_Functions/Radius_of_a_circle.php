<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circumference of a Circle</title>
</head>
<body>
    <form action="Radius_of_a_circle.php" method="post">
        <label>Radius: </label>
        <input type="text" name="radius">
        <input type="submit" value="Calculate">
    </form><br>
</body>
</html>

<?php
    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;
    $volume = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);
    $area = pi() * pow($radius, 2);
    $area = round($area, 2);
    $volume = 4/3 * pi() * pow($radius, 3);
    $volume =round($volume, 2);

    echo "Circumference of a circle is <strong>{$circumference}cm</strong> <br>";
    echo "Area of a cricle is <strong>{$area}cm^2</strong><br>";
    echo "Volume of a cricle is <strong>{$volume}cm^3</strong><br>";

?>