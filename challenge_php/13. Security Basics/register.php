<?php
include("config/config.php");
include('class/user.php');

$newobj=new User($pdo);


if (isset($_POST["submit"])) {
     $name=$_POST["name"];
     $email=$_POST["email"];
     $password=$_POST["password"];
     
      if (empty($name)|| empty($email) ||empty($password)) {
         echo'empty fields';
      }else{
        $newobj->register($name,$email,$password);
        header("location:login.php");

      }
     
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
<h1>register</h1>

    <form action="" method="post">
        <input type="text" name="name" id=""><br>
        <input type="text" name="email" id=""><br>
        <input type="text" name="password" id=""><br>
        <input type="submit" name="submit" value="submit" id=""><br>
        <a href="login.php">login </a>

    </form>

</body>
</html>