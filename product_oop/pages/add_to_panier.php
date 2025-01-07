<?php
include_once('../config/config.php');


session_start();

if (!isset($_SESSION["userid"]) || $_SESSION["role"] !== "client") {
    header("location:loging.php");
    exit();
}

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];//url product_id=url li f client.php href
    $quantity = isset($_GET['quantity']) ? $_GET['quantity'] : 1;

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $stmt = $pdo->prepare("SELECT * FROM products WHERE productid = :product_id");
    $stmt->execute(['product_id' => $product_id]);
    $product = $stmt->fetch();



    if ($product) {
        // Check if the product is already in the cart
        if (isset($_SESSION['cart'][$product_id])) {
            // If product already in cart, increase the quantity
            $_SESSION['cart'][$product_id]['quantity'] += $quantity;
        } else {
            // If product is not in the cart, add it with quantity and price
            $_SESSION['cart'][$product_id] = [
                'quantity' => $quantity,
                'price' => $product['price'],  // Store the product's price
            ];
        }

        // Redirect to the cart page
        header('Location: panier.php');
        exit();
    } else {
        // Product not found in the database
        echo "Product not found.";
    }
}

?>
