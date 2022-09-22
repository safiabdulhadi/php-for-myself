<?php 

require_once("Car.php");

$myCar = new Car(name:"pride", color:"green");

// $myCar->set_Name(name: "BMW");

// $myCar->set_color(color:"black");

// echo $myCar->get_name();
// echo "<br/>";
// echo $myCar->get_color();
echo "<br/>";
echo $myCar->Move();


$myCar2 = new Car(name: "audi", color:"balck");

// $myCar2->set_name(name:"Audi");
// $myCar2->set_color(color:"white");

// echo "<br/> ----------------------";
// echo "<br/>";
// echo $myCar2->get_name();
// echo "<br/>";
// echo $myCar2->get_color();
// echo "<br/>";
echo $myCar2->Beep();

?>