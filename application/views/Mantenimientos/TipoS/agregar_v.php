<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>CIENCIAS</title>

    <meta name="description" content="Dashboard" />
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>CIENCIAS</title>

    <meta name="description" content="Dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php include("includes/css.inc") ; ?>
    <script src="<?php echo base_url(); ?>public/js/skins.min.js"></script>


</head>
<!-- /Head -->
<!-- Body -->
<body>
<div class="container">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header ">
                    <a href="index.html" class="navbar-brand">
                        <small>
                            <img src="<?php echo base_url(); ?>public/img/portal.png" alt=""/>
                        </small>
                    </a>
                </div>
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="collapse-icon fa fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container" style="margin-top:20px;">
        <div class="page-container">
            <div class="page-sidebar" id="sidebar">
                <?php include("includes/menu.inc") ; ?>
            </div>
            <div class="page-content">
                <div class="page-body">
                    <?php

                    if($datos=="")
                    {
                        $idtipo_sangre="";
                        $descripcion ="";
                    }
                    else
                    {
                        $idtipo_sangre = $datos->idtipo_sangre;
                        $descripcion = $datos->descripcion;
                    }
                 ?>
                 <div class="row">
                     <div class="col-md-9">

                        <form action="<?php echo base_url(); ?>TipoS_c/nuevo" method="post" id="form">
                            <h3><?php echo $titulo; ?></h3>
                            <input type="hidden" name="idtipo_sangre" value="<?php echo $idtipo_sangre; ?>">
                            <label for="descripcion">Descripcion</label>
                            <input class="form-control" type="text" name="descripcion" maxlength="20" value="<?php echo $descripcion; ?>" onpaste="return false" onkeypress="return sololetras(event)" required="required">


                            <div class="row">
                                <div class="col-md-6">
                                    <center><input class="btn btn-default shiny" id="btn" type="submit" value="GUARDAR"></center>

                                </div>
                                <div class="col-md-6">
                                     <center><a href="<?php echo base_url(); ?>TipoS_c" class="btn btn-default shiny" id="btn2" type="button">CANCELAR</a></center>
                                </div>
                            </div>
                        </form>
                     </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php include("includes/js.inc") ; ?>

</body>
<!--  /Body -->
</html>



</body>
<!--  /Body -->
</html>
