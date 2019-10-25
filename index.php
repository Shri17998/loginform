<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location:login.php");

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
    <h1><?php print_r($_SESSION);?></h1>
    <a href="logout.php">LOGOUT</a>
</body>
</html>