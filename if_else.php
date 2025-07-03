<?php
// Write a php program to find biggest among four numbers...
echo "<br><br><strong>php program to find biggest among four numbers. </strong><br><br>" ;
 $a = 10 ;
 $b = 67 ;
 $c = 24 ;
 $d = 92 ;

 if($a>$b)
    {
        if($a>$c)
            {
                if($a>$d)
                {
                    echo "The biggest value is :".$a ;
                }
                else
                    {
                    echo "The biggest value is : ".$d ;
                    }  
            }
            else
                {
                    if($c>$d)
                        {
                            echo "The biggest value is : ".$c ;
                        }
                        else
                            {
                                echo "The biggest value is : ".$d ;
                            }
                }
    }

        else 
        {
            if($b>$c)
                {
                    if($b>$d)
                        {
                            echo "The biggest value is : ".$b ;
                        }
                        else 
                        {
                            echo "The biggest value is : ".$d ;
                        }
                }

                else
                {
                    if($c>$d)
                    {
                        echo "The biggest value is : ".$c ;
                    }
                            else 
                            {
                                echo "The biggest value is : ".$d ;
                            }
                }
        }





?>