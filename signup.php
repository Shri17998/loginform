<?php
if(isset($_POST['submit']))
{
    include 'config.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];

    $checkuname=mysqli_query($conn,"SELECT * FROM users WHERE username='".$username."';");
    $row=mysqli_fetch_array($checkuname);
    print_r($row);
    if(is_array($row)){
        echo"<script>window.alert('username already exists');</script>";
    }
    else{
        echo "<script>window.alert('triggerers');</scipt>";
        $query="INSERT INTO users (username,password,email)
        VALUES ('$username','$password','$email')";
        mysqli_query($conn,$query);
        header("Location: login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
</head>
<body>
<form action="" method="POST">
    USERNAME:<input type="text" name="username">
    EMAIL:<input type="email" name="email" >
        PASSWORD:<input type="password" name="password">
        <input type="submit" name="submit">
    </form>
</body>
</html>