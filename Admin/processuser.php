
<?php
session_start();
echo $_SESSION['usrtochange'];
/*include '../Config/AccessDatabase.php';
$mysqli = new mysqli($host, $my_user, $my_password, $my_db);
$usr = $_SESSION['usrtochange'];
$sql = "UPDATE `tawtorridgephotographyclub`.`login` SET `Privilege` = 'New' WHERE `login`.`Name` = '$usr'";
$result = $mysqli -> query($sql);
header('location: ../FrontEnd/user.php');

session_start();
include '../Config/AccessDatabase.php';
$mysqli = new mysqli($host, $my_user, $my_password, $my_db);
$usr = $_SESSION['usrtochange'];
$sql = "UPDATE `tawtorridgephotographyclub`.`login` SET `Privilege` = 'Compete' WHERE `login`.`Name` = '$usr'";
$result = $mysqli -> query($sql);
header('location: ../FrontEnd/user.php');

session_start();
include '../Config/AccessDatabase.php';
$mysqli = new mysqli($host, $my_user, $my_password, $my_db);
$usr = $_SESSION['usrtochange'];
$sql = "UPDATE `tawtorridgephotographyclub`.`login` SET `Privilege` = 'Complete' WHERE `login`.`Name` = '$usr'";
$result = $mysqli -> query($sql);
header('location: ../FrontEnd/user.php');*/
?>
