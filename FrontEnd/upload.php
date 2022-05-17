<?php
include '../config/header.php';
include '../Config/AccessDatabase.php';
$mysqli = new mysqli($host, $my_user, $my_password, $my_db);
?>
<!DOCTYPE html>
<html>
<body>
<div class="container" id="up">
<form action="../Admin/proccessimgupload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input class="btn btn-dark" type="file" name="fileToUpload" id="fileToUpload">
  <div class="form-group">
  <label for="usr">Name for the photograph: </label>
  <input type="text" class="form-control" id="usr" name="username">
</div>
  <input class="btn btn-dark" type="submit" value="Upload Image" name="submit">
</form>
</div>
</body>
</html>
