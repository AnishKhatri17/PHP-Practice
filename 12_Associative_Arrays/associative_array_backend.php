<?php
    $capitals = array("Nepal" => "Kathmandu",
                      "USA" => "Washington D.C", 
                      "China" => "Beijing", 
                      "Japan" => "Tokyo",
                      "Sri Lanka" => "Colombo");

    if($capital = $capitals[$_POST["country"]]) {
         echo "The capital is: <strong>{$capital}</strong>";
    }

    else{
        echo "Invalid Country Name !! Please only provide the available country name in the Array !!!!!";
    }

?>
