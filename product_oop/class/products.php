<?php

class Products
{

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function createProduct($photo, $name, $desciption,$price)
    {

        $stmt = $this->pdo->prepare("INSERT INTO products(photo,name,description,price,status)VALUES(?,?,?,?,'available')");
        $stmt->execute([$photo, $name, $desciption,$price]);
    }

    public function displayAll()
    {

        $stmt = $this->pdo->prepare("SELECT * FROM products");
        $stmt->execute();
        return $stmt->fetchAll();
    }

}
