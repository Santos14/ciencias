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
                    <span><h3>Cronograma de Cobros</h3></span>


                    <?php if($datos == NULL) {?>
                         <span id="vacio"><h3>No hay datos que Mostrar</h3></span>
                    </div>
                    <?php }else{ ?>
                    <table class="table table-bordered table-striped table-condensed buscar">
                        <thead>
                            <tr>
                                <th width="51" >Alumno</th>

                                <th width="35" >Total</th>
                                <th width="78" >Monto Cobrado</th>
                                <th width="84" >Numero de Cuotas</th>
                                <th width="190" >Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            foreach ($datos as $value) {
                                ?>

                            <tr>
                                <td><?php print $value->nombres." ".$value->apellido_materno." ".$value->apellido_paterno; ?></td>

                                <td><?php print $value->monto; ?></td>
                                <?php if(isset($monto_cobrado[0]->mc)){?>
                                <td><?php print $monto_cobrado[0]->mc;  ?></td>
                                <?php }else{ ?>
                                 <td><?php print 0;  ?></td>
                                 <?php } ?>
                                <td><?php print $value->numero_cuota; ?></td>
                               <td><a class="btn btn-primary" id="" href="<?php echo base_url()."Cuota_c/cronograma/".$value->idmatricula."/".$value->idcuota; ?>" >Cronograma</a>
                               <a class="btn btn-danger" id="" href="<?php echo base_url()."Cuota_c/amortizar/".$value->monto."/".$value->m."/".$value->idcuota."/".$value->idmatricula ; ?>" >Amortizar</a>



                               </td>

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

