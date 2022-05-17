<?php
session_start();
include '../Config/AccessDatabase.php';
$mysqli = new mysqli($host, $my_user, $my_password, $my_db);
if(isset($_POST['create']))
{
$name = ($_POST['Name']);
$telno = ($_POST['TelNo']);
$addr = ($_POST['Address']);
$pwd = ($_POST['Password']);
$pword = md5($pwd);
$sql2 = "INSERT INTO `tawtorridgephotographyclub`.`login` (`Name`, `Password`, `Privilege`, `MemID`) VALUES ('$name', '$pword', 'New', '')";
$result2 = $mysqli -> query($sql2);
$last_id = $mysqli->insert_id;

$sql = "INSERT INTO `tawtorridgephotographyclub`.`members` (`MemID` ,`Name` ,`TelNo` ,`Address`)VALUES ('$last_id', '$name', '$telno', '$addr')";
$result = $mysqli -> query($sql);
header('location: ../FrontEnd/Login.php');
}
else {
header('location: ../FrontEnd/Login.php');
}
?>
