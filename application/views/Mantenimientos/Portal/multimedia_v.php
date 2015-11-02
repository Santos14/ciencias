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
<!-- CSS
  ================================================== -->
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
    heigth:800px;
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
    <div id="content" class="content full" style="height: 550px;">
      <div class="container" style="width: 1050px;
                              margin-right: -50;
                              padding-right: 45px;">

<div class="container">
    <div id="main_area">
        <!-- Slider -->
        <div class="row">
            <div class="col-sm-6" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-0">
                            <img src="<?php echo base_url(); ?>public/img/SAM_9322.JPG">
                        </a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-1"><img src="<?php echo base_url(); ?>public/img/SAM_9307.JPG"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-2"><img src="<?php echo base_url(); ?>public/img/SAM_9322.JPG"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-3"><img src="<?php echo base_url(); ?>public/img/SAM_9307.JPG"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-4"><img src="<?php echo base_url(); ?>public/img/SAM_9322.JPG"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-5"><img src="<?php echo base_url(); ?>public/img/SAM_9307.JPG"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-6"><img src="<?php echo base_url(); ?>public/img/SAM_9322.JPG"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-7"><img src="<?php echo base_url(); ?>public/img/SAM_9307.JPG"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-8"><img src="<?php echo base_url(); ?>public/img/SAM_9322.JPG"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-9"><img src="<?php echo base_url(); ?>public/img/SAM_9307.JPG"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-10"><img src="<?php echo base_url(); ?>public/img/SAM_9322.JPG"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-11"><img src="<?php echo base_url(); ?>public/img/SAM_9307.JPG"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-12"><img src="<?php echo base_url(); ?>public/img/SAM_9322.JPG"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-13"><img src="<?php echo base_url(); ?>public/img/SAM_9307.JPG"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-14"><img src="<?php echo base_url(); ?>public/img/SAM_9322.JPG"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-15"><img src="<?php echo base_url(); ?>public/img/SAM_9307.JPG"></a>
                    </li>

                </ul>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img src="<?php echo base_url(); ?>public/img/SAM_9322.JPG"></div>

                                    <div class="item" data-slide-number="1">
                                        <img src="<?php echo base_url(); ?>public/img/SAM_9307.JPG"></div>

                                    <div class="item" data-slide-number="2">
                                        <img src="<?php echo base_url(); ?>public/img/SAM_9322.JPG"></div>

                                    <div class="item" data-slide-number="3">
                                       <img src="<?php echo base_url(); ?>public/img/SAM_9307.JPG"></div>

                                    <div class="item" data-slide-number="4">
                                         <img src="<?php echo base_url(); ?>public/img/SAM_9322.JPG"></div>

                                    <div class="item" data-slide-number="5">
                                        <img src="<?php echo base_url(); ?>public/img/SAM_9307.JPG"></div>

                                    <div class="item" data-slide-number="6">
                                         <img src="<?php echo base_url(); ?>public/img/SAM_9322.JPG"></div>

                                    <div class="item" data-slide-number="7">
                                       <img src="<?php echo base_url(); ?>public/img/SAM_9307.JPG"></div>

                                    <div class="item" data-slide-number="8">
                                         <img src="<?php echo base_url(); ?>public/img/SAM_9322.JPG"></div>

                                    <div class="item" data-slide-number="9">
                                        <img src="<?php echo base_url(); ?>public/img/SAM_9307.JPG"></div>

                                    <div class="item" data-slide-number="10">
                                         <img src="<?php echo base_url(); ?>public/img/SAM_9322.JPG"></div>

                                    <div class="item" data-slide-number="11">
                                        <img src="<?php echo base_url(); ?>public/img/SAM_9307.JPG"></div>

                                    <div class="item" data-slide-number="12">
                                         <img src="<?php echo base_url(); ?>public/img/SAM_9322.JPG"></div>

                                    <div class="item" data-slide-number="13">
                                        <img src="<?php echo base_url(); ?>public/img/SAM_9307.JPG"></div>

                                    <div class="item" data-slide-number="14">
                                         <img src="<?php echo base_url(); ?>public/img/SAM_9322.JPG"></div>

                                    <div class="item" data-slide-number="15">
                                      <img src="<?php echo base_url(); ?>public/img/SAM_9307.JPG"></div>
                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Slider-->
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

</body>
</html>