<?php 

include('config/config.php');

$id="";
$name="";
$email="";
$password="";

$id=$_GET["id"];
$stmt=$pdo->prepare("SELECT * FROM users WHere id=?");
$stmt->execute([$id]);
$myRow=$stmt->fetch(PDO::FETCH_ASSOC);

if (isset($_POST["submit"])) {
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];

$stmt=$pdo->prepare("UPDATE users SET namedb=?,emaildb=?,passworddb=? WHERE id=?");
$stmt->execute([$name,$email,$password,$id]);

header("location:index.php");

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
<form action="" method="post" >
     <input type="text" name="name" value="<?php echo $myRow["namedb"] ?>"><br>
     <input type="text" name="email" value="<?php echo $myRow["emaildb"] ?>"><br>
     <input type="text" name="password" value="<?php echo $myRow["passworddb"] ?>"><br>
     <input type="submit" name="submit" id=""><br>

    </form>
</body>
</html>