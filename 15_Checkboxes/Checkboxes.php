<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes in PHP</title>
</head>
<body>
    <h2>Checkboxes in PHP (Tick The foods you like and click submit)</h2>
    <form action="Checkboxes.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">  Pizza<br>
        <input type="checkbox" name="hamburger" value="Hamburger">  Hamburger<br>
        <input type="checkbox" name="hotdog" value="Hotdog">  Hotdog<br>
        <input type="checkbox" name="taco" value="Taco">  Taco<br><br>
        <input type="submit" name="submit" value="Submit"><br>
    </form>
</body>
</html>

<?php
    echo "<br><br>";

        if(isset($_POST["submit"])){

            if(isset($_POST["pizza"])){
                echo "You like pizza. <br>";
            } 
            if(isset($_POST["hamburger"])){
                echo "You like Hamburger. <br>";
            }
            if(isset($_POST["hotdog"])){
                echo "You like Hotdog. <br>";
            }
            if(isset($_POST["taco"])){
                echo "You like Taco. <br>";
            }

            // using empty() to display the unchecked foods as dislike.
            echo "<br>";
             if(empty($_POST["pizza"])){
                echo "You Don't like pizza. <br>";
            } 
            if(empty($_POST["hamburger"])){
                echo "You Don't like Hamburger. <br>";
            }
            if(empty($_POST["hotdog"])){
                echo "You Don't like Hotdog. <br>";
            }
            if(empty($_POST["taco"])){
                echo "You Don't like Taco. <br>";
            }

        }

?>