<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="en">
<link rel="stylesheet" href="assets/css/main.css">
 
    <!-- Форма регистрации -->

    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
    
        <label>Full name</label>
        <input type="text" name="full_name" placeholder="Write your name">
        <label>Login</label>
        <input type="text" name="login" placeholder="Write your login">
        <label>Email</label>
        <input type="email" name="email" placeholder="Write your email">
        <label>Photo</label>
        <input type="file" name="avatar">
        <label>Password</label>
        <input type="password" name="password" placeholder="Write password">
        <label>Confirm password</label>
        <input type="password" name="password_confirm" placeholder="Confirm password">
        <button type="submit">Enter</button>
        <p>
            Do you have account? - <a href="/auth.php">Got it!</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>