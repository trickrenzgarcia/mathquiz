<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/static/images/logo.png">
  <link rel="stylesheet" type="text/css" href="static/css/style.css">
  <link rel="stylesheet" href="static/css/materialize.min.css">
  <title>Math Quiz Game</title>
</head>
<body>
<div class="main">
  <div class="header">
    
    <?php include_once(__DIR__.'/includes/header.php') ?>
    <?php include_once(__DIR__.'/includes/login.modal.php') ?>
    <a class="waves-effect waves-light btn modal-trigger" href="#login">login</a>
    <a class="waves-effect waves-light btn modal-trigger" href="#login">login</a>
  </div>


  <div class="footer">
    <?php include_once(__DIR__.'/includes/footer.php') ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="static/js/index.js"></script>
  <script type="text/javascript" src="static/js/materialize.min.js"></script>

</div>
</body>
</html>