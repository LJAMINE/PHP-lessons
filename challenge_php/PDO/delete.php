<?php
include_once('config/config.php');

if (isset($_POST['delete'])) {
    $id=$_POST["id_to_delete"];

    $stmt=$pdo->prepare("DELETE FROM users WHERE id=?");
    $stmt->execute([$id]);

    header("Location:index.php");
} else {
throw new Exception("Error Processing Request", 1);

}



?>