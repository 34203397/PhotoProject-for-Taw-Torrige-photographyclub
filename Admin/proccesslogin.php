<?php
session_start();
include '../Config/AccessDatabase.php';
//Connect to the database
$conn = new mysqli($host, $my_user, $my_password, $my_db);

$uname = $_POST['username'];
$pword = ($_POST['password']);
$pwd = md5($pword);
// sql to fetch any items in the database that match the variables entered by the user.
$sql = "SELECT * FROM `login` WHERE `Name` = '".$uname."' AND `Password` = '".$pwd."'";
$result = $conn -> query($sql);
$count=mysqli_num_rows($result);
$priv = mysqli_fetch_array($result);
//Code to be built so that it will grab the Privilege field to then determin where the user will be sent or what they will be allowed to do.
if($count==1)
{
	$_SESSION['user'] = "$priv[3]";
	if ($priv[2] == "Complete")
	{
		$_SESSION['Complete'] = "true";
		header('location: ../FrontEnd/index.php');
	}
	else
	{
		$_SESSION['New'] = "true";
		header('location: ../FrontEnd/index.php');
	}
}
else
{
	header('location: ../FrontEnd/login.php');
}
?>
