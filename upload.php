<?php
  include_once('connections/connection.php');
  
  $con = connection();

  $id = $_SESSION['id'];

  if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name']; # getting name of the file
    $fileTmpName = $_FILES['file']['tmp_name']; # temporary file name
    $fileSize = $_FILES['file']['size']; # size of the file
    $fileError = $_FILES['file']['error']; # error
    $fileType = $_FILES['file']['type']; # file type

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($fileActualExt, $allowed)){
      if($fileError === 0){
        if($fileSize < 1000000){
          $fileNameNew = "profile".$id.".".$fileActualExt;
          $fileDestionation = 'uploads/'.$fileNameNew;
          move_uploaded_file($fileTmpName, $fileDestionation);
          $sql = "UPDATE profile_image SET status=0 WHERE userid='$id'";
          $result = mysqli_query($con, $sql);
          header("Location: index.php?uploadsuccess");
        } else {
          echo "Your file is too big";
        }
      } else {
        echo "There was an error uploading your file!";
      }
    } else {
      echo "You cannot upload files of this type!";
    }

  }
?>