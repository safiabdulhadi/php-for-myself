<?php 
// $marks = 87;
// echo $marks;


// String to Integer Addition
// $marks = 10;
//  $total = $marks + 20;

//  echo $total;


function checkUserRoles($userRoles){

if( empty($userRoles) ){
    echo "Roles cannot be empty! " . PHP_EOL;
    return;
}


    // Do not execute this code when $userRoles is empty
switch($userRoles){
    case "Admin":
        echo "Hello Admin !" . PHP_EOL;
        break;
        case "Editor":
            echo "Hello Editor !" . PHP_EOL;
            break;
            default:
            echo "Roles is Empty!";
}

}

checkUserRoles("Admin");
checkUserRoles("Editor");
checkUserRoles("");