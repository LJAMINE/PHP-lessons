<?php 

include('../config/config.php');
include("../class/player.php");


$id="";
$fullname="";
$email="";
$birth="";

if (isset($_GET['id'])) {

    $id=$_GET['id'];

    $stmt=$pdo->prepare("SELECT * FROM player WHERE id=?");

    $stmt->execute([$id]);
    $row=$stmt->fetch(PDO::FETCH_ASSOC);

    $id=$row['id'];
    $fullname=$row['name_db'];
    $email=$row['email_db'];
    $birth=$row['birth_db'];
    
}

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $fullname=$_POST["fullname"];
    $email=$_POST["emai"];
    $birth=$_POST["birth"];

    $newUUPDATE=new Player($pdo);

if (    $newUUPDATE->updatemyUser($fullname,$email,$birth,$id)
) {
header("location:../index.php");
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
    
<form method="post" action="">
    <input type="hidden" name="id" id="" value="<?php echo $id ?>">
    <input type="text" name="fullname" value="<?php echo $fullname ?>"><br>
    <input type="text" name="email" value="<?php echo $email ?>"><br>
    <input type="date" name="birth" value="<?php echo $birth ?>"><br>

    <input type="submit" name="submit" id=""><br>
</form>
</body>
</html>