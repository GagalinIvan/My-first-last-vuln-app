<!DOCTYPE html>
<html lang="ru">
<?php require "blocks/header.php" ?>
  <div class="container mt-5">
    <h3 class="mb-5">Error 404</h3>
    <div class="d-flex flex-wrap">
      <?php
        for($i = 0; $i < 3; $i++):
      ?>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Free</h4>
          </div>
          <div class="card-body">
            <img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
            <ul class="list-unstyled mt-3 mb-4">
              <li>1</li>
              <li>2</li>
              <li>3</li>
              <li>4</li>
            </ul>
            <button type="button" class="btn btn-lg btn=block btn-outline-primary">Get this photo</button>
          </div>
        </div>
        <?php endfor; ?>
    </div>
  </div>
  <?php require "blocks/footer.php" ?>
</html>