<?php
  if(!isset($_SESSION)){
    session_start();
  }
  include_once("connections/connection.php");
  $con = connection();

  $email = "";
  $errors = array();

  // USER REGISTER
  if(isset($_POST['signup'])){
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

    if(empty($first_name)){ array_push($errors, "First Name is required"); }
    if(empty($last_name)){ array_push($errors, "Last Name is required"); }
    if(empty($email)) { array_push($errors, "Email is required");}
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
      echo array_push($errors, "The two passwords do not match");
    }
    $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($con, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if($user) {
      if($user['email'] === $email) {
        echo array_push($errors, "Email already exists");
      }
    }
    if(count($errors) == 0){
      $password = md5($password_1);
      $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES('$first_name', '$last_name', '$email','$password')";
      $user = $con->query($sql) or die ($con->error);
      $_SESSION['UserLogin'] = $email;
  	  $_SESSION['Access'] = "";
      header('location: index.php');
    }
    
  }

  // USER LOGIN
  if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    if(empty($email)){
      array_push($errors, "Email is required");
    }
    if(empty($password)){
      array_push($errors, "Password is required");
    }
    if(count($errors) == 0){
      $password = md5($password);
      $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
      $user = $con->query($sql) or die ($con->error);
      $row = $user->fetch_assoc();
      $total = $user->num_rows;

      if($total > 0){
        $_SESSION['UserLogin'] = $row['email'];
        $_SESSION['Access'] = $row['access'];

        echo header("Location: index.php");
      } else {
        echo "Wrong email/password combination";
      }
    }

  }
?>