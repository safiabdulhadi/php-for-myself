<?php 

Class Student {
private $id;
private $name;
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

public function save(){
$this->makeConnection();
$this->validate();
$this->inserData();
}

private function makeConnection(){
    // database connection

}

private function inserData(){
    // insertion

}
private function validate(){
    // validation

}


}




$st1 = new Student();
$st1 ->setId(id:"CS-193") ;
$st1->setName(n:"Ahmad");
$st1 ->setAge(age: "45");
$st1->save();

echo "<br/>";

echo "Id : " . $st1->getId() . "<br/>";
echo "Name : " . $st1->getName() . "<br/>";
echo "Age : " .$st1->getAge() . "<br/>";


?>