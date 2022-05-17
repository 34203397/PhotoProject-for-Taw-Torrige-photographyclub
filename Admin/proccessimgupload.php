<?php
session_start();
$target_dir = "../Admin/img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$usr = $_SESSION['user'];
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
  {
    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";

    include '../Config/AccessDatabase.php';
    $conn = new mysqli($host, $my_user, $my_password, $my_db);
      $Title = $_POST['username'];
      $sql = "INSERT INTO `entries` (`EntryID` , `ImageID` , `filepath` , `MemID`) VALUES ('' , '".$Title."', '".$target_file."' , '".$usr."')";
    $result = $conn -> query($sql);
    header('location: ../FrontEnd/upload.php');
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
