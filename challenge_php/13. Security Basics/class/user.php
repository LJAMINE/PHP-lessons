<?php


class User{

private $pdo;

public function __construct($pdo){
    $this->pdo=$pdo;
}


public function register($name,$email,$password){

    $stmt=$this->pdo->prepare('SELECT *FROM users where emaildb=?');
    $stmt->execute([$email]);
    $result=$stmt->fetch();

    if ($result) {
        throw new Exception("the user already exist", 1);
        
    }



   $hashedPassword=password_hash($password,PASSWORD_DEFAULT);


    $stmt=$this->pdo->prepare("INSERT INTO users(namedb,emaildb,passworddb)VALUES(?,?,?)");
    $stmt->execute([$name,$email,$hashedPassword]);

}


public function login($email,$password){
    $stmt=$this->pdo->prepare('SELECT *FROM users where emaildb=?');
    $stmt->execute([$email]);
    $users=$stmt->fetch();

    if ($users && password_verify($password,$users["passworddb"])) {
       
        $_SESSION["userid"]=$users["id"];
        $_SESSION["email"]=$users["emaildb"];
        $_SESSION["role"]=$users["role"];
      
       if ($users["role"]=="admin") {
        header("location:./admin.php");

       } else {
        header("location:./client.php");
       }
       

    } else {

echo ' invalid info';
    }
    


}

}

?>


