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
  <link rel="icon" href="static/images/logo.png">
  <title>Math Quiz Game</title>
</head>
<body>
  <?php if(isset($_SESSION['UserLogin'])){?>
    <a href="logout.php">Logout</a>
  <?php } else { ?>
    <a href="login.php">Login</a>
  <?php }?>
</body>
</html>l