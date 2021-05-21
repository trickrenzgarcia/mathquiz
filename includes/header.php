<nav class="blue lighten-1">
  <div class="nav-wrapper">
    <div class="nav-container">
      <img src="static/images/logo.png" alt="logo" width="100px">
      <a href="index.php" class="brand-logo hide-on-med-and-down">The Math Quiz Game</a>
      <ul id="nav-mobile" class="right ">
        <?php if(isset($_SESSION['UserLogin'])){?>
          <li><a href="#"><?php echo $_SESSION['Access']?></a></li>
          <li><a href="logout.php">Logout</a></li>
        <?php } else { ?>
          <li><a class="modal-trigger" href="#login">LOGIN</a></li>
          <li><a href="signup.php">SIGN UP</a></li>
        <?php }?>
      </ul>
    </div>
  </div>
</nav>