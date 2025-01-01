<?php
include('config.php');
include("class.php");

$newuserrr=new Player($pdo);
if (isset($_POST['submit'])) {

$fullname=$_POST["fullname"];
$email=$_POST["email"];
$birth=$_POST["birth"];

if (empty($fullname) ||empty($email)  ||empty($birth) ) {

header("location:index.php");
}else{
    $newuserrr->createTheUser($fullname,$email,$birth);
    echo"sooooo";
}

}

$myRow=$newuserrr->getUser();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="fullname" id="">
        <input type="text" name="email" id="">
        <input type="date" name="birth" id="">
        <input type="submit" name="submit" id="" value="submit" >

    </form>

    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>birth</th>
                <th>delete</th>
                <th>update</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($myRow as $newRow) {?>
            <tr>

                <td><?php echo $newRow['name_db'] ?></td>
                <td><?php echo $newRow['email_db'] ?></td>
                <td><?php echo $newRow['birth_db'] ?></td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id_to_delete" value="<?php echo $newRow["id"] ?>">
                        <input type="submit" name="delete" value="delete">
                    </form>
                </td>
                <td>update</td>
            </tr>



            <?php }?>
        </tbody>
    </table>
</body>

</html>