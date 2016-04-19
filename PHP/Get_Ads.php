<?php
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
$sql="SELECT ID FROM Web_User WHERE Username = '$user'";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
			$ID = $row['ID'];
			$_SESSION["ID"] = $ID;
		}
}
$Current_ID = $_SESSION["ID"];

$sql="SELECT File_Name FROM Web_Ads_Uploaded WHERE User_ID = '$Current_ID'";
$result = mysqli_query($conn, $sql);
$file_array_user = array();
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		array_push($file_array_user, $row['File_Name']);
	}
	return $file_array_user;
}


$sql = "SELECT File_Name FROM Web_Ads_Uploaded";
$result = mysqli_query($conn, $sql);
$file_array = array();
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		array_push($file_array, $row['File_Name']);
	}
	return $file_array;
}
mysqli_close($conn);
?>
