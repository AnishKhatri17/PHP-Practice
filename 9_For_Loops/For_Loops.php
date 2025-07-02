<?php 
    // for loop = repeat some code a certain number of times. Useful when we know how many number of times we want to run the loop.

    // Example 1: (Printing Hello Anish 5 times using for loop)
    echo "<strong>First Example of for loop: </strong><br>";
    for($i = 0; $i < 5; $i++){
        echo "Hello, Anish <br>";
    }
    echo "<br><br>";


    // Example 2: (Printing 1 to 10 using for loop)
    echo "<strong>Second Example of for loop (Printing numbers from 1 to 10): </strong><br>";
    for($i = 1; $i <= 10; $i++){
        echo "{$i} <br>";
    }
    echo "<br><br>";


    // Example 3: (Printing even numbers from 1 to 20 using for loop)
    echo "<strong>Third Example of for loop (Even numbers from 1 to 20): </strong><br>";
    for($i = 2; $i <= 20; $i+=2){
        echo "{$i} <br>";
    }
    echo "<br><br>";


    // Example 4: (Printing even numbers from 1 to 20 using for loop)
    echo "<strong>Fourth Example of for loop (Decrementing numbers from 5 to 1): </strong><br>";
    for($i = 5; $i > 0; $i--){
        echo "{$i} <br>";
    }
    echo "<br><br>";


    // Example 5: (Sum of number from 1 to 20 using for loop)
    echo "<strong>Fourth Example of for loop (Sum of natural numbers from 1 to 20): </strong><br>";
    $sum = 0;
    for($i=1; $i<=20; $i++){
        $sum = $sum + $i;
    }
    echo "The sum of natural numbers from 1 to 20 is: <strong>{$sum}</strong>";
    echo "<br><br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop Example</title>
</head>
<body>
    <form action="for_loop_backend.php" method="post">
        <label>Enter a number to count to: </label><br>
        <input type="text" name="counter"><br>
        <input type="submit" value="Let's Count" style="background-color: antiquewhite;">
    </form> 
</body>
</html>
<br><br>

<!-- Second Html Form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second HTML Form</title>
</head>
<body>
    <form action="for_loop_backend_2.php" method="post"> 
        <label>Enter +ve number to find the sum of Natural Numbers: </label><br>
        <input type="text" name="number"><br>
        <input type="submit" value="Sum of Natural Numbers" style="background-color: antiquewhite;">
    </form>
</body>
</html>