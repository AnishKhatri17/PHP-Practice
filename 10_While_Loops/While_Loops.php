<?php
    // while loop = do some code infinitely while some condition remain true. We use while loop when we don't know the number of iterations

    $counter = 0;
    while($counter < 10){
        $counter++;
        echo $counter . "<br>";
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of natural numbers using While Loop</title>
</head>
<body>
     <h2>Sum of Natural Numbers using While Loops</h2>
     <form action="while_loop_backend.php" method="post">
        <label>Enter a positive number: </label>
        <input type="number" name="number" min="1" required>
        <input type="submit" value="Calculate Sum" style="background-color: antiquewhite;">
     </form>
</body> 
</html>