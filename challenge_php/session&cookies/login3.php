<?php
session_start();

if (isset($_POST["submit"])) {
    $name=$_POST["name"];
    $email=$_POST["email"];

    $_SESSION["userid"]=123;

    echo $_SESSION["userid"];
} else {
echo "error";}




if (isset($_POST["dekete_session"])) {
  
   unset($_SESSION["userid"]);

   echo "good destroy";
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
    

<form action="" method="post">
    <input type="text" name="name" id=""><br>
    <input type="text" name="email" id=""><br>
    <input type="submit" name="submit" id="">
    

</form>

<form action="" method="post">
    <input type="submit" name="dekete_session" value="delete session" id="">
</form>
</body>
</html>