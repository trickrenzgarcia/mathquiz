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
  <main>
    <!-- Header -->
    <?php include_once('includes/header.php')?>

    <!-- Modal Structure for login -->
    <div id="login" class="modal">
      <div class="modal-content">
        <?php include_once("login.php") ?>
      </div>
    </div>

    <!-- Quiz Content -->
    <?php if(isset($_SESSION['UserLogin'])){?>
      <?php include_once('includes/category.php')?>
    <?php } else { ?>
      <?php include_once('includes/welcome.php')?>
    <?php }?>

    <!-- Footer -->
    <?php include_once('includes/footer.php')?>
    
  </main>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
  </script>
  <script src="static/js/materialize.min.js"></script>
  <script src="static/js/index.js"></script>
</body>
</html>