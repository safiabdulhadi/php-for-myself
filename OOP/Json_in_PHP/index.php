<?php
/*
/ json like objects 

{ }
 */

$Json= '{

    "scores":{
    "mmd": 20,
    "reza" : 15,
    "khan" : 10
    },
    "students" : ["mmd", "reza", "khan"],
    "teacherName" : "abbasi"

}';
$myObject = json_decode($Json);
// var_dump($myObject);

foreach($myObject as $item){
    // var_dump($item);
    foreach($item as $values){
        // var_dump($values);
        echo $values . "<br/>";
    }
}


?>