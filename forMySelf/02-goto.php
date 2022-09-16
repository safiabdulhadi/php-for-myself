<?php 
// $inputvalue = 0;
// if($inputvalue <= 0){
//     goto error_block;
// }
// exit();
// error_block:
// echo "This is a Error Block and will execute anyways";


//goto it's for break the the loop it jamp to come out of the block
// break; highliy recommmed 

for($count = 0; $count <= 10; $count++){
    if($count ==2){
        goto loop2;
    }
}
exit();
loop2:
echo "Counter Value is $count" ;
?>