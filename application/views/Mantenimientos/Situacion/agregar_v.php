<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>CIENCIAS</title>

    <meta name="description" content="Dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php include("includes/css2.inc") ; ?>
    <style>
        body{
            width: 960px;
            background:#f8f8f8 !important;
        }


    </style>
</head>
<body class="no-skin" style="background:#f8f8f8 !important;">

          <?php include("includes/menu.inc") ; ?>

            <div class="main-content" style="width: 950px; background:#f8f8f8;">
                <div class="main-content-inner">
                  <div class="contenido">
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
                                    <center><input class="form-control btn btn-primary" id="btn" type="submit" value="GUARDAR"></center>

                                </div>
                                <div class="col-md-6">
                                     <center><a href="<?php echo base_url(); ?>Situacion_c" class="form-control btn btn-primary" id="btn2" type="button">CANCELAR</a></center>
                                </div>
                            </div>
                        </form>
                     </div>
                 </div>
                 </div>
            </div><!-- /.main-content -->

            <div class="footer" >
                <div class="footer-inner">
                    <div class="footer-content" style="width: 951px; left:290px;">
                        <span class="bigger-120"> <p class="copy">Copyright &copy; 2015 |  Colegio Particular Ciencias</a></p></span>
                    </div>
                </div>
            </div>

            <a href="index.html#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
    </div><!-- /.main-container -->


</body>
</html>
<?php include("includes/js2.inc") ; ?>

    <script>
            $(function(){
                $(".buscar").DataTable({
                    "language": {
                        "lengthMenu": "Mostrar _MENU_ Registros",
                        "zeroRecords": "Nothing found - sorry",
                        "info": "Mostrando Página _PAGE_",
                        "infoEmpty": "No records available",
                        "infoFiltered": "(filtered from _MAX_ total records)"
                    }
                });
            })
    </script>


    <script>
        $(function(){
                $(".combobox").combobox();
        })
    </script>