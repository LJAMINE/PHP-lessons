<?php 
include('config/config.php');
include('class/player.php');
$newPlayer=new Player($pdo);

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $birth=$_POST['birth'];

    if (empty($fullname)||empty($email)||empty($birth)) {
echo 'empty';
        
    }else{
     
        $newPlayer->creatUser($fullname,$email,$birth);
        header("location:index.php");
    }
}


$row=$newPlayer->getUser();

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
    <input type="text" name="fullname" value=""><br>
    <input type="text" name="email" value=""><br>
    <input type="date" name="birth" value=""><br>

    <input type="submit" name="submit" value="value">
</form>

<table>
   
    <thead>
    <tr>
        <th>fullname</th>
        <th>email</th>
        <th>birth</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
    </thead>

    <tbody>
        <?php foreach($row as $player){ ?>
        <tr>
        <td><?php echo $player['name_db'] ?></td>
        <td><?php echo $player['email_db'] ?></td>
        <td><?php echo $player['birth_db'] ?></td>
        <td>

        <a href="function/edit.php?id=<?php echo  $player['id'] ?>">edit</a>
        </td>
        <td>
            <form action="function/delete.php" method="post">
                <input type="hidden" name="id_delete" value="<?php echo $player['id'] ?>" >
                <input type="submit" name="delete" value="delete">
            </form>
        </td>
    </tr>
        <?php } ?>
    </tbody>
</table>
    
</body>
</html>