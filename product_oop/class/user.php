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

        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE emaildb=?");
        $stmt->execute([$email]);
        $userss = $stmt->fetchAll();

        if ($userss) {
            throw new Exception("error the user already registered", 1);
        }

        $hashedpass = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $this->pdo->prepare("INSERT INTO users(namedb,emaildb,passworddb,role)VALUES(?,?,?,'client')");
        $stmt->execute([$name, $email, $hashedpass]);
    }

    public function login($email, $password)
    {


        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE emaildb=?");
        $stmt->execute([$email]);
        $userss = $stmt->fetch();

        if ($userss && password_verify($password, $userss['passworddb'])) {

            $_SESSION["userid"] = $userss['id'];
            $_SESSION["email"] = $userss['emaildb'];
            $_SESSION["role"] = $userss['role'];

            if ($userss["role"] == "admin") {
                header("location:../pages/index.php");
            } else {
                header("location:../pages/client.php");
            }
        } else {
            echo "error";
        }
    }
}
