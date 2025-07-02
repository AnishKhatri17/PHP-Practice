<?php
class employee
{
    public $name;
    public $age;
    public $salary;
    function work()
    {
        // echo this->.$name."is working" ;
    }
}

$obj1 = new employee();
$obj1->name="Rustam" ;
$obj1->age= 19 ;
$obj1->salary= 200000;

$obj2 = new employee();
$obj2->name="Anish" ;
$obj2->age= 22 ;
$obj2->salary= 150000;

$obj3 = new employee();
$obj3->name="Saroj" ;
$obj3->age= 44 ;
$obj3->salary= 180000;

$obj1->work();
print_r($obj1);
echo("<br>") ;
print_r($obj2);
echo("<br>") ;
print_r($obj3);
echo("<br>");
?>