<?php
$servername="localhost";
$username="root";
$password="";
$dbname="test2";


try {
    $dns="mysql:host=". $servername . ";dbname=" . $dbname;
$pdo=new PDO($dns,$username,$password);
echo "cool";
} catch (PDOException $th) {
   echo $th->getMessage();
}

?>