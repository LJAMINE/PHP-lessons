<?php

class User
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function register($name, $email, $password)
    {

        $stmt = $this->pdo->prepare("SELECT * from users where email=?");
        $stmt->execute([$email]);
        $result = $stmt->fetch();

        if ($result) {
            return "back pleae";
        }

        $hashedPass = password_hash($password, PASSWORD_DEFAULT) .


            $stmt = $this->pdo->prepare("INSERT INTO users (username,email,password,role)VALUES(?,?,?,'client')");
        $stmt->execute([$name, $email, $hashedPass]);
    }

    public function login($email, $password)
    {

        $stmt = $this->pdo->prepare("SELECT * from users where email=?");
        $stmt->execute([$email]);
        $result = $stmt->fetch();

        if ($result && password_verify($password, $result["password"])) {

            $_SESSION['user_id'] = $result["id"];
            $_SESSION['email'] = $result["email"];
            $_SESSION['role'] = $result["role"];

            if ($result["role"] == "admin") {
                header("location:../admin/admin.php");
            } else {
                header("location:../client/client.php");
            }
        } else {
            echo "error";
        }
    }
}
