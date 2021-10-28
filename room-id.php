<?php
session_start();
$idlive=$_GET['idroom'];
$_SESSION['idhost']=$idlive;
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uidevr.com/tf/asiapp/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Mar 2021 20:22:32 GMT -->
<head>
<meta charset="UTF-8">
<title>ManagerX - Hakuna</title> 
<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="HandheldFriendly" content="True">
<link rel="icon" href="img/etc/favicon.ico" type="image/x-icon">
<!-- CSS  -->
<link rel="stylesheet" href="lib/font-awesome/web-fonts-with-css/css/fontawesome-all.css">
<link rel="stylesheet" href="css/materialize.min.css">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/style.css">
<!-- materialize icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Owl carousel -->
<link rel="stylesheet" href="lib/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="lib/owlcarousel/assets/owl.theme.default.min.css">
<!-- Slick CSS -->
<link rel="stylesheet" type="text/css" href="lib/slick/slick/slick.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick/slick-theme.css">
<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="lib/Magnific-Popup-master/dist/magnific-popup.css">
<script src="assets/script.js"></script> 
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script>
function kosong() {  
   alert("Fitur belum ada hehe");
}
function cari(){
  alert("Loading dulu sabar");
}
$(document).ready(function(){
    setInterval(function(){get_data()},2000);
    function get_data(){
        jQuery.ajax({
            type:"GET",
            url:"api/api-room.php",
            data:"",
            beforeSend: function(){
                
            },
            complete:function(){
            },
            success:function(data){
                $("#listnya").html(data);
            }
        });
    
      }
});
</script>
</head>
<body id="homepage">
<!-- BEGIN PRELOADING -->
<div class="preloading">
  <div class="wrap-preload">
    <div class="cssload-loader"></div>
  </div>
</div>
<!-- END PRELOADING -->
<!-- HEADER -->
<header id="header" class="header-innerpage ">
<div class="nav-wrapper container">


   <div class="header-menu-button">
    <a href="#" data-activates="nav-mobile-category" class="button-collapse" id="button-collapse-category">
    <div class="cst-btn-menu">
      <i class="fas fa-align-left"></i>
    </div>
    </a>
  </div>
  <div class="header-logo">
    <a href="index.php" class="nav-logo">ManagerX</a>
  </div>
     <div class="header-icon-menu">
    <a href="#" data-activates="nav-mobile-account" class="button-collapse" id="button-collapse-account"><i class="fas fa-search"></i></a>
  </div>
 
 
  
</div>
</header>
<!-- END HEADER -->
<!-- SIDE NAV-->
<nav>

<!-- LEFT SIDENAV-->
<ul id="nav-mobile-category" class="side-nav">
  <li class="profile">
    <div class="li-profile-info">
      <img src="img/etc/profile1.jpg" alt="profile">
      <h2>ManagerX</h2>
    
    </div>
    <div class="bg-profile-li">
      <img alt="photo" src="img/etc/pattern.jpg">
    </div>
  </li>
  <li>
    <a class="waves-effect waves-blue" href="index.php"><i class="fas fa-home"></i>Home</a>
  </li>
  <li>
    <a href="list-live.php"><i class="fas fa-newspaper"></i>Monitoring</a>
  </li>
  <li>
    <ul class="collapsible collapsible-accordion">
      <li>
        <div class="collapsible-header">
          <i class="far fa-newspaper"></i>Toys<span><i class="fas fa-caret-down"></i></span>
        </div>
        <div class="collapsible-body">
          <ul>
            <li>
              <a class="waves-effect waves-blue" href="#" onclick="kosong()"><i class="fas fa-angle-right"></i>Scan User</a>
            </li>
            <li>
              <a class="waves-effect waves-blue" href="track-user.php"><i class="fas fa-angle-right"></i>Track User</a>
            </li>
            <li>
              <a class="waves-effect waves-blue" href="#" onclick="kosong()"><i class="fas fa-angle-right"></i>Create Team</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li>
    <a href="#" onclick="kosong()"><i class="fas fa-cog"></i>Setting</a>
  </li> 
</ul>
<!-- END LEFT SIDENAV-->
<!-- RIGHT SIDENAV-->
<ul id="nav-mobile-account" class="side-nav">
  <li class="sidenav-logo">
     Search
  </li>
  <li>
    <div class="search-wrapper ">
      <input id="search"><i class="material-icons">search</i>
      <div class="search-results"></div>
    </div>
  </li>
  <li>
    <ul class="sidenav-search-result">
      <li class="search-result-head"><a href="#">Search</a></li>
      <li><a href="#">Info: Search Belum aktif</a></li> 
    </ul>
  </li>
</ul>
<!-- END RIGHT SIDENAV-->


</nav>
<!-- END SIDENAV-->



<!-- CONTENT -->
<div id="page-content" class="shipping-checkout-page">
  <div class="cart-page">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="section-title">
            <span class="theme-secondary-color">LISTENERS </span>
            ROOM</div>
        </div>
      </div>
      <div class="row">
        <form class="col s12" action="api/api-track-user.php" method="post" target="bawah">

          <div class="billing-detail-wrap ck-box">
            <div id="listnya" class="row">
              <!-- LISTENERS -->
            </div>
          <div class="row">
            <div class="input-field col s12 m12 l12 center">
              <a href="list-live.php"><button id="btn-refresh" class="btn theme-btn-rounded" type="button">Back</button></a>
            </div>
          </div>
          </div>
          </div>
        </form>
      </div>
      <br>
    </div>
  </div>
</div>
<!-- END CONTENT -->
 
   <!-- PAGINATION -->
   <div class="container">
    <div class="row">
      <div class="col s12">
        <ul class="pagination">

        </ul>
      </div>
    </div>
  </div>
  <!-- END PAGINATION --></div>
</div>
<!-- END CONTENT -->




<!-- SUBSCRIBE -->
<div class="section subscribe">
<div class="container">
  <div class="row">
    <div class="col s12">
      <div class="section-title">ManagerX</div>
      <div class="mail-subscribe-box">
      <p class="center">This Page Is Monitoring Live on Hakuna App</p>
      <p class="center">and this is demo version</p>
      <p class="center">I hope you can enjoy with any features</p>
      <p class="center">and waiting for the next features.</p>

      </div>
    </div>
  </div>
</div>
<div class="bg-subscribe">
  <img src="img/etc/bg-footer.jpg" alt="product">
</div>
</div>
<!-- END SUBSCRIBE -->
<!-- FOOTER  -->
<footer id="footer">
<div class="container">
<div class="row row-footer-icon">
  <div class="col s12">
  </div>
</div>
<div class="row copyright">
   2021 <span>ManagerX</span>, All rights reserved.
</div>
</div>
</footer>
<!-- END FOOTER -->
<!-- Script -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="js/materialize.min.js"></script>
<!-- Owl carousel -->
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<!-- Magnific Popup core JS file -->
<script src="lib/Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>
<!-- Slick JS -->
<script src="lib/slick/slick/slick.min.js"></script>
<!-- Custom script -->
<script src="js/custom.js"></script>
</body>

<!-- Mirrored from uidevr.com/tf/asiapp/wish-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Mar 2021 20:22:31 GMT -->
</html>