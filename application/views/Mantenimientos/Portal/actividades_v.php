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
    <div id="content" class="content full" style="height: 460px;">
      <div class="container" style="width: 1050px;
                              margin-right: -50;
                              padding-right: 45px;">
            <div class="container">
              <div class="row">
                <div class="[ col-sm-6 col-md-offset-2 col-md-4 ]">
                  <div class="[ info-card ]">
                    <img style="width: 100%" src="<?php echo base_url(); ?>public/img/SAM_9.JPG" />
                    <div class="[ info-card-details ] animate">
                      <div class="[ info-card-header ]">
                        <h1> Robert McIntosh </h1>
                        <h3> aka Mouse0270 </h3>
                      </div>
                      <div class="[ info-card-detail ]">
                        <!-- Description -->
                        <p>The idea of creating something out of nothing has always generated a passion in my heart. This is what lead me to website development. I can literally create little worlds that hopefully thousands of people can see and even experience.</p>
                        <div class="social">
                          <a href="https://www.facebook.com/rem.mcintosh" class="[ social-icon facebook ] animate"><span class="fa fa-facebook"></span></a>

                          <a href="https://twitter.com/Mouse0270" class="[ social-icon twitter ] animate"><span class="fa fa-twitter"></span></a>

                          <a href="https://github.com/mouse0270" class="[ social-icon github ] animate"><span class="fa fa-github-alt"></span></a>

                          <a href="https://plus.google.com/u/0/115077481218689845626/posts" class="[ social-icon google-plus ] animate"><span class="fa fa-google-plus"></span></a>

                          <a href="www.linkedin.com/in/remcintosh/" class="[ social-icon linkedin ] animate"><span class="fa fa-linkedin"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="[ col-sm-6 col-md-4 ]">
                  <div class="[ info-card ]">
                    <img style="width: 100%" src="<?php echo base_url(); ?>public/img/SAM_3.JPG" />
                    <div class="[ info-card-details ] animate">
                      <div class="[ info-card-header ]">
                        <h1> Caroline Samantha</h1>
                        <h3> aka not a real person </h3>
                      </div>
                      <div class="[ info-card-detail ]">
                        <!-- Description -->
                        <p>People often say that beauty is in the eye of the beholder, and I say that the most liberating thing about beauty is realizing that you are the beholder. This empowers us to find beauty in places where others have not dared to look including inside ourselves.</p>
                      </div>
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
  <?php include("includes/js.inc"); ?>
<script>

    jQuery("document").ready(function(){


    $(window).scroll(function(){
      if($(this).scrollTop() > 145){
        $("#menubebe").addClass("fixedmenutop");
        $("#logofixed").css("display","block");
      }else{
        $("#menubebe").removeClass("fixedmenutop");
        $("#logofixed").css("display","none");

      }
    });
  });



   $(document).ready(function(){
              $("#candado").click(function(){
                 $("#login").slideToggle("fast");
              });



            });
</script>
</body>
</html>