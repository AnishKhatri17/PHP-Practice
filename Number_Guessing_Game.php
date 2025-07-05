<?php
session_start();

// Okayyy Generating a random number
if (!isset($_SESSION['secret'])) 
{
   $_SESSION['secret'] = rand(1, 100);
   $_SESSION['attempts'] = 0;
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guess = (int)$_POST["guess"];
    $_SESSION['attempts']++;

    if ($guess < $_SESSION['secret']) {
        $message = "Too low! Guess Bigger Number than <strong>{$guess}</strong>.";
    } elseif ($guess > $_SESSION['secret']) {
        $message = "Too high! Guess Smaller Number than <strong>{$guess}</strong>";
    } else {
        $message = "🎉 Correct! You guessed it in {$_SESSION['attempts']} attempts.";
        session_destroy(); // Reset the game .....
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Number Guessing Game</title>
</head>
<body>
    <h1 style="color:blue;">PHP Number Guessing Game</h1>
    <h3>Guess a Number Between 1 and 100</h3>
    <form action="Number_Guessing_Game.php" method="post">
        <input type="number" name="guess" placeholder= "Guess a Number"required><br><br>
        <input type="submit" value="Guess" style="background-color: greenyellow;">
    </form>
    <p><?= $message ?></p>
</body>
</html>
