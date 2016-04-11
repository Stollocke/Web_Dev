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

$sql="INSERT INTO Web_User (ID, Email, Balance, Ads_Uploaded, Ads_Purchased, Password, Username)
  VALUES
  ('$_POST[ID]','$_POST[Email]','$_POST[Balance]','$_POST[Ads_Uploaded]','$_POST[Ads_Purchased]','$_POST[Password]','$_POST[Username]')";

header('Location: ../index.html');

if (!mysqli_query($conn,$sql))
{
	die('Error: ' .mysqli_error($conn));
}
echo "1 record added";

mysqli_close($con);
?>
