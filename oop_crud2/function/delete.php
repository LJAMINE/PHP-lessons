<?php

include('../config/config.php');
include("../class/player.php");

if (isset($_POST['delete'])) {
$id=$_POST['id_delete'];

$newdelete=new Player($pdo);

$newdelete->deleteUser($id);

header('location:../index.php');

}

?>