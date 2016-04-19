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

  <section id="main-content" style="width: 45%; float: right;">

    <div id="ads">
    <a><img style="width: 65px; height: 65px; margin-right: 15px;" src="<?php echo $file_array[0] ?>"></a>
    <a><img style="width: 65px; height: 65px; margin-right: 15px;" src="<?php echo $file_array[1] ?>"></a>
    <a><img style="width: 65px; height: 65px; margin-right: 15px;" src="<?php echo $file_array[2] ?>"></a>
    <a><img style="width: 65px; height: 65px; margin-right: 15px;" src="<?php echo $file_array[3] ?>"></a>
    <a><img style="width: 65px; height: 65px; margin-right: 15px;" src="<?php echo $file_array[4] ?>"></a>
    <a><img style="width: 65px; height: 65px; margin-right: 15px;" src="<?php echo $file_array[5] ?>"></a>
    <a><img style="width: 65px; height: 65px; margin-right: 15px;" src="<?php echo $file_array[6] ?>"></a>
    <a><img style="width: 65px; height: 65px; margin-right: 15px;" src="<?php echo $file_array[7] ?>"></a>

  </section>


</html>
