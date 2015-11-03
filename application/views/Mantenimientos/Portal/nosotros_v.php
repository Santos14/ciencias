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

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/nos.css"/>
<!-- SCRIPTS
  ================================================== -->
<script src="js/modernizr.js"></script><!-- Modernizr -->
<style>

.imagen {
  filter: gray; /* IE6-9 */
  -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */
    -webkit-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
    box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
    margin-bottom:20px;
    margin-top: 10px;

}

img:hover {
  filter: none; /* IE6-9 */
  -webkit-filter: grayscale(0); /* Google Chrome, Safari 6+ & Opera 15+ */
}
</style>
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
  </form
  <!-- Start Content -->
    <div class="main" role="main">
    <div id="content" class="content full" style="height: 750px;">
      <div class="container" style="width: 1050px;
                              margin-right: -50;
                              padding-right: 45px;">
  <header class="listing-header">
   <h2 style="color:#7F0000">NOSOTROS</h2>
    </header>
  <!-- End Page Header -->
  <!-- Start Content -->
<div class="container">
    <div class="row">
      <div class="col-md-12"style="padding-left: 0px;width: 1005px;">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                  <ul class="nav nav-tabs">
                      <li class="active"><a href="#tab1default" data-toggle="tab">RESEÑA HISTÓRICA</a></li>
                      <li><a href="#tab2default" data-toggle="tab">MISIÓN</a></li>
                      <li><a href="#tab3default" data-toggle="tab">VISIÓN</a></li>
                      <li><a href="#tab4default" data-toggle="tab">NUESTRA AUTORIDAD</a></li>
                  </ul>
                </div>
              <div class="panel-body"style="padding-bottom: 0px;padding-right: 0px;padding-left: 0px; padding-top: 0px;">
                <div class="tab-content"style="padding-bottom: 0px;padding-top: 0px;">
                  <div class="tab-pane fade in active" id="tab1default">
                    <div class="container">
                     <div class="row">
                          <div class="col-sm-3 col-md-3"style="padding-right: 0px; padding-left: 0px;">
                            <img src="<?php echo base_url(); ?>public/img/historia.png"alt="" class="img-rounded img-responsive"/>
                          </div>
                            <div class="col-md-9" style="padding-left: 0px;">
                              <blockquote style="height: 180px;margin-top: 10px 5px;   border-top-width: 5px;padding-left: 10px;margin-bottom: 0px;width: 713px;">
                               <p>
                                 La InstituciónEducativa Particular CIENCIAS, se creó por la iniciativa del profesor Roni Martín Tenazoa Vilca, quien con visión empresarial, vocación de servicio y deseo permanente por contribuir a mejorar y elevar el nivel académico de los niños y jóvenes sanmartinenses, inicia los trámites pertinentes para la creación de nuestra institución, la misma que actualmente se ha convertido en paradigma de superación y desarrollo. El 22 de diciembre del 2008, con resolución directoral N° 2442, expedido por la UGEL-San Martín, se apertura la creación de la institución Educativa Particular Ciencias y posteriormente, con Código Modular N° 1397116, es reconocida oficialmente por el ministerio de Educación. Nuestra Institución, inicia sus actividades el 9 de Marzo del 2009, contando con 8 secciones, 176 alumnos, 30 trabajadores y local propio ubicado el e l Jr. Perú N° 908, barrio la Hoyada, distrito de Tarapoto. El 22 de Noviembre de cada año por acuerdo unánime de directivos y profesores de nuestra institución, constituye la fecha central de nuestro aniversario, coincidiendo esta con la aceptación verbal de creación por el funcionario de la UGEL- San Martin.
                               </p>
                              </blockquote>
                            </div>
                          </div><br>
                         </div>
                       </div>
            <div class="tab-pane fade" id="tab2default">
                    <div class="container">
                     <div class="row">
                          <div class="col-sm-3 col-md-3"style="padding-right: 0px; padding-left: 0px;">
                            <img src="<?php echo base_url(); ?>public/img/mision.png"alt="" class="img-rounded img-responsive"/>
                          </div>
                            <div class="col-md-9" style="padding-left: 0px;">
                              <blockquote style="height: 180px;margin-top: 10px 5px;   border-top-width: 5px;padding-left: 10px;margin-bottom: 0px;width: 713px;">
                              <h3>MISIÓN</h3>
                               <p style="font-size:16px;">
                                 Trabajar con dedicación y responsabilidad desarrollando competencias, capacidades y actitudes para ofrecer una educación científica, tecnológica y humanística, contribuyendo a lograr una vida de calidad dentro de la sociedad.
                               </p>
                              </blockquote>
                            </div>
                   </div>
                </div>
                <br>
                </div>
                <div class="tab-pane fade" id="tab3default">
                    <div class="container">
                     <div class="row">
                          <div class="col-sm-3 col-md-3"style="padding-right: 0px; padding-left: 0px;">
                            <img src="<?php echo base_url(); ?>public/img/vision.png"alt="" class="img-rounded img-responsive"/>
                          </div>
                            <div class="col-md-9" style="padding-left: 0px;">
                              <blockquote style="height: 180px;margin-top: 10px 5px;   border-top-width: 5px;padding-left: 10px;margin-bottom: 0px;width: 713px;">
                              <h3>VISIÓN</h3>
                               <p style="font-size:16px;">
                                 Ser una institución educativa de referencia regional y nacional líder en la formación y preparación de estudiantes hacia la excelencia educativa; brindando un servicio de calidad profesional, académica y de valores.
                               </p>
                              </blockquote>
                            </div>
                   </div>
                </div>
                <br>
                </div>
                <div class="tab-pane fade" id="tab4default">
                    <div class="container">
                     <div class="row">
                          <div class="col-sm-3 col-md-3"style="padding-right: 0px; padding-left: 0px;">
                            <img src="<?php echo base_url(); ?>public/img/director.png" style="height:191px"alt="" class="img-rounded img-responsive"/>
                          </div>
                            <div class="col-md-9" style="padding-left: 0px;">
                              <blockquote style="height: 180px; margin-top: 10px 5px;   border-top-width: 5px;padding-left: 10px;margin-bottom: 0px;width: 713px;">
                              <h3>DIRECTOR DE LA INSTITUCIÓN EDUCATIVA</h3>
                               <p style="font-size:16px;">
                                 Nacido el 13 de Septiembre de 1974, en Trujillo, La Libertad Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                               </p>
                              </blockquote>
                            </div>
                   </div>
                </div>
                <br>
                </div>

        </div>
     </div>
