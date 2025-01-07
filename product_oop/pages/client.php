<?php

session_start();

include("../class/products.php");
include("../config/config.php");

$newobject=new Products($pdo);


if (!isset($_SESSION["userid"])|| $_SESSION["role"]!=="client") {
    
    header("location:../pages/login.php");
    exit();
    
    
} 
    $produit=$newobject->displayAll();




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
}
h1 {
  text-align: center;
  margin: 20px;
}

nav {
  background-color: #333;
  color: white;
  padding: 15px;
  display: flex;
  justify-content: space-between;
}

nav a {
  color: white;
  text-decoration: none;
  margin: 0 15px;
  font-size: 18px;
}

nav a:hover {
  text-decoration: underline;
}

.card-container {
  display: grid;
  grid-template-columns: repeat(4,1fr);
  gap: 20px;
  padding: 20px;
  /* justify-items: center; */
}

.card {
  background-color: white;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 300px;
  overflow: hidden;
  text-align: center;
  transition: transform 0.3s ease;
}

.card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-bottom: 1px solid #eee;
}

.card-body {
  padding: 20px;
}

.card-body h3 {
  font-size: 20px;
  margin: 0;
}

.card-body p {
  color: #777;
  margin: 10px 0;
}

.card-body .btn {
  display: inline-block;
  background-color: #007bff;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

.card-body .btn:hover {
  background-color: #0056b3;
}

.card:hover {
  transform: translateY(-10px);
}

.btn-add-to-cart {
  background-color: #ffc107;
}

.btn-add-to-cart:hover {
  background-color: #e0a800;
}

img{
    height: 30px;
    width: 30px;
}
</style>
<body>

<a href="../function/logout.php">logout</a>
<div class="card-container">
        <?php foreach($produit as $row){ ?>

            <div class="card">
            <td><img src="<?php echo $row["photo"]  ?>" alt="Product Image" style="width: 100px; height: auto;"></td>
            <div class="card-body">
                    <h3><?php echo $row["name"]  ?></h3>
                    <p><?php echo $row["description"]  ?></p>
                    <h4><?php  echo $row["price"] ?> $</h4>
                    <a href="add_to_panier.php?product_id=<?php echo $row["productid"] ?>&quantity=1" class="btn btn-add-to-cart">Add to Cart</a>
                </div>
            </div>



        <?php } ?>
    </div>

</body>
</html>