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
                         <div class="botones">

                            <?php

                                $estado = $saldo[0]["estado"];
                                $ultimo = $saldo[0]["idcaja"];
                             if( $estado == 1)
                                 {
                                $estadoP = "Aperturado";
                                ?>
                                <a class="btn btn-success" href="<?php echo base_url(); ?>Caja_c/cerrar">Cerrar Caja</a>
                            <?php }
                                else{
                                $estadoP = "Cerrado";
                            ?>
                                <a class="btn btn-success" href="<?php echo base_url(); ?>Caja_c/reaperturar">Aperturar Caja</a>
                             <?php } ?>

                        <a class="btn btn-success" href="#myModal" data-toggle="modal">Ver Saldo Actual</a>
                        <?php if($datos == NULL) {?>
                             <span id="vacio"><h3>No hay datos que Mostrar</h3></span>
                        </div>
                        <?php }else{ ?>
                        <table class="table table-bordered table-striped table-condensed buscar" border>
                            <thead>
                                <tr>

                                    <th>Personal</th>
                                    <th>Fecha y Hora de Apertua</th>
                                    <th>Saldo de Apertura</th>
                                    <th>Fecha y Hora de Cierre</th>
                                    <th>Saldo de Cierre</th>
                                    <th>Estado</th>

                                </tr>
                            </thead>
                            <tbody>


                                <?php foreach ($datos as $value) {
                                    ?>

                                <tr>
                                    <td><?php print $value->nombres." ".$value->apellidos; ?></td>
                                    <td><?php print $value->fecha_apertura; ?></td >
                                    <td><?php print $value->saldo_apertura; ?></td>
                                   <?php if($value->idcaja == $ultimo) {?>
                                            <?php if($value->estado == 1) {?>
                                              <td><?php print "Aun no se Cierra la Caja"; ?></td>
                                            <td><?php print "Aun no se Cierra la Caja"; ?></td>
                                            <td><?php print "Aperturado"; ?></td>
                                        <?php } else{?>

                                                   <td><?php print $value->fecha_cierre; ?></td>
                                                    <td><?php print $value->saldo_cierre; ?></td>
                                                    <td><?php print "Cerrado"; ?></td>
                                        <?php } ?>
                                    <?php }else{ ?>
                                         <td><?php print $value->fecha_cierre; ?></td>
                                        <td><?php print $value->saldo_cierre; ?></td>
                                        <td><?php print "Cerrado"; ?></td>
                                   <?php  }?>

                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php } ?>
                    </div>
                </div>
            </div><!-- /.main-content -->

            <div class="footer" >
                <div class="footer-inner">
                    <div class="footer-content" style="width: 951px; left:290px; top: 0px">
                        <span class="bigger-120"> <p class="copy">Copyright &copy; 2015 |  Colegio Particular Ciencias</a></p></span>
                    </div>
                </div>
            </div>

            <a href="index.html#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
    </div><!-- /.main-container -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Saldo Actual de la Caja</h3>
        </div>
        <div class="modal-body text-justify">
            <div id="bodymodal">
                <div class="text-center">
                    <h4>S/. <?php echo $saldo[0]['saldo_cierre']; ?></h4>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Ok</button>
        </div>
        </div>
        </div>
    </div>

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

