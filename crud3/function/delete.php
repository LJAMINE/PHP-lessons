<?php 
include('../config/config.php');
include("../class/player.php");


if (isset($_POST["delete"])) {

$id=$_POST["id_to_delete"];

$newMydelete=new Player($pdo);

if ($newMydelete->deletePllayer($id)
) {
    

header("location:../index.php");
}else{
    echo'erro';
}
}

?>