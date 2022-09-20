<?php 

Class Student {

public $id;
public $name;
public $age;

// this function or method work in both  
public function speak(){
    echo "$this->name speaking ....";
}
}

// we will also inheritance with help of EXTENDS extends
// we will take proerties and methods from Students
// will add to the theacher class 

// Teacher is the child of Student 
// Student is the parent
class Teacher extends Student{

    // we don't need to write it down because we all ready have it on this properties on the sudents
// if i copy and paste it will be doblicate the the codes we will extends 
    // public $id;
    // public $name;
    // public $age;

    // This is the beauti of object oranties
    public $salary;
}


$t1 = new Teacher();

$t1->id = "T1-100";
$t1->name = "hashmi";
$t1->age = 40;
$t1->salary = 2000;

echo "Name : " . $t1->name . "<br/>";
echo "ID : " . $t1->id . "<br/>";
echo "Age : " . $t1->age . "<br/>";
echo "Salary : " . $t1->salary . "<br/>";
$t1->speak();



$st1 = new Student();
$st1 -> name = "Ahamd";
$st1 -> age = 25;
$st1 -> id = "CS-193";

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "Name :" .$st1->name . "<br/>";
echo "Age : " .$st1->age . "<br/>";
echo "Id : " . $st1->id . "<br/>";
echo "<br/>";
$st1->speak();

?>