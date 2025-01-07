<?php 
include("../config/config.php");
include('../class/products.php');


if (isset($_POST["delete"])) {
    $id=$_POST["id_to_delete"];
    
    $newdelete=new Products($pdo);
  if ( $newdelete->deleteP($id)  ) {
header("Location:../pages/admin/admin.php");
} else {
    echo "error";
 }
  

}
?>