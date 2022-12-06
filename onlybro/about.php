<!DOCTYPE html>
<html lang="ru">
<?php require "blocks/header.php" ?>
  <div class="container mt-5">
    <h3>Do you like this?</h3>
    <form action="check.php" method="post">
      <input type="email" name="email" placeholder="Write your email" class="form-control"><br>
      <textarea name="message" class "form-control" placeholder="Write your first messages"></textarea><br>
      <button type="submit" name="send" class="btn btn-success">Send</button><br>
    </form>
  </div>
  <?php require "blocks/footer.php" ?>

</html>