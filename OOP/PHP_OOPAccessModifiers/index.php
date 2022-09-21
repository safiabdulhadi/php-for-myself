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


 
    public $salary;
    public function walk(){
        echo $this->name . "is waking";
    }
}





$t1 = new Teacher();

$t1->id = "T1-100";
$t1->age = 40;
$t1->salary = 2000;



echo "ID : " . $t1->id . "<br/>";
echo "Age : " . $t1->age . "<br/>";
echo "Salary : " . $t1->salary . "<br/>";
$t1->speak();
$t1->walk();



$st1 = new Student();
$st1->setName(n:"Ahmad");
$st1 -> age = 25;
$st1 -> id = "CS-193";

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "Name : " . $st1->getName();
echo "Age : " .$st1->age . "<br/>";
echo "Id : " . $st1->id . "<br/>";
echo "<br/>";
$st1->speak();
$st1->walk();







?>