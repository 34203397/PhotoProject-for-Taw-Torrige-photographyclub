<?php
session_start();
include '../Config/AccessDatabase.php';
$mysqli = new mysqli($host, $my_user, $my_password, $my_db);
if (isset($_POST['update']))
{
  $upd = $_POST['update'];
  $name = ($_POST['Name']);
  $telno = ($_POST['TelNo']);
  $addr = ($_POST['Address']);
  $pword = ($_POST['Password']);
  $pwd = md5($pword);
  $usr = ($_SESSION['user']);
  $sql = "UPDATE `tawtorridgephotographyclub`.`members` SET `Name` = '$name', `TelNo` = '$telno',`Address` = '$addr' WHERE `members`.`MemID` = '$usr'";
  $result = $mysqli -> query($sql);
  $sql2 = "UPDATE `tawtorridgephotographyclub` . `login` SET `Name` = '$name', `Password` = '$pwd' WHERE `login`.`MemID` = '$usr'";
  $result2 = $mysqli -> query($sql2);
  header('location: ../FrontEnd/Login.php');
}
else{
  header('location: ../FrontEnd/Login.php');
}
?>
