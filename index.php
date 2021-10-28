<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uidevr.com/tf/asiapp/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Mar 2021 20:21:26 GMT -->
<head>
<meta charset="UTF-8">
<title>ManagerX - Hakuna </title> 
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
<script src="js/jquery.js"></script>
<script>
  function kosong() {
        alert("Fitur belum ada hehe");
    }
    $(document).ready(function(){
        setInterval(function(){get_data()},2000);
    
        function get_data(){
            jQuery.ajax({
                type:"GET",
                url:"api/api-top3-live.php",
                data:"",
                beforeSend: function(){
                },
                complete:function(){
                },
                success:function(data){
                    $("tbody").html(data);
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
<header id="header">
<div class="nav-wrapper container">


   <div class="header-menu-button">
    <a href="#" data-activates="nav-mobile-category" class="button-collapse" id="button-collapse-category">
    <div class="cst-btn-menu">
      <i class="fas fa-align-left"></i>
    </div>
    </a>
  </div>
  <div class="header-logo">
    <a href="#" class="nav-logo">ManagerX</a>
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
<!-- MAIN SLIDER -->
<div class="main-slider" data-indicators="true">
  <div class="carousel carousel-slider " data-indicators="true">
    <a class="carousel-item"><img src="img/slide.jpg" alt="slider"></a>
    <a class="carousel-item"><img src="img/slide2.jpg" alt="slider"></a>
  </div>
</div>
<!-- END MAIN SLIDER -->
<!-- CATEGORY -->
<div class="section home-category">
  <div class="container">
     
    <div class="row icon-service">
      <div class="col s4 m4 l2"><a class="icon-content" href="list-live.php">
        <div class="content fadetransition">
          <div class="in-content">
            <div class="in-in-content">
              <img src="img/menu/monitoring.png" alt="category">
              <h5>Monitoring</h5>
            </div>
          </div>
        </div></a>
      </div>
      <div class="col s4 m4 l2"><a class="icon-content" href="#" onclick="kosong()">
        <div class="content fadetransition">
          <div class="in-content">
            <div class="in-in-content">
              <img src="img/menu/scanuser.png" alt="category">
              <h5>Scan<br>User</h5>
            </div>
          </div>
        </div></a>
      </div>
      <div class="col s4 m4 l2"><a class="icon-content" href="track-user.php">
        <div class="content fadetransition">
          <div class="in-content">
            <div class="in-in-content">
              <img src="img/menu/trackuser.png" alt="category">
              <h5>Find<br>User</h5>
            </div>
          </div>
        </div></a>
      </div>
      <div class="col s4 m4 l2"><a class="icon-content" href="#" onclick="kosong()">
        <div class="content fadetransition">
          <div class="in-content">
            <div class="in-in-content">
              <img src="img/menu/team.png" alt="category">
               <h5>Create<br>Team</h5>
            </div>
          </div>
        </div></a>
      </div>
      <div class="col s4 m4 l2"><a class="icon-content" href="#" onclick="kosong()">
        <div class="content fadetransition">
          <div class="in-content">
            <div class="in-in-content">
              <img src="img/menu/whatsnext.png" alt="category">
              <h5>What's<br>Next?</h5>
            </div>
          </div>
        </div></a>
      </div>
      <div class="col s4 m4 l2"><a class="icon-content" href="#" onclick="kosong()">
        <div class="content fadetransition">
          <div class="in-content">
            <div class="in-in-content">
              <img src="img/menu/rules.png" alt="category">
              <h5>Term and<br>Condition</h5>
            </div>
          </div>
        </div></a>
      </div>
    </div>
  </div>
</div>
<!-- END CATEGORY -->
<!-- PROMO -->
<div class="section promo">
  <div class="container">
    <div class="col s12">
      <img src="img/etc/promo.png" alt="promo">
    </div>
  </div>
</div>
<!-- END PROMO -->
<!-- NEWS -->
<div class="section list-news">
  <div class="container">
    <div class="row row-title">
      <div class="col s12">
        <div class="section-title">
          <span class="theme-secondary-color">TOP 3 </span>LIVE
        </div>
      </div>
    </div>
    <div class="row row-list-news">
      <div class="col s12">
        <table>
          <tbody>
            <!--TOP 3 LIST-->
          </tbody>
        </table>
                <div class="more-news-list">
          <a class="more-btn" href="list-live.php">See More News &gt;</a>
        </div>
      </div>
    </div>
  </div>
</div>

 

<!-- END NEWS -->

 
<!-- TESTIMONIAL  -->
<div class="section testimonial">
  <div class="testimonial-wrap">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="section-title">
             ADMIN
          </div>
        </div>
      </div>
      <div class="row">
        <div class="wrap-item-testimonial">
          <div id="testimonial-item" class="owl-carousel">
            <!-- item -->
            <div class="item">
              <div class="item-testimonial">
                <div class="client-info">
                  <div class="client-img">
                    <img src="img/etc/admin1.jpg" alt="profile">
                  </div>
                </div>
                <div class="client-content">
                  <p>
                     let's play together!
                  </p>
                  <div class="client-title">
                    <h4>Tupperweird</h4>
                    <h5>Development</h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- end item -->
            <!-- item -->
            <div class="item">
              <div class="item-testimonial">
                <div class="client-info">
                  <div class="client-img">
                    <img src="img/etc/admin2.jpg" alt="profile">
                  </div>
                </div>
                <div class="client-content">
                  <p>
                     Yuhuu !
                  </p>
                  <div class="client-title">
                    <h4>Gavint</h4>
                    <h5>Designer</h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- end item -->
            <!-- item -->

            <!-- end item --></div>
        </div>
      </div>
    </div>
  </div>
  <div class="background-testimonial"></div>
</div>
<!-- END TESTIMONIAL  -->
<!-- SUBSCRIBE -->
<div class="section subscribe">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <div class="section-title">ManagerX</div>
        <p class="center">Hakuna Version 2021</p>
        
      </div>
    </div>
  </div>
  <div class="bg-subscribe">
    <img src="img/etc/bg-footer.jpg">
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
    <!-- 2021 <span>ManagerX</span>, All rights reserved.-->
  </div>
</div>
</footer>
<!-- END FOOTER -->
<!-- Script -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="js/jquery.min.js"></script>
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

<!-- Mirrored from uidevr.com/tf/asiapp/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Mar 2021 20:21:46 GMT -->
</html>