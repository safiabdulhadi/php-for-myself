<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'safi';
// error_reporting(0);
// mysqli_report(MYSQLI_REPORT_STRICT);

try{
    
    $con = new mysqli($servername, $username, $password, $database);
    echo "Connection Successfull.";


$sql = "SELECT * FROM products";
$exec = $con->query($sql);

echo "<pre>";
print_r($exec);

} catch(Exception $ex){
    echo " Connection Failed: " . $ex->getMessage(); 
}
?>