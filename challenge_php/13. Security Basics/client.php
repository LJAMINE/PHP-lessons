<?php
session_start();

if (!isset($_SESSION["userid"])||$_SESSION["role"]!=="client") {
     
   header("location:login.php");
} else {
echo "client";
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
    <h1>client</h1>
    
</body>
</html>