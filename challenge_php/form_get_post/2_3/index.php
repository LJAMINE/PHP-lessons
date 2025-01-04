<?php

if (isset($_POST["submit"])) {

  

   echo $name=$_POST["name"] . "<br >";
    echo $email=$_POST["email"];
} else {
echo "eror";
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
<input type="email" name="email" id=""><br>
<input type="submit" name="submit" id="">
</form>
    
</body>
</html>