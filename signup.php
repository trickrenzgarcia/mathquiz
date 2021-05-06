<?php
  session_start();
  include_once("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="static/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="static/css/signup.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Sign up | Math Quiz Game</title>
</head>
<body style="margin:0">
<div class="row">
  <div class="col l6  hide-on-med-and-down">
    <img class="bg-image" src="static/images/bg-signup.jpg" alt="signup-bg" >
  </div>
  <div class="col l6 pull-3 m12">
    <div class="container">
      <div class="row">
        <div class="col l12" style="float:right; padding-top:20px">
          <a class="back_button" href="index.php"><i class="medium material-icons" style="float:right">arrow_back</i></a>
        </div>
        <div class="col l12 s12" style="padding-top:40px">
          <form action="" method="post">
            <center><h3>SIGN UP</h3></center>
            <label>First Name:</label>
            <input type="text" name="first_name" id="first_name"/><br>
            <label>Last Name:</label>
            <input type="text" name="last_name" id="last_name"/><br>
            <label>Email:</label>
            <input type="email" name="email" id="email"/><br>
            <label>Password:</label>
            <input type="password" name="password_1" id="password_1"/><br>
            <label>Confirm Password:</label>
            <input type="password" name="password_2" id="password_2"/><br>
            <button class="button_submit" type="submit" name="signup">Sign up</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
