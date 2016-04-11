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

<script>
  function home()
  {
    $("#main-content").html("");
    $("#display").append('\
    <h1>"Home"</h1>\
  <section class="button-group">\
  <p>Welcome</p>\
  </section>\
  ');
}

  function ads()
  {
    $("#main-content").html("");
    $("#main-content").append('\
    <section>\
    <div id="ads">\
    <a href="../Project/Pics/Eintracht.png" title="Eintracht" data-gallery="">\
    <img style="width: 65px; height: 65px; margin-right: 15px;" src="../Project/Pics/Eintracht.png"></a>\
    <a href="../Project/Pics/Bayern.png" title="Bayern" data-gallery="">\
    <img style="width: 65px; height: 65px; margin-right: 15px;" src="../Project/Pics/Eintracht.png"></a>\
    <a href="../Project/Pics/United.jpg" title="United" data-gallery="">\
    <img style="width: 65px; height: 65px; margin-right: 15px;" src="../Project/Pics/Eintracht.png"></a>\
    <a href="../Project/Pics/Crystal.jpg" title="Crystal" data-gallery="">\
    <img style="width: 65px; height: 65px; margin-right: 15px;" src="../Project/Pics/Eintracht.png"></a>\
    </section>\
    ');
  }

  function balance()
  {
    $("#main-content").html("");
    $("#main-content").append('\
    Add Balance: <input type="text" name="Username">\
    <input type="submit">\
    <p id="balance"> Current Balance: '<?php echo("HELLO");?>'</p>');
  }

  function user()
  {
    $("#main-content").html("");
    $("#main-content").append('\
    <section>\
    <div id="ads">\
    </section>\
    ');
  }

  function all()
  {
    $("#main-content").html("");
    $("#main-content").append('\
    <section>\
    <div id="ads">\
    \
    </section>\
    ');
  }
</script>
</head>
<header class="page-header" role="banner">
  <a id="log_out" href="login.html">
    <p>Logout</p>
  </a>
</header>
   <section id="sidebar">
     <ul id="list" class="collection-view scroll-view">
       <li onclick="home();">Home</li>
       <li onclick="ads();">Your Ads</li>
       <li onclick="balance();">Balance</li>
       <li onclick="user();">User Info</li>
       <li onclick="all();">All Ads</li>
       <li id="search"><div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div></li>
     </ul>
  </section>

  <section id="main-content">

    <p>Welcome</p>

  </section>


</html>
