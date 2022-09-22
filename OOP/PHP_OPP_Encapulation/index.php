<?php 

Class Student {
private $id;
protected $name;
private $age;

public function setName($n){
$this->name = $n;
}
public function getName(){
    return $this->name;
}


public function setId($id){
    $this->id = $id;
}

public function setAge($age){
$this->age = $age;
}

public function getId(){
    return $this->id;
}
public function getAge(){
    return $this->age;
}


public function speak(){
    echo "$this->name speaking ....";
    }
}

class Teacher extends Student{
    public $salary;
    public function walk(){
        echo $this->name . " is waking";
    }
}





$t1 = new Teacher();

$t1->setId(id :"T1-100");
$t1->setName(n: "Ahmad wali");

$t1->setAge(age: "35");
$t1->salary = 2000;


echo "Name :" . $t1->getName(). "<br/>";
echo "ID : " . $t1->getId() . "<br/>";
echo "Age : " . $t1->getAge() . "<br/>";
echo "Salary : " . $t1->salary . "<br/>";
$t1->speak();
echo "<br/>";
$t1->walk();

echo "<br/> --------------------------------------------------------";

$st1 = new Student();
$st1->setName(n:"Ahmad");
$st1 ->setAge(age: "45");
$st1 ->setId(id:"CS-193") ;

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "Name : " . $st1->getName();
echo "Age : " .$st1->getAge() . "<br/>";
echo "Id : " . $st1->getId() . "<br/>";
echo "<br/>";
$st1->speak();

?>