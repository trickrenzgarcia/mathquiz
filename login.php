<?php
  include_once("auth.php");
?>
<form action="" method="post">
  <center><img src="static/images/logo.png" alt="logo" width="120px"></center>
  <center><h3>Login</h3></center><br>
  <label>Email:</label><br>
  <input type="email" name="email" id="email" class="validate" required/><br>
  <label>Password:</label><br>
  <input type="password" name="password" id="password" class="validate" required/><br>
  <center><p>haven't got an account yet? <a href="signup.php">Sign up</a></p></center>
  <button class="button_submit" type="submit" name="login">Login</button>
  
</form>

