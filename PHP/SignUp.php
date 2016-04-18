<?php
$dbhost = "lochnagar.abertay.ac.uk";
$dbuser = "sql1304457";
$dbpass = "QzBnw6uX4Za6";
$dbname = "sql1304457";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno())
{
	echo "Failed to connect: " .mysqli_connect_error();
}
session_start();
$user = $_POST['Username'];
$_SESSION["user"] = $user;
$_SESSION["Connection"] = $conn;

$sql="INSERT INTO Web_User (Email, Password, Username)
  VALUES
  ('$_POST[Email]','$_POST[Password]','$_POST[Username]')";

header('Location: ../index.php');

if (!mysqli_query($conn,$sql))
{
	die('Error: ' .mysqli_error($conn));
}
echo "1 record added";

mysqli_close($con);
?>
