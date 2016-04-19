<?php
session_start();
$user_now = $_SESSION["user"];
ini_set("display_errors",1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
$dbhost = "lochnagar.abertay.ac.uk";
$dbuser = "sql1304457";
$dbpass = "QzBnw6uX4Za6";
$dbname = "sql1304457";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno())
{
	echo "Failed to connect: " .mysqli_connect_error();
}

$sql = "UPDATE Web_User SET Balance = Balance + '$_POST[Balance]' WHERE Username = '$user_now'";
if (!mysqli_query($conn,$sql))
{
	die('Error: ' .mysqli_error($conn));
}else{
  include(Balance_get.php);
  header('Location: ../Balance.php');
}

mysqli_close($conn);
?>
