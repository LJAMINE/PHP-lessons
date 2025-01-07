<?php
include("../../config/config.php");
include("../../class/products.php");

$newP = new Products($pdo);

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $quantity = $_POST["quantity"];
    $photo = $_POST["photo"];
    $price = $_POST["price"];

    if (empty($name)) {
        echo "error";
    }else {
        $newP->createProdui($name, $description, $price, $quantity, $photo);
        # code...
    }

} else {
    echo "error";
}


$row=$newP->fetchProduits();

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
        width: 30%;
    }
</style>

<body>

    <form action="" method="post">
        <input type="text" name="name" id=""required>
        <input type="text" name="description" id=""required>
        <input type="number" name="quantity" id="">
        <input type="number" name="price" id="">
        <input type="text" name="photo" id="">

        <input type="submit" name="submit" value="submit" id="">
    </form>



    <table>
        <thead>
            <tr>
                <th>photo</th>
                <th>name</th>
                <th>description</th>
                <th>qte</th>
                <th>price</th>
                <th>delete</th>
                <th>update</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($row as $user){ ?>
            <tr>
                <td><?php echo $user["productid"] ?></td>
                <td><?php echo $user["name"] ?></td>
                <td><?php echo $user["description"] ?></td>
                <td><?php echo $user["quantity"] ?></td>
                <td><?php  echo $user["price"] ?></td>
                <td>
<form action="../../function/delete.php" method="post">
    <input type="hidden" name="id_to_delete" value="<?php echo $user["productid"] ?>" id="">
    <input type="submit" name="delete" value="delete" id="">
</form>

                </td>
                <td><a href="../../function/update.php?id=<?php echo $user["productid"] ?>">update</a></td>
             
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>