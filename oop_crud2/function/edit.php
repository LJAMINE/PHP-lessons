<?php

include("../class/player.php");
include("../config/config.php");

$id = "";
$fullname = "";
$email = "";
$birth = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM player where id=?");
    $stmt->execute([$id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    $fullname = $user['name_db'];
    $email = $user['email_db'];
    $birth = $user['birth_db'];
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $birth = $_POST["birth"];

    $player = new Player($pdo);

    if ($player->editUsers( $fullname, $email, $birth, $id)) {

        header("location:../index.php");
    } else {
echo 'error';  
  }
}

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
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="text" name="fullname" value="<?php echo $fullname ?>"><br>
        <input type="text" name="email" value="<?php echo $email ?>"><br>
        <input type="date" name="birth" value="<?php echo $birth ?>"><br>

        <input type="submit" name="submit" value="value">
    </form>

</body>

</html>