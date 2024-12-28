<?php 

include_once('./config.php');

require('./user_validator.php');
if (isset($_POST["submit"])){

//validate entries
$validation=new userValidator($_POST);
$error=$validation->validateForm();

//save data to db
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

<div class="new-user">
    <h2>create new user</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >

    <label for="">username</label>
    <input type="text" name="username" value="">
    <div class="error" >
        <?php echo $error['username'] ?? "" ?>
    </div>
    <br>

  <label for="">email</label>
    <input type="text" name="email" >
    <div class="error" >
        <?php echo $error['email'] ?? "" ?>
    </div>
    <br>

    <input type="submit" value="submit" name="submit">
    </form>
</div>
</body>
</html>