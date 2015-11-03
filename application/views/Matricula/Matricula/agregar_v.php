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
            <form action="<?php echo base_url(); ?>Matricula_c/nuevo" method="post" id="form">
                            <h3><?php echo $titulo;


                            ?></h3>


                           <div class="row">
                                <div class="col-md-6">
                                    <label for="idalumno">Alumno</label>
                                    <select name="idalumno" id="" class="combobox form-control">
                                        <option value=""></option>
                                        <?php foreach($alumno as $value){
                                           ?>
                                            <option value="<?php echo $value->idalumno; ?>"><?php print $value->nombres." ".$value->apellido_paterno." ".$value->apellido_materno; ?></option>
                                        <?php } ?>
                                    </select>



                                    <label for="idseccion ">Seccion</label>
                                    <select name="idseccion" id="" class="combobox form-control">
                                        <option value=""></option>
                                        <?php foreach($seccion as $value){

                                            ?>
                                            <option value="<?php

                                            echo $value->idseccion; ?>"><?php print $value->descripcion; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="idgrado">Grado</label>
                                    <select name="idgrado" id="" class="combobox form-control">
                                        <option value=""></option>
                                        <?php foreach($grado as $value){
                                            ?>
                                            <option value="<?php echo $value->idgrado; ?>"><?php print $value->descripcion; ?></option>
                                        <?php } ?>
                                    </select>

                                    <label for="idturno">Turno</label>
                                    <select name="idturno" id="" class="combobox form-control">
                                        <option value=""></option>
                                        <?php foreach($turno as $value){
                                          ?>
                                            <option value="<?php echo $value->idturno; ?>"><?php print $value->descripcion; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                           </div>

                           <div class="row">
                               <div class="col-md-9">
                                    <label for="observacion">Observacion</label>
                                    <textarea class="form-control" name="observacion"></textarea>
                               </div>
                           </div>

                            <h3>Registro de Cronograma de Cobros</h3>
                            <div class="row">
                               <div class="col-md-6">
                                    <label for="fecha">Fecha de la Primera Cuota</label>
                                    <input class="form-control" type="date" name="fecha">

                               </div>

                               <div class="col-md-6">
                                   <label for="monto">Monto</label>
                                    <input class="form-control" type="text" name="monto">
                               </div>
                           </div>



                            <div class="row">
                                <div class="col-md-6">
                                    <center><input class="form-control btn btn-primary" id="btn" type="submit" value="GUARDAR"></center>
                                </div>
                                <div class="col-md-6">
                                     <center><a href="<?php echo base_url(); ?>Matricula_c" class="form-control btn btn-primary" id="btn2" type="button">CANCELAR</a></center>
                                </div>
                            </div>


                        </form>

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