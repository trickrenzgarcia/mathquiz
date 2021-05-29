<nav class="black">
  <div class="nav-wrapper">
    <div class="nav-container">
      <img src="static/images/logo.jpg" alt="logo" width="75px">
      <a href="index.php" class="brand-logo hide-on-med-and-down">The Math Quiz Game</a>
      <ul id="nav-mobile" class="right ">
        <?php if(isset($_SESSION['UserLogin'])){?>
          <li><a href="#" data-target="slide-out" class="sidenav-trigger show-on-large">Profile</a></li>
          <li><a href="logout.php">Logout</a></li>
        <?php } else { ?>
          <li><a class="modal-trigger" href="#login">LOGIN</a></li>
          <li><a href="signup.php">SIGN UP</a></li>
        <?php }?>
      </ul>
    </div>
  </div>
</nav>