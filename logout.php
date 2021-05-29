<?php
session_start();
unset($_SESSION['UserLogin']);
unset($_SESSION['FirstName']);
unset($_SESSION['LastName']);
unset($_SESSION['Access']);
session_destroy();
echo header("Location: index.php");
?>