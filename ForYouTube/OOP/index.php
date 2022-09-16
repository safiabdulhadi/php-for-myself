<?php

Class Student{
    public $id = "CS-90";
    public $name = "Ahmad";
    public $age = 20;
}

$st1 = new Student();

echo $st1->name;
echo "<br>";
echo $st1->id;
echo "<br>";
echo $st1->age;

?>