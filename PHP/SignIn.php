<?php
$dbhost = "lochnagar.abertay.ac.uk";
$dbuser = "sql1304457";
$dbpass = "QzBnw6uX4Za6";
$dbname = "sql1304457";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
$user = $_POST['Username'];
$pass = $_POST['Password'];
$_SESSION["user"] = $user;
$_SESSION["Connection"] = $conn;


$sql = "SELECT Username FROM Web_User WHERE Username = '$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

      if($row['Username'] == $user){

        $sql = "SELECT Password FROM Web_User WHERE Username = '$user'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {

            if($row['Password'] == $pass)
            {
              header('Location: ../index.php');
            }
          }
        }
    }
  }
}
$conn->close();
?>
