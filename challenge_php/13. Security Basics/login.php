<?php
include("config/config.php");
include('class/user.php');

session_start();
$newLog=new User($pdo);


if (isset($_POST["submit"])) {
    $email=$_POST["email"];
    $password=$_POST["password"];

   $newLog->login($email,$password);
} else {
echo 'error';
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>login</h1>
    <form action="" method="post">
        <input type="text" name="email" id=""><br>
        <input type="text" name="password" id=""><br>
        <input type="submit" name="submit" value="submit" id=""><br>
        <a href="register.php">register </a>


    </form>
</body>
</html>