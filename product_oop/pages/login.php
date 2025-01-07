<?php
include('../config/config.php');
include('../class/user.php');
session_start();

$newlog=new User($pdo);

if (isset($_POST['submit'])) {
    $password=$_POST["password"];
    $email=$_POST["email"];

    $newlog->login($email,$password);

} else {
    echo "error";
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

<form action="" method="post" >
    <input type="text" name="email" id=""><br>
    <input type="password" name="password" id=""><br>

    <input type="submit" name="submit" id="">
</form>

<a href="register.php">register</a>

</body>
</html>