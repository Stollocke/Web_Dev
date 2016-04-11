<script>
var extra = {

  home: function()
  {
    $("#main-content").html("");
    $("#display").append('\
    <h1>"Home"</h1>\
  <section class="button-group">\
  <p>Welcome</p>\
  </section>\
  ');
},

  ads: function()
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
  },

  balance: function()
  {
    $("#main-content").html("");
    $("#main-content").append('\
    <section>\
    Username: <input type="text" name="Username">\
    <p id="balance">'+<?php include "Balance.php"?>+'</p>\\
    </section>\
    ');
  },

  user: function()
  {
    $("#main-content").html("");
    $("#main-content").append('\
    <section>\
    <div id="ads">\
    </section>\
    ');
  },

  all: function()
  {
    $("#main-content").html("");
    $("#main-content").append('\
    <section>\
    <div id="ads">\
    \
    </section>\
    ');
  },

}
</script>
