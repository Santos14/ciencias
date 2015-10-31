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

            <?php include("includes/js.inc") ; ?>


            <script>
                $(function(){
                         $(".combobox").combobox();
                })
            </script>

            <div class="page-content">
                <div class="page-body">
                    <?php

                    if($datos=="")
                    {
                        $idsituacion_laboral="";
                        $anio = "";
                        $horas_semanales_trabajo = "";
                        $edad = "";
                        $descripcion ="";
                        $idalumno = "";
                    }
                    else
                    {
                        $idsituacion_laboral = $datos->idsituacion_laboral;
                        $anio = $datos->anio;
                        $edad = $datos->edad;
                        $horas_semanales_trabajo = $datos->horas_semanales_trabajo;
                        $descripcion = $datos->descripcion;
                        $idalumno = $datos->idalumno;
                    }
                 ?>
                 <div class="row">
                     <div class="col-md-9">

                        <form action="<?php echo base_url(); ?>Situacion_c/nuevo" method="post" id="form">
                            <h3><?php echo $titulo; ?></h3>
                            <input type="hidden" name="idsituacion_laboral" value="<?php echo $idsituacion_laboral; ?>">
                             <label for="descripcion">Alumno</label>
                            <select name="idalumno" id="" class="combobox form-control">
                                <option value=""></option>
                                <?php foreach($alumnos as $value){
                                    if($idalumno == $value->idalumno){
                                    ?>
                                    <option selected value="<?php echo $value->idalumno; ?>"><?php print $value->nombres." ".$value->apellido_paterno." ".$value->apellido_materno; ?></option>
                                    <?php }else{ ?>
                                    <option value="<?php echo $value->idalumno; ?>"><?php print $value->nombres." ".$value->apellido_paterno." ".$value->apellido_materno; ?></option>
                                <?php }} ?>
                            </select>
                             <label for="anio">Año</label>
                            <input class="form-control" type="text" name="anio" value="<?php echo $anio; ?>" onpaste="return false" onkeypress="return solonumeros(event)" required="required">

                             <label for="edad">Edad</label>
                            <input class="form-control" type="text" name="edad" value="<?php echo $edad; ?>" onpaste="return false" onkeypress="return solonumeros(event)" required="required">

                            <label for="descripcion">Descripcion</label>
                            <input class="form-control" type="text" name="descripcion" maxlength="30" value="<?php echo $descripcion; ?>" onpaste="return false" onkeypress="return sololetras(event)" required="required">

                            <label for="horas_semanales_trabajo">Horas Semanales de Trabajo</label>
                            <input class="form-control" type="text" name="horas_semanales_trabajo" maxlength="3" value="<?php echo $horas_semanales_trabajo; ?>" onpaste="return false" onkeypress="return solonumeros(event)" required="required">



                            <div class="row">
                                <div class="col-md-6">
                                    <center><input class="btn btn-default shiny" id="btn" type="submit" value="GUARDAR"></center>

                                </div>
                                <div class="col-md-6">
                                     <center><a href="<?php echo base_url(); ?>Situacion_c" class="btn btn-default shiny" id="btn2" type="button">CANCELAR</a></center>
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


</body>
<!--  /Body -->
</html>
