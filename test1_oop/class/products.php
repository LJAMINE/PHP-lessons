<?php

class Products
{


    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function createProdui($name, $description, $price, $quantity, $photo)
    {

        $stmt = $this->pdo->prepare("INSERT INTO products(name,description,price,quantity,photo)VALUES(?,?,?,?,?)");
        $stmt->execute([$name, $description, $price, $quantity, $photo]);
    }

    public function fetchProduits()
    {

        $stmt = $this->pdo->prepare("SELECT * FROM products");
        $stmt->execute([]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteP($id)
    {
        $stmt = $this->pdo->prepare("UPDATE products SET status='deleted' WHERE productid=?");
        return $stmt->execute([$id]);
    }

    public function updateP($name, $description, $price, $quantity, $photo, $id)
    {
        $stmt = $this->pdo->prepare("UPDATE products SET name=?,description=?,price=?,quantity=?,photo=? WHERE productid=?");
        return $stmt->execute([$name, $description, $price, $quantity, $photo, $id]);
    }
}
