<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>
<!doctype html>
<html lang="en">
<?php require "blocks/header_logout.php" ?>
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>    
</head>
<body>
<div class="container">
 <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
 </form>
</div>
</body>
<?php require "blocks/footer.php" ?>
</html>

