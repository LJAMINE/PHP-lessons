<?php 

include_once('config/config.php');

if (isset($_POST["submit"])) {
     $name=$_POST["name"];
     $email=$_POST["email"];
     $password=$_POST["password"];

     if (empty($name)||empty($email) ||empty($password)) {
       
         echo 'impty fields';
     }else{
        $stmt=$pdo->prepare("INSERT INTO users (namedb,emaildb,passworddb) VALUES(?,?,?)");
        $stmt->execute([$name,$email,$password]);

        header("location:index.php");
     }
} else{
    echo 'error';
    
}




?>
