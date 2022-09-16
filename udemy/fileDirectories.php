<?php


// Sample 1 : List all files in a Directory
//scandir


// $path = "TestFolder1";
// $result = scandir($path);
// var_dump($result);

echo getcwd() . "<br>";
chdir("TestFolder1");
echo getcwd();
?>