<?php
  include_once('connections/connection.php');
  $con = connection();
  $sql = "SELECT * FROM users";
  $result = mysqli_query($con, $sql);
?>
<?php
  
  if(isset($_SESSION['UserLogin'])){
    $email = $_SESSION['UserLogin'];
    $access = $_SESSION['Access'];
  }
?>
<ul id="slide-out" class="sidenav">
  <li>
    <div class="user-view">
      <div class="background">
        <img src="static/images/logo.jpg"> <!-- Cover photo -->
      </div>
      <a href="#user"><img class="circle" src="static/images/profile.png" alt="profile"></a>
      <span class="white-text name"><?php echo $_SESSION['FirstName'].", ".$_SESSION['LastName']; ?></span>
      <span class="white-text email"><?php echo $_SESSION['UserLogin']; ?></span>
    </div>
  </li>
  <li><a class="subheader">Menu</a></li>
  <li><a class="waves-effect" href="index.php"><i class="material-icons">home</i>Home</a></li>
  <li><a class="waves-effect" href="leaderboard.php"><i class="material-icons">public</i>Leaderboard</a></li>
  <li><div class="divider"></div></li>
  <li><a class="subheader">Team</a></li>
  <li><a class="waves-effect" href="#!">Contact</a></li>
  <li><a class="waves-effect" href="#!">About Us</a></li>
</ul>