<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="test2";

try {
    $dns="mysql:host=" . $servername . ";dbname=" . $dbname;
    $pdo=new PDO($dns,$username,$password);
    // echo 'good';
} catch (\Throwable $th) {
    throw $th;
}


?>