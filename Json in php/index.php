<?php

// $Json = '{
//     "scores" : {
//         "abdulhadi" 20,
//         "reza": 15,
//         "ali" : 30
//     },
//     "student" : ["abdulhadi", "reza", "ali"],
//     "teacherName" : "abbasi"
// }';


// json_decode($Json);
// $myObject = json_decode($Json);

// var_dump($myObject);


// foreach($myObject as $item){
// foreach($item as $value){
//     var_dump($value);
// }
// }




$myArray = array("abdulhadi"=> 20 , "reza"=>15, "ali"=>30);

echo json_decode($myArray);



/*

{}
*/
?>