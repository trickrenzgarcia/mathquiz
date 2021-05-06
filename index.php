<?php
  if(!isset($_SESSION)){
    session_start();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="static/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="static/css/index.css">
  <link rel="icon" href="static/images/logo.jpg">
  <title>Math Quiz Game</title>
</head>
<body>
  <nav class="blue lighten-1">
    <div class="nav-wrapper">
      <div class="nav-container">
        <img src="static/images/logo.png" alt="logo" width="100px">
        <a href="index.php" class="brand-logo hide-on-med-and-down">The Math Quiz Game</a>
        <ul id="nav-mobile" class="right ">
          <?php if(isset($_SESSION['UserLogin'])){?>
            <li><a href="logout.php">Logout</a></li>
          <?php } else { ?>
            <li><a href="login.php">LOGIN</a></li>
            <li><a href="signup.php">SIGN UP</a></li>
          <?php }?>
        </ul>
      </div>
    </div>
  </nav>


  
</body>
</html>