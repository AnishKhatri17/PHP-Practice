<?php
    // include() = Copies the content of a file (php/html/text)
    //             and includes it in our php file.
    //             Sections of our website become reusable
    //             Changes only need to be made in one place

   include("header.php");
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    This is the Home Page of my website<br>
    Contents about my homepage can be here...<br>
</body>
</html>

<?php
    include("footer.php");
?>

