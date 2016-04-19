<?php
session_start();
include('PHP/Get_Ads.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-capable" content="yes">
        <title>Football Ads - Login</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap/css/Extra.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto' type='text/css'>
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

</head>
<header class="page-header" role="banner">
  <a id="log_out" href="login.html">
    <p>Logout</p>
  </a>
</header>
   <section id="sidebar">
     <ul id="list" class="collection-view scroll-view">
       <li><a  href="index.php">Home</a></li>
       <li><a  href="Your_Ads.php">Your Ads</a></li>
       <li><a  href="Balance.php">Balance</a></li>
       <li><a  href="User.php">User Info</a></li>
       <li><a  href="Ads.php">All Ads</a></li>
       <li id="search"><div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div></li>
     </ul>
  </section>

  <section id="main-content">

    <h1 id="login">Upload Ad</h1>
    <form id="form" action="PHP/Upload_Ads.php" method="POST">
      Name: <input type="text" name="Name">
      Price_Buy: <input type="text" name="Price_Buy">
      File Name: <input type="text" name="File_Name">
      <input type="submit">
    </form>

    <div id="ads" style="margin-top: 20px;">
    <a><img style="width: 65px; height: 65px; margin-right: 15px;" src="<?php echo $file_array_user[0] ?>"></a>
    <a><img style="width: 65px; height: 65px; margin-right: 15px;" src="<?php echo $file_array_user[1] ?>"></a>
    <a><img style="width: 65px; height: 65px; margin-right: 15px;" src="<?php echo $file_array_user[2] ?>"></a>
    <a><img style="width: 65px; height: 65px; margin-right: 15px;" src="<?php echo $file_array_user[3] ?>"></a>
    <!-- <a><img style="width: 65px; height: 65px; margin-right: 15px;" src="../Web_Dev/Pics/Celtic.jpg"></a>
    <a><img style="width: 65px; height: 65px; margin-right: 15px;" src="../Web_Dev/Pics/Crystal.jpg"></a>
    <a><img style="width: 65px; height: 65px; margin-right: 15px;" src="../Web_Dev/Pics/Liverpool.jpg"></a> -->

  </section>


</html>
