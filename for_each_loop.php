<?php
//Php program to demonstrate For Each Loop .........

echo "<br><strong>PHP Program to display the elements of an Array using for each loop: </strong><br>";
$fruits = array("Mango","Apple","Watermelon","Papaya","Banana") ;
foreach($fruits as $result)
{
    echo $result."<br>" ;
}
echo "<br><br>" ;
?>

<?php
// USing => operator in foreach loop (also known as key value pair)...
    echo "<strong>Displaying a key and value pair using foreach loop: </strong><br><br>";
    $student = array("name&nbsp;"=>"Anish Khatri", "address&nbsp;"=>"Kathmandu", "education&nbsp;"=>"BCA 4th semester");
    foreach($student as $result=> $output) // $result hold the 'key' and $output holds the 'value'
    {
        echo ucfirst($result)."is : ".$output."<br>" ; // usfirst() makes the 'first letter Uppercase'
    }


?>