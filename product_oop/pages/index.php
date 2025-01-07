<?php
include('../config/config.php');
include_once("../class/products.php");


session_start();

if (!isset($_SESSION["userid"])|| $_SESSION["role"]!=="admin") {
   
    header("location:../pages/login.php");
    exit();

  
} else {
 echo 'admin';
 }






$newobj = new Products($pdo);

if (isset($_POST["submit"])) {
    $photo = $_POST["photo"];
    $name = $_POST["name"];
    $description = $_POST["desciption"];
    $price = $_POST["price"];

    $newobj->createProduct($photo, $name, $description, $price);
} else {
    echo 'error';
}

$rows = $newobj->displayAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        position: fixed;
        left: 30%;
        bottom: 50%;
        width: 60%;
    }
</style>

<body>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>photo</th>
                <th>name</th>
                <th>desc</th>
                <th>price</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $row) { ?>
                <tr>
                    <td> <?php echo $row["productid"] ?></td>
                    <td> <?php echo $row["photo"] ?></td>
                    <td> <?php echo $row["name"] ?></td>
                    <td> <?php echo $row["description"] ?></td>
                    <td> <?php echo $row["price"] ?></td>

                    <td> <?php echo $row["status"] ?></td>


                </tr>
            <?php } ?>

        </tbody>
    </table>


    <form action="" method="post">

        <input type="text" name="photo" id=""><br>
        <input type="text" name="name" id=""><br>
        <input type="text" name="desciption" id=""><br>
        <input type="number" name="price" id=""><br>

        <input type="submit" name="submit" value="submit" id="">
    </form>


</body>

</html>