<?php

if (isset($_POST["submit"])) {
     $color=$_POST["color"];

     echo $color;
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
    

<form action="" method="post" >

<select name="color" id="">
<option value="red">red</option>
<option value="blue">blue</option>
<option value="green">green</option>
</select>

<input type="submit" name="submit" id="">

</form>

</body>
</html>