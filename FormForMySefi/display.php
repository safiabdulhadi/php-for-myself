<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms -POST</title>
</head>
<body>
<h1>Form - POST</h1>
<a href="Student-Form.html">Back to Home</a>
<?php 

// var_dump($_GET);
// $name = $_GET['input_text'];
// $email = $_GET['input_email'];
// echo "Name:$name and Email :$email";


$name = $_POST['input_text'];
$email = $_POST['input_email'];
echo "Name:$name and Email :$email";


?>
</body>
</html>

