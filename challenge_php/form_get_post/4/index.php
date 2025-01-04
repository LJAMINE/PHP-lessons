<?php

if (isset($_POST["submit"])) {

$a=$_POST["a"];
$b=$_POST["b"];

echo $c=$a+$b;
}else{
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
    
<form action="" method="post" >

<input type="number" name="b" id="">
<input type="number" name="a" id="">
<input type="submit" name="submit" id="">

</form>


</body>
</html>