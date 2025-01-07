<?php
include("../class/products.php");
include("../config/config.php");
$id="";
$name="";
$description="";
$quantity="";
$price="";
$photo="";

if (isset($_GET["id"])) {
   $id=$_GET["id"];

$stmt=$pdo->prepare("SELECT * FROM products where productid=?");
$stmt->execute([$id]);
$user=$stmt->fetch(PDO::FETCH_ASSOC);


if (!$user) {
return "error";}

$name=$user["name"];
$description=$user["description"];
$quantity=$user["quantity"];
$price=$user["price"];
$photo=$user["photo"];
} 

if (isset($_POST["submit"])) {
    $id = $_POST['id'];

    $name=$_POST["name"];
    $description=$_POST["description"];
    $quantity=$_POST["quantity"];
    $price=$_POST["price"];
    $photo=$_POST["photo"];

    $bewOOn=new Products($pdo);
if ($bewOOn->updateP($name,$description,$price,$quantity,$photo,$id)) {
    header("location:../pages/admin/admin.php");
}else {
    echo "error";
}}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id ?>" id="">

        <input type="text" name="name" id="" value="<?php echo $name ?>"  required>
        <input type="text" name="description" value="<?php echo $description ?>"  id=""required>
        <input type="number" name="quantity" value="<?php echo $quantity ?>"  id="">
        <input type="number" name="price" value="<?php echo $price?>"  id="">
        <input type="text" name="photo" value="<?php echo  $photo ?>"  id="">

        <input type="submit" name="submit" value="submit" id="">
    </form>
</body>
</html>