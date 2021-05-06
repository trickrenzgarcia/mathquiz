<?php
session_start();
unset($_SESSION['UserLogin']);
unset($_SESSION['access']);
echo header("Location: index.php");
?>