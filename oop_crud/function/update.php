<?php 

include('../class/player.php');
include('../config/config.php');
$fullname = '';
$email = '';
$birth = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM player WHERE id = ?");
    $stmt->execute([$id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo "User not found!";
        exit;
    }

    $fullname = $user['name_db'];
    $email = $user['email_db'];
    $birth = $user['birth_db'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $birth = $_POST['birth'];

    $player = new Player($pdo);

    if ($player->updateUser($id, $fullname, $email, $birth)) {
        echo 'User updated successfully!';
        header('Location: ../index.php');  
        exit;
    } else {
        echo 'Error updating user.';
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
<form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>"> 

        <label for="">fullname</label>
        <input type="text" name="fullname" value="<?php echo $fullname?>"><br>

        <label for="">email</label>
        <input type="text" name="email" value="<?php echo $email  ?>"><br>

        <label for="">birth</label>
        <input type="date" name="birth" value="<?php echo $birth  ?>"><br>

        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>