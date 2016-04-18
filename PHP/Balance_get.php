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

//session_start();

$user = $_SESSION['user'];

$sql="SELECT Balance FROM Web_User WHERE Username = '$user'";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
			$balance == $row['Balance'];
			print $balance;
		}
}
mysqli_close($conn);
?>
