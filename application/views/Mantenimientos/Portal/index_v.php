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
        <div class="row" >
          <div class="col-md-4 col-sm-6 col-xs-8">
            <h1 class="logo"> <a href="index.html">
            <img style="height:70%;" src="<?php echo base_url(); ?>public/img/logo.png" alt="Logo"></a>
             </h1>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-4">
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
    <form method="post" action="<?php echo base_url(); ?>Portal_c/autentificar"  name="formLogin" id="login">


    <label>Usuario</label>
    <input type="text" id="usuario" name="usuario" placeholder="ingrese usuario">

    <label>Contraseña</label>
    <input type="password" id="pass" name="pass" placeholder="ingrese contraseña">
    <center><input id="btnLogin" type="submit" value="INGRESAR"></center>
  </form>

  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full" style="height: 960px;">
      <div class="container" style="width: 1050px;
                              margin-right: -50;
                              padding-right: 45px;">
        <div class="row" style="height: 155px;">
          <!-- Start Featured Blocks -->
          <div class="featured-blocks clearfix">
            <div class="col-md-3 col-sm-4 featured-block"><strong>Talleres</strong> <span class="more">Ver mas</span></a>
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->

                <!-- Wrapper for slides -->
                <div class="carousel-inner " role="listbox" >
                  <div class="item active">
                    <img src="<?php echo base_url(); ?>public/img/bg-1.jpg" alt="Chania">
                  </div>

                  <div class="item">
                    <img src="<?php echo base_url(); ?>public/img/bg-2.jpg" alt="Chania">
                  </div>

                  <div class="item">
                    <img src="<?php echo base_url(); ?>public/img/bg-3.jpg" alt="Flower">
                  </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Siguiente</span>
                </a>
              </div>
            </div>
            <div class="col-md-3 col-sm-4 featured-block"> <a href="#" class="img-thumbnail"> <img src="<?php echo base_url(); ?>public/img/newhere.jpg" alt="staff"> <strong>Matriculate Ya!</strong> <span class="more">01 Marzo 2015</span></a>
            </div>


            <div class="col-md-3 col-sm-4 featured-block"><strong>Infraestructura</strong> <span class="more">Ver mas</span></a>
              <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="<?php echo base_url(); ?>public/img/bg-1.jpg" alt="Chania">
                  </div>

                  <div class="item">
                    <img src="<?php echo base_url(); ?>public/img/bg-2.jpg" alt="Chania">
                  </div>

                  <div class="item">
                    <img src="<?php echo base_url(); ?>public/img/bg-3.jpg" alt="Flower">
                  </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </a>
                <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Siguiente</span>
                </a>
              </div>
            </div>

            <div class="col-md-3 col-sm-4 featured-block"><strong>Actividades</strong> <span class="more">Ver mas</span></a>
              <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="<?php echo base_url(); ?>public/img/bg-1.jpg" alt="Chania">
                  </div>

                  <div class="item">
                    <img src="<?php echo base_url(); ?>public/img/bg-2.jpg" alt="Chania">
                  </div>

                  <div class="item">
                    <img src="<?php echo base_url(); ?>public/img/bg-3.jpg" alt="Flower">
                  </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </a>
                <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Siguiente</span>
                </a>
              </div>
            </div>
          </div>
          <!-- End Featured Blocks -->
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-3"style="padding-left: 10px;padding-right: 5px">
            <!-- Events Li5ting -->
            <div class="listing events-listing">
              <header class="listing-header" style="height:38px">
                <h3>Pr&oacute;ximos Eventos</h3>
              </header>
              <section class="listing-cont">
              <ul>
              <li class="item event-item "style="width: 300px;height: 54px">
                    <div class="event-date"> <span class="date">03</span> <span class="month">Oct</span> </div>
                    <div class="event-detail"style="width: 180px;">
                      <h4><a href="#" style="width: 200px;padding-left: 8px;">Kermes Deportiva</a></h4>
                      <span class="event-dayntime meta-data"style="padding-left:8px;">Sabado | 10:00 AM</span> </div>
                    <div class="to-event-url">
                      <div><a href="#" class="btn btn-default btn-sm">Detalles</a></div>
                    </div>
                  </li>
                  <li class="item event-item "style="width: 300px;height: 54px">
                    <div class="event-date"> <span class="date">03</span> <span class="month">Oct</span> </div>
                    <div class="event-detail"style="width: 180px;">
                      <h4><a href="#" style="width: 200px;padding-left: 8px;">Kermes Deportiva</a></h4>
                      <span class="event-dayntime meta-data"style="padding-left:8px;">Sabado | 10:00 AM</span> </div>
                    <div class="to-event-url">
                      <div><a href="#" class="btn btn-default btn-sm">Detalles</a></div>
                    </div>
                  </li>
                  <li class="item event-item "style="width: 300px;height: 54px">
                    <div class="event-date"> <span class="date">03</span> <span class="month">Oct</span> </div>
                    <div class="event-detail"style="width: 180px;">
                      <h4><a href="#" style="width: 200px;padding-left: 8px;">Kermes Deportiva</a></h4>
                      <span class="event-dayntime meta-data"style="padding-left:8px;">Sabado | 10:00 AM</span> </div>
                    <div class="to-event-url">
                      <div><a href="#" class="btn btn-default btn-sm">Detalles</a></div>
                    </div>
                  </li>
                  <li class="item event-item "style="width: 300px;height: 54px">
                    <div class="event-date"> <span class="date">03</span> <span class="month">Oct</span> </div>
                    <div class="event-detail"style="width: 180px;">
                      <h4><a href="#" style="width: 200px;padding-left: 8px;">Kermes Deportiva</a></h4>
                      <span class="event-dayntime meta-data"style="padding-left:8px;">Sabado | 10:00 AM</span> </div>
                    <div class="to-event-url">
                      <div><a href="#" class="btn btn-default btn-sm">Detalles</a></div>
                    </div>
                  </li>
              </ul>
              </section>
            </div>
          </div>

            <div class="col-md-4 col-sm-3" style="padding-left: 3px;padding-right: 3px">
                <header class="listing-header"style="height:38px">
                  <h3>Noticias</h3>
                </header>
                <section class="listing-cont">
                <marquee height="210" direction="up" SCROLLDELAY="200"onmouseout="this.start();" onmouseover="this.stop();">
                    <div id="blog">
                       <img src="<?php echo base_url(); ?>public/img/blog-image2.jpg" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail" style="height:100px; width:130px ">
                          <article ><p>
                         <a href="noticias.html">CAMPEÓN DE MATEMÁTICAS</a>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                         </p></article>
                         <br>
                       <img src="<?php echo base_url(); ?>public/img/blog-image2.jpg" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail" style="height:100px; width:130px ">
                          <article ><p>
                         <a href="noticias.html">CAMPEÓN DE MATEMÁTICAS</a>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                         </p></article>
                          <br>
                       <img src="<?php echo base_url(); ?>public/img/blog-image2.jpg" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail" style="height:100px; width:130px ">
                          <article ><p>
                         <a href="noticias.html">CAMPEÓN DE MATEMÁTICAS</a>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                         </p></article>
                          <br>
                       <img src="<?php echo base_url(); ?>public/img/blog-image2.jpg" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail" style="height:100px; width:130px ">
                          <article ><p>
                         <a href="noticias.html">CAMPEÓN DE MATEMÁTICAS</a>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                         </p></article>
                    </div>
                    <br>

             </marquee>
              </section>
            </div>

            <div class="row" ><!--  -->
              <div class="col-md-4 col-sm-3"style="padding-left: 5px;padding-right: 15px">
                <div class="listing sermons-listing">
                  <header class="listing-header"style="height:38px">
                    <h3>Contáctenos</h3>
                  </header>
                  <section class="listing-cont">
                    <div class="fb-page" data-href="https://www.facebook.com/Colegio-Ciencias-Tarapoto-294043034018618/timeline/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
                </div>
              </div>
            </div>
           <div class="col-md-8 col-sm-3">
                     <header class="listing-header"style="height:38px">
                      <h3 style="padding-top: 8px;">Actividades</h3>
                      </header>
                     <section class="listing-cont">
                       <div class="container">
                          <div class="row" style="height:170px">
                       <marquee width="630" height="178" align="bottom">
                        <div class="container">
                            <div class="row" id="imagen" >
                              <div class="col-md-3 col-sm-3 col-xs-6"><img class="imagen img-responsive" src="<?php echo base_url(); ?>public/img/FOTO_1.jpg" /></div>
                              <div class="col-md-3 col-sm-3 col-xs-6"><img  class="imagen img-responsive" src="public/img/FOTO_2.jpg" /></div>
                              <div class="col-md-3 col-sm-3 col-xs-6"><img class="imagen imagen-responsive" src="public/img/FOTO_3.jpg"/></div>
                              <div class="col-md-3 col-sm-3 col-xs-6"><img class="imagen img-responsive" src="public/img/FOTO_4.jpg" /></div>
                              </div>
                          </div>
                          </marquee>
                        </div>
                        </div>
                        </section>
                    </div>
                    <div class="col-md-4 col-sm-3">
                      <header class="listing-header" style="height:38px">
                        <h3>Ubícanos</h3>
                      </header>
                      <div class="listing sermons-listing">
                          <iframe style="height: 170px;" width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1982.1641358118898!2d-76.36217292023856!3d-6.4800430584434645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ba0c005e3c4e85%3A0x3017960d1a3f0e31!2sInstitucion+Educativa+Particular+Ciencias!5e0!3m2!1ses-419!2spe!4v1443460411038"></iframe>
                      </div>
                    </div>
    </div>

        <div class="featured-gallery"style="padding-bottom: 20px;padding-top: 20px;">
          <div class="container">
            <div class="row"style="width: 990px;">
              <div class="col-md-3 col-sm-3">
                <h4>MULTIMEDIA</h4>
                <a href="index.html#" class="btn btn-default btn-lg">Ver M&aacute;s</a> </div>
                  <div class="col-md-3 col-sm-3 post format-video"> <a href="https://www.youtube.com/watch?v=3I05VTxmXkU" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="<?php echo base_url(); ?>public/img/gallery-img4.jpg" alt=""> </a> </div>
                  <div class="col-md-3 col-sm-3 post format-video"> <a href="https://www.youtube.com/watch?v=3KFdXVpXD-4" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="<?php echo base_url(); ?>public/img/gallery-img5.jpg" alt=""> </a> </div>
                   <div class="col-md-3 col-sm-3 post format-video"> <a href="https://www.youtube.com/watch?v=CC5fI4Kpt2s&feature=youtu.be" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="<?php echo base_url(); ?>public/img/gallery-img6.jpg" alt=""> </a> </div>
            </div>
          </div>
         </div>

  <footer class="site-footer-bottom"style="height: 90px;">
    <div class="container">
      <div class="row">
        <div class="copyrights-col-left col-md-6 col-sm-6">
          <p style="padding-top: 20px;">&copy; 2015 Ciencias. All Rights Reserved</p>
        </div>
        <div class="copyrights-col-right col-md-6 col-sm-6">
           <ul class="social-network social-circle iconito">
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