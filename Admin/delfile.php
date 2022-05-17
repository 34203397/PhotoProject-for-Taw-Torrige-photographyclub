<?php
session_start();

include '../Config/AccessDatabase.php';
$mysqli = new mysqli($host, $my_user, $my_password, $my_db);
if (isset($_POST['delete']));
{
  $usr = ($_SESSION['user']);
  $sql = "DELETE FROM `tawtorridgephotographyclub`.`members` WHERE `members`.`MemID`= '$usr'";
  $result = $mysqli -> query($sql);
  $sql2 = "DELETE FROM `tawtorridgephotographyclub`.`login` WHERE `login`.`MemID` = '$usr'";
  $result2 = $mysqli -> query($sql2);
  header('location: ../FrontEnd/Login.php');
}
?>
