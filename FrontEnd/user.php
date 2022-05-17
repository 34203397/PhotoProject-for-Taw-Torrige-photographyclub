<?php
//including the header for webdisplay and the details to access the database
include '../config/header.php';
include '../Config/AccessDatabase.php';
$mysqli = new mysqli($host, $my_user, $my_password, $my_db);
$placeholder = $_SESSION['user'];
$sql = "SELECT login.Name AS Name, login.Privilege AS Permission FROM login";
$result = $mysqli->query($sql);
?>
<div class="container text-center" id="privdrop">
<?php
While($row = $result->fetch_assoc())
{
  echo $row["Name"];

?>
<div class="dropdown">
    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
      <?php
      echo $row["Permission"];
      $_SESSION['usrtochange'] = $row["Name"];
      ?>
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="../Admin/admin.php">Complete</a>
      <a class="dropdown-item" href="../Admin/verified.php">Competing</a>
      <a class="dropdown-item" href="../Admin/low.php">New</a>
    </div>
  </div>
<?php
}

?>
</div>

<!--<form action="../Admin/processuser.php" method="post">
    <div class="form-check">
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1">Option 1
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Option 2
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio3">
        <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option3">Option 3
      </label>
    </div>
    <button type="submit" class="btn btn-dark">Submit</button>
  </form>-->
