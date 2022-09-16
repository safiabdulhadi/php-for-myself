<?php 
session_start();

echo session_save_path();
echo "<br>";
echo session_name();
echo "<br>";
$_SESSION["fav_car"] = "BMW";
$_SESSION["fav_place"] = "Lille";
$_SESSION["user_id"] = 12334;
echo "<br>";
echo "<hr>";
echo "My favorite car is " . $_SESSION["fav_car"];
echo "<br>";
echo "<hr>";
echo "My favorite place is " . $_SESSION["fav_place"];
echo "<br>";
echo "<hr>";
echo "My id number " . $_SESSION["user_id"];
echo "<hr>";
echo "<br>";
unset($_SESSION["user_id"]);
echo "My id number " . $_SESSION["user_id"];
echo "<hr>";
echo "<br>";
session_destroy();

echo "<pre>";
print_r($_SESSION);
echo "</pre>";




?>