</div>
<div class="container">
    <div class="row">
    <header>
      <h3>NUESTRA INFRAESTRUCTURA</h3>
    </header>
    <div class="col-md-12">
                <div id="Carousel" class="carousel slide" style="padding-left: 30px;padding-right: 60px;">
                <!-- Carousel items -->
                <div class="carousel-inner">

                <div class="item active">
                  <div class="row">
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url(); ?>public/img/col_1.jpg" height="1440" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url(); ?>public/img/col_2.jpg" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url(); ?>public/img/col_3.jpg" height="1440" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url(); ?>public/img/col_4.jpg" height="1440" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url(); ?>public/img/col_6.jpg" height="400" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url(); ?>public/img/col_7.jpg" alt="Image" style="max-width:100%;"></a></div>
                  </div><!--.row-->
                </div><!--.item-->

                <div class="item">
                  <div class="row">
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url(); ?>public/img/col_8.jpg" height="1440" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url(); ?>public/img/col_9.jpg" height="1440" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url(); ?>public/img/col_10.jpg" height="1440" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url(); ?>public/img/col_11.jpg" height="1440" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url(); ?>public/img/col_6.jpg" height="400" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url(); ?>public/img/col_7.jpg" alt="Image" style="max-width:100%;"></a></div>
                  </div><!--.row-->
                </div><!--.item-->

                <div class="item">
                  <div class="row">
                   <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url(); ?>public/img/col_3.jpg" height="1440" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url(); ?>public/img/col_4.jpg" height="1440" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url(); ?>public/img/col_6.jpg" height="400" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url(); ?>public/img/col_10.jpg" height="1440" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url(); ?>public/img/col_11.jpg" height="1440" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="<?php echo base_url(); ?>public/img/col_6.jpg" height="400" alt="Image" style="max-width:100%;"></a></div>

                  </div><!--.row-->
                </div><!--.item-->

                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="left carousel-control" style="
                  margin-top: 25px;">‹</a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control" style="
                  margin-top: 25px;right: -12;border-right-width: 4px;margin-right: 30px;">›</a>
                </div><!--.Carousel-->

    </div>
  </div>
</div><!--.container-->


  <!-- Start Footer -->
  <footer class="site-footer-bottom"style="height: 90px; background:#7F0000">
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

</body>
</html>