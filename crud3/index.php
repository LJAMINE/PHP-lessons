<?php
include('config/config.php');
include("class/player.php");

$newusers=new Player($pdo);

if (isset($_POST['submit'])) {

$name=$_POST["fullname"];
$email=$_POST["email"];
$birth=$_POST["birth"];

if (empty($name)||empty($email) ||empty($birth)) {

header("location:index.php");
} else {
    $newusers->createPlayer($name , $email,$birth);

}



}


$row=$newusers->getUser();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<form method="post" action="">
    <input type="text" name="fullname" id=""><br>
    <input type="text" name="email" id=""><br>
    <input type="date" name="birth" id=""><br>

    <input type="submit" name="submit" id=""><br>
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
        <?php foreach($row as $myRow) { ?>
        <tr>
            <td><?php echo $myRow['name_db'] ?></td>
            <td><?php echo $myRow['email_db'] ?></td>
            <td><?php echo $myRow['birth_db'] ?></td>
            <td>

<form action="function/delete.php" method="post">
    <input type="hidden" name="id_to_delete" value="<?php echo $myRow['id'] ?>" id="">
    <input type="submit" name="delete" value="delete" id="">
</form>

            </td>
            <td><a href="function/update.php?id=<?php echo $myRow['id'] ?>">update </a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</body>
</html>