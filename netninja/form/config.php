<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="test1";


try {
$dns="mysql:host=" . $servername . ";dbname=" .$dbname;
$pdo=new PDO($dns,$username,$password);

    echo "Connected successfully";
    echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>