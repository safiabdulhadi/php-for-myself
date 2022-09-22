<?php 
Class Student {

public $id;
protected $name;
public $age;

public function setName($n){
$this->name = $n;
}
public function getName(){
    return $this->name;
}

public function speak(){
    echo "$this->name speaking ....";
}
}

class Teacher extends Student {
    public $salary;
    public function walk(){
        echo "<br/>" . $this->name . " is  waking";
    }

}




$t1 = new Teacher();

$t1->id = "T1-100";
$t1->age = 40;
$t1->salary = 2000;
$t1->setName(n: "Ahamd" );
echo "Name: ".  $t1->getName();
echo "<br/>";
echo "ID : " . $t1->id . "<br/>";
echo "Age : " . $t1->age . "<br/>";
echo "Salary : " . $t1->salary . "<br/>";
$t1->speak();
$t1->walk();

echo "<br/> ---------------------------------<br/>";

$st1 = new Student();
$st1->setName(n:"Ahmad");
$st1 -> age = 25;
$st1 -> id = "CS-193";
echo "<br/>";
echo "Name : " . $st1->getName();
echo "<br/>";
echo "Age : " .$st1->age . "<br/>";
echo "Id : " . $st1->id . "<br/>";
$st1->speak();
echo "<br/> ---------------------------------<br/>";




?>