<?php
        // function = write some code once, then reuse it when we needed
        //            type() after function name to revoke 
        //            ex: add() subtract() multiply() divide()
        
        // Example 1:
        echo "<strong>----- First Example of PHP function(): -----<br></strong>";
        function happy_birthday(){
            echo "Happy Birthday To You !🎂<br>";
            echo "Happy Birthday To You !🎂<br>";
            echo "Happy Birthday Dear You !🎉🎉🥳<br>"; 
            echo "Happy Birthday To You !🎂<br><br>"; 
        }
        happy_birthday();
        happy_birthday(); // reusing the same function (code reusability)


        // Example 2:
        echo "<br><strong>----- Second Example of PHP function() with parameters: -----<br></strong>";
        function birthday_with_parameters($name, $age){
            echo "Happy Birthday To You !!! <br>";
            echo "Happy Birthday To You !!! <br>";
            echo "Happy Birthday Dear, <strong>{$name}</strong>.<br>";
            echo "Happy Birthday To You. 🎂<br>";
            echo "You are <strong>{$age}</strong> years old.<br><br>";
        }
        birthday_with_parameters("Anish", 24);  
        birthday_with_parameters("Prajol", 23); 


        // Example 3:
        echo "<br><strong>----- Third Example of PHP function() is a number even or odd: -----<br></strong>";
        function is_even($number){
            if($number % 2 == 0){
                return "It is an <strong>EVEN</strong> Number. <br>";
            }
            else{
                return "It is an <strong>ODD</strong> Number. <br>";
            }
        }
    echo is_even(10); // Even Number
    echo is_even(13); // Odd Number 
        

        // Example 4:
        echo "<br><br><strong>----- Third Example of PHP function() finding hypotenuse: -----<br></strong>";
        function hypotenuse(float $a, float $b){
            $c = sqrt($a ** 2 + $b ** 2);
            return $c;
        }

        echo "The hypotenuse of the triangle is: " . "<strong>".hypotenuse(3, 4);
?>
