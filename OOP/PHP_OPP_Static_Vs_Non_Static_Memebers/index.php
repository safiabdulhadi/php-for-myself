<?php


class Student{

    public static $name = "Ahmad <br/>";
    public static function getName(){
        return self::$name;
    }
}

echo Student::$name;

echo Student::getName();

?> 