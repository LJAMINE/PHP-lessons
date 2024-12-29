<?php
include_once('config/config.php');
include('class/player.php');

$userObject = new Player($pdo);

if ($_SERVER['REQUEST_METHOD']=="POST") {

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$birth=$_POST['birth'];

$userObject->createUser($fullname,$email,$birth);
header("location:index.php");
}else{
    echo 'bad';
}

$users=$userObject->getUsers();

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
        <label for="">fullname</label>
        <input type="text" name="fullname" value=""><br>

        <label for="">email</label>
        <input type="text" name="email" value=""><br>

        <label for="">birth</label>
        <input type="date" name="birth" value=""><br>

        <input type="submit" name="submit" value="submit">
    </form>


    <table>
        <thead>
             <tr>
                <th>fullname</th>
                <th>email</th>
                <th>birth</th>
                <th>update</th>
                <th>delete</th>
             </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) {?>

                <tr>
                    <td><?php echo $user['name_db'] ?></td>
                    <td><?php echo $user['email_db']  ?></td>
                    <td><?php  echo $user['birth_db'] ?></td>
                    <td>
                            <a href="function/update.php?id=<?php echo $user['id']; ?>" style="text-decoration: none; color: inherit;">update
                            </a>
                        </td>                    <td>

                    <form action="function/delete.php" method="post">
                        <input type="hidden" name="id_to_delete" value="<?php echo  $user['id'] ?>">
                        <input type="submit" name="delete" value="delete">
                    </form>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</body>

</html>