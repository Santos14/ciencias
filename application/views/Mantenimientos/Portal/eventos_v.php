<!DOCTYPE HTML>
<html>
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Institución Educativa Particular Ciencias</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
  <?php include("includes/css.inc"); ?>
<!-- SCRIPTS
  ================================================== -->
<script src="js/modernizr.js"></script><!-- Modernizr -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>
$(document).ready(function(){
  $('.slider1').bxSlider({
    slideWidth: 200;
    minSlides: 2;
    maxSlides: 3;
    slideMargin: 10;
  });
});




</script>
</head>
<body class="boxed" >
<div class="body" style="
    width: 1020px;
    margin-left: 164.5;
    margin-right: 164.5">
  <!-- Start Site Header -->
  <header class="site-header">
    <div class="topbar ">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-8">
            <h1 class="logo"> <a href="index.html">
            <img style="height:70%;" src="<?php echo base_url(); ?>public/img/logo.png" alt="Logo"></a>
             </h1>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-4">
            <!-- <ul class="top-navigation hidden-sm hidden-xs">
              <li><a href="plan-visit.html">Plan your visit</a></li>
              <li><a href="events-calendar.html">Calendar</a></li>
              <li><a href="donate.html">Donate Now</a></li>
            </ul> -->
            <a href="index.html#" class="visible-sm visible-xs menu-toggle"><i class="fa fa-bars"></i></a> </div>
        </div>
      </div>
    </div>
    <div class="main-menu-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <section class="wrapper">
            <nav id="menubebe" class="navigation">
              <ul class="sf-menu navi">
              <li style="float:left;">
                 <img style="height:50px;display:none;" src="<?php echo base_url(); ?>public/img/logo.png" alt="Logo" id="logofixed">
              </li>

                  <li><a href="<?php echo base_url(); ?>Portal_c">Inicio</a>
                   </li>
                   <li><a href="<?php echo base_url(); ?>Portal_c/vistas/nosotros">Nosotros</a>
                   </li>
                   <li><a href="<?php echo base_url(); ?>Portal_c/vistas/eventos">Eventos</a>
                   </li>
                   <li><a href="<?php echo base_url(); ?>Portal_c/vistas/noticias">Noticias</a>
                   </li>
                   <li><a href="<?php echo base_url(); ?>Portal_c/vistas/actividades">Actividades</a>
                   </li>
                   <li><a href="<?php echo base_url(); ?>Portal_c/vistas/multimedia">Multimedia</a>
                   </li>
                    <?php if(isset($_SESSION["usuario"])){?>
                    <li><a href="<?php echo base_url(); ?>Principal_c">Sistema</a>
                   </li>
                   <?php }?>
                <li><i id="candado" class="fa fa-lock fa-lg" style="color: white;"></i>
                </li>
              </ul>
            </nav>
          </section>
          </div>
        </div>
      </div>
    </div>
  </header>
  <br>


<form method="post" action="<?php echo base_url(); ?>Portal_c/autentificar"  name="formLogin" id="login">


    <label>Usuario</label>
    <input type="text" id="usuario" name="usuario" placeholder="ingrese usuario">

    <label>Contraseña</label>
    <input type="text" id="pass" name="pass" placeholder="ingrese contraseña">
    <center><input id="btnLogin" type="submit" value="INGRESAR"></center>
  </form>

  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9" style="float: left;">
            <!-- Events Listing -->
            <header>
                <h3>EVENTOS PRÓXIMOS</h3>
            </header>
                  <ul class="event-list">
                    <li>
                        <time datetime="2014-07-20">
                            <span class="day">4</span>
                            <span class="month">Jul</span>
                            <span class="year">2014</span>
                            <span class="time">ALL DAY</span>
                        </time>
                        <img alt="Independence Day" src="https://farm4.staticflickr.com/3100/2693171833_3545fb852c_q.jpg" />
                        <div class="info">
                            <h2 class="title">Independence Day</h2>
                            <p class="desc">United States Holiday</p>
                        </div>
                        <div class="social">
                            <ul>
                                <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <time datetime="2014-07-20 0000">
                            <span class="day">8</span>
                            <span class="month">Jul</span>
                            <span class="year">2014</span>
                            <span class="time">12:00 AM</span>
                        </time>
                        <div class="info">
                            <h2 class="title">One Piece Unlimited World Red</h2>
                            <p class="desc">PS Vita</p>

                        </div>
                        <div class="social">
                            <ul>
                                <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <time datetime="2014-07-20 2000">
                            <span class="day">20</span>
                            <span class="month">Jan</span>
                            <span class="year">2014</span>
                            <span class="time">8:00 PM</span>
                        </time>
                        <img alt="My 24th Birthday!" src="https://farm5.staticflickr.com/4150/5045502202_1d867c8a41_q.jpg" />
                        <div class="info">
                            <h2 class="title">Mouse0270's 24th Birthday!</h2>
                            <p class="desc">Bar Hopping in Erie, Pa.</p>

                        </div>
                        <div class="social">
                            <ul>
                                <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <time datetime="2014-07-31 1600">
                            <span class="day">31</span>
                            <span class="month">Jan</span>
                            <span class="year">2014</span>
                            <span class="time">4:00 PM</span>
                        </time>
                        <img alt="Disney Junior Live On Tour!" src="http://www.thechaifetzarena.com/images/main/DL13_PiratePrincess_thumb.jpg" />
                        <div class="info">
                            <h2 class="title">Disney Junior Live On Tour!</h2>
                            <p class="desc"> Pirate and Princess Adventure</p>
                        </div>
                        <div class="social">
                            <ul>
                                <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>


          </div>
          <!-- Start Sidebar -->
          <div class="col-md-3 sidebar">
            <div class="widget-upcoming-events widget">
             <!-- Featured Event Widget -->
            <div class="widget featured_event_widget">
              <div class="sidebar-widget-title">
                <h3>EVENTOS</h3>
              </div>
             <div id="datepicker"></div>
            <!-- Upcoming Events Widget -->
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Categoria de Eventos</h3>
              </div>
              <ul>
                <li><a href="events.html#">Exámenes</a> (9)</li>
                <li><a href="events.html#">ADeporte</a> (24)</li>
                <li><a href="events.html#">Reuniones</a> (13)</li>
                <li><a href="events.html#">Otros</a> (23)</li>
              </ul>
            </div>
            <!-- Recent Posts Widget -->
            <!-- Recent Comments Widget -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="site-footer-bottom"style="height: 90px;background:#7F0000">
    <div class="container">
      <div class="row">
        <div class="copyrights-col-left col-md-6 col-sm-6">
          <p style="padding-top: 20px;">&copy; 2015 Ciencias. All Rights Reserved</p>
        </div>
        <div class="copyrights-col-right col-md-6 col-sm-6">
           <ul class="social-network social-circle ">
                        <li><a href="https://www.facebook.com/Colegio-Ciencias-Tarapoto-294043034018618/timeline/" class="icoFacebook " title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/117121307107938522047/about" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCZHhseDRi1jm4VXL5yUTePQ" class="icoYoutube" title="Youtube"><i class="fa fa-youtube"></i></a></li>

                    </ul>


      </div>
    </div>
  </footer>
  <!-- End Footer
  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> -->
</div>
 <!-- Jquery Library Call -->
<?php include("includes/js.inc"); ?>
<script>

  </script>
</body>
</html>