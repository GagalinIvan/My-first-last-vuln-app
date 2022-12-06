
<head>
  <meta charset="UTF-8">
  <meta name="viewport" contex="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css"> 
  <title>OnlyBro</title>
</head>
<body>
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/">
       <div class="logo-holder">
          <img src="assets/only.png" width="120" height="50" alt="onlybro" class="logo-img">
       </div>   
      </a>
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 link-secondary">Feeds</a></li>
        <li><a href="/assets" class="nav-link px-2 link-dark">Photos</a></li>
        <li><a href="/assets" class="nav-link px-2 link-dark">Videos</a></li>
        <li><a href="/about.php" class="nav-link px-2 link-dark">About membership</a></li>
        <li><a href="/404.php" class="nav-link px-2 link-dark">Rules</a></li>
      </ul>
      <div class="col-md-3 text-end">
       <?php
        if($_COOKIE['user'] == 'true'):
       ?>
        <a class="btn btn-outline-primary me-2" href="/profile.php">Your room</a>
        <?php else: ?>
        <a class="btn btn-outline-primary me-2" href="/auth.php">Login</a>
        <?php endif; ?>
        <a class="btn btn-outline-primary me-2" href="/register.php">Sign up</a> 
      </div>
    </header>
  </div>
</body>    
  
  
 
  