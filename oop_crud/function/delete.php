<?php 
include('../class/player.php');
include('../config/config.php');

if (isset($_POST['delete'])) {
$id=$_POST['id_to_delete'];

$newdelete=new Player($pdo);

if ($newdelete->deleteUser($id)) {
    echo'good';

header('location:../index.php');
// exit;
}else{
    echo'bad';
}
}




?>