<?php
session_start();
$dbhost = "lochnagar.abertay.ac.uk";
$dbuser = "sql1304457";
$dbpass = "QzBnw6uX4Za6";
$dbname = "sql1304457";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno())
{
	echo "Failed to connect: " .mysqli_connect_error();
}

$user = $_POST['Username'];
$pass = $_POST['Password'];
$mail = $_POST['Email'];
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
$_SESSION["mail"] = $mail;

$sql="INSERT INTO Web_User (Email, Password, Username)
  VALUES
  ('$_POST[Email]','$_POST[Password]','$_POST[Username]')";

if (!mysqli_query($conn,$sql))
{
	die('Error: ' .mysqli_error($conn));
}else{
	echo "1 record added";
	header('Location: ../index.php');
}

mysqli_close($con);
?>
