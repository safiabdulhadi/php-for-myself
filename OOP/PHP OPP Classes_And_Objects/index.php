<?php 

Class Student {

    // 3 properties // like varaible Or key

    //These 3 properties will be null by default nothing will be store 
public $id;
public $name;
public $age;


// We can create the behivers with the function 
public function speak(){    // This function for the person behiver talk walk etc...
// to target the the class have to use $this key
    // $this keyword pacifie the object Student i mean the Class
// $this we can access the properties of objects
    echo $this->name . " is Speaking English and French....";
} 


// public $id = "CS-90";
// public $name = "Ahmad";
// public $age = 28;

}

// To create objects
// objects of Class Student
$obj_st1 = new Student();

//This is a values for properties on the top i give them here
// I set values on my objc class
$obj_st1->name = "Abdulhadi";
$obj_st1->age = 20;
$obj_st1->id = "cs-100";


echo "<br/>";



// name of property to see in the screen echo
// This to call it on the screen to display in fact 
echo "Name: ".  $obj_st1 ->name .'<br/>';
// echo gettype($obj_st1->name) .'<br/>';  will get the values NULL 
echo "Id: "  . $obj_st1 ->id .'<br/>' ;
echo "Age " . $obj_st1->age;
echo "<br/>";
// For calling the method speak(); 
$obj_st1->speak();
echo '<br/>';

echo "--------------------------------- <br/>";
$st2 = new Student();

$st2->name =' SAfI Abdulhadi';
$st2->age = ' 25';
$st2->id = 'CSS -90';

echo "Name :" . $st2->name . '<br/>';
echo 'Your Id Number: ' . $st2->id . '<br/>';
echo "Your Age : " . $st2->age . '<br/>';
// For calling the method of speak(); 
$st2->speak();


?>