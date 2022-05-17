<?php
include '../Config/AccessDatabase.php';
$mysqli = new mysqli($host, $my_user, $my_password, $my_db);
$placeholder = $_SESSION['user'];
$sql = "SELECT members.Name AS Name, members.TelNo AS TelNo, members.Address AS Address,
login.Password AS Password FROM login,members WHERE login.MemID = members.MemID AND login.MemID = '$placeholder'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
?>
