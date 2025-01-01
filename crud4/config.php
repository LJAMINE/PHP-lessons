<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="crudoop";


try {
    $dns="mysql:host=" . $servername . ";dbname=" . $dbname;
    $pdo=new PDO($dns,$username,$password);
    echo 'good';
} catch (PDOException $th) {
    throw $th;
}

?>