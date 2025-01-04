<?php
include("config/config.php");


$stmt = $pdo->prepare("SELECT * from users");
$stmt->execute();
$row = $stmt->fetchAll();






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>delete</th>
                <th>update</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($row as $user){ ?>
            <tr>
                <td> <?php echo $user['id']?></td>
                <td> <?php echo $user['namedb'] ?></td>
                <td> <?php echo $user['emaildb'] ?></td>
                <td> <?php echo $user['passworddb'] ?></td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id_to_delete" value="<?php echo $user["id"] ?>"  id="">
                        <input type="submit" name="delete" value="delete" id="">
                    </form>
                </td>
                <td><a href="update.php?id=<?php echo $user["id"]?>">update</a></td>
        
            </tr>

            <?php }?>
        </tbody>
    </table>

    <form action="create.php" method="post" >
     <input type="text" name="name" id=""><br>
     <input type="text" name="email" id=""><br>
     <input type="text" name="password" id=""><br>
     <input type="submit" name="submit" id=""><br>

    </form>
</body>

</html>