<?php 

class Car{

public $name;
public $color;

function set_name($name){
    // $this mean class i mean Car
$this->name = $name;

    }

function set_color($color){
    $this->color = $color;
}    
function get_name(){
    return $this->name;
}
function get_color(){
    return $this->name;
}


}
?>