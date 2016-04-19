<?php
session_start();
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
$user = $_SESSION['user'];

$sql = "SELECT ID FROM Web_User WHERE Username = '$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $ID = $row['ID'];
    }
  }


$sql = "INSERT INTO Web_Ads_Uploaded (Name, User_ID, Price_Buy, File_Name)
VALUES
('$_POST[Name]','$ID','$_POST[Price_Buy]','$_POST[File_Name]')";

if (!mysqli_query($conn,$sql))
{
	die('Error: ' .mysqli_error($conn));
}else{
  header('Location: ../Your_Ads.php');
}

mysqli_close($conn);
?>
