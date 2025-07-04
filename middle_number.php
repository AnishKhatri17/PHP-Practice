<?php
// Php program to find middle number among three numbers ....
echo "<br><strong>Php program to find middle number among three numbers.</strong>";
echo "<br><br><br>" ;

$a = 150 ;
$b = 190 ;
$c = 250 ;

if((($a>$b) && ($a<$c)) || (($a<$b) && ($a>$c)))
    {
        echo "The middle number is : ".$a ;
    }

    else if((($b>$c) && ($b<$a)) || (($b<$c) && ($b>$a))) 
        {
            echo "The middle number is : ".$b ;
        }

            else if((($c>$a) && ($c<$b)) || (($c<$a) && ($c>$b)))
            {
                    echo "The middle number is :".$c ;
            }

            else
            {
                echo "The case doesn't exist !!!!!" ;
            }
                
             
?>
