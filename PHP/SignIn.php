<?php
$dbhost = "lochnagar.abertay.ac.uk";
$dbuser = "sql1304457";
$dbpass = "QzBnw6uX4Za6";
$dbname = "sql1304457";
$conn = mysql_connect($dbhost, $dbuser, $dbpass, $dbname);
ini_set("display_errors",1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);


session_start();

$user = $_POST['Username'];
$pass = $_POST['Password'];

$_SESSION["user"] = $user;

die(var_dump($_SESSION));

// $sql="SELECT Username, Password FROM Web_User WHERE Username = '".$user"'";
// $result = mysql_query($sql);
// if($result == false)
// {
//   $sql="SELECT Password FROM Web_User WHERE Password = '".$pass."'")
//   $result = mysql_query($sql);
//     if($result == false)
//     {
//       header('Location: ../index.html');
//     }
//     else {
//       var_dump($result);
//     }
// }
// else {
//   var_dump($result);
// }

mysql_close($conn);
?>
