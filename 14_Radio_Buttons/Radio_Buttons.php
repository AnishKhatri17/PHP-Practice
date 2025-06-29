<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Buttons in PHP</title>
</head>
<body>
    <h2>Radio Buttons in PHP</h2>
    <form action="radio_buttons.php" method="post">
        <input type="radio" name="credit_card" value="Visa"> Visa<br>
        <input type="radio" name="credit_card" value="Mastercard"> Mastercard<br>
        <input type="radio" name="credit_card" value="American Express"> American Express<br><br>
        <input type="submit" value="confirm" name="confirm" style="background-color: antiquewhite;">
    </form>
</body>
</html>

<?php
echo "<br>";

    if(isset($_POST["confirm"])){

        $credit_card = null;

        if(isset($_POST["credit_card"])){
                $credit_card = $_POST["credit_card"];
                // echo $credit_card;
        }

        // if($credit_card == "Visa"){
        //     echo "You seleced Visa.";
        // }

        // elseif($credit_card == "Mastercard"){
        //     echo "You selected Mastercard.";
        // }

        // elseif($credit_card == "American Express"){
        //     echo "You selected American Express.";
        // }
        // else{
        //     echo "Credit Card is not selected !!!";
        // }


        // Alternative way using switch case
        switch($credit_card){
            case "Visa":
                echo "You selected Visa...";
                break;

            case "Mastercard":
                echo "You selected Mastercard...";
                break;

            case "American Express":
                echo "You selected American Express...";
                break;

            default:
                echo "Credit card is not Selected !!!";
                break;
        } // end of switch statement
      
    }
?>