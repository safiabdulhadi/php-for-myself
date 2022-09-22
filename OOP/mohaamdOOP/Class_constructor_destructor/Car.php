<?php 

class Car{

public $name;
public $color;

function __construct($name, $color)
{
    $this->name = $name;
    $this->color = $color;
}


function __destruct()
{
    echo " <br/> The name of car is " . $this->name . " and the color is " .$this->color;
}



// function set_name($name){

// $this->name = $name;

//     }

// function set_color($color){
//     $this->color = $color;
// }    
// function get_name(){
//     return $this->name;
// }
// function get_color(){
//     return $this->color;
// }
function Move(){
echo $this->name . " is Moving ";
}

function Beep(){
    echo $this->name . " is Beeping";
}
}
?>