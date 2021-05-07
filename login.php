<?php
  include_once("auth.php");
?>
<form action="" method="post">
  <center><img src="static/images/logo.png" alt="logo" width="120px"></center>
  <center><h3>Login</h3></center><br>
  <label>Email:</label><br>
  <input type="email" name="email" id="email"/><br>
  <label>Password:</label><br>
  <input type="password" name="password" id="password"/><br>
  <button class="button_submit" type="submit" name="login">Login</button>
</form>

