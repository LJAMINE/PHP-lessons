<?php 

include('class.php');
include('config.php');

if (isset($_POST['delete'])) {
    $id=$_POST['id_to_delete'];

    $newaze=new Player($pdo);

if (    $newaze->DELETEuser($id)
) {
header('location:index.php');
}    else{
    echo "erro";
}

    
}


?>