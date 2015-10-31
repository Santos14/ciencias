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
            <div class="page-content">
                <div class="page-body">
                   <div class="botones">

                        <center><a class="btn btn-success" href="<?php echo base_url(); ?>Cuota_c/amortizar/<?php echo $montos[0]->total."/".$montos[0]->monto."/".$idcuota."/".$id; ?>">Amortizar</a></center>



                        <?php
                        $fecha = date('Y-m-j');
                        $nuevafecha = strtotime ( '-7 hour' , strtotime ( $fecha ) ) ;
                        $nuevafecha =  date('Y-m-j', $nuevafecha);


                         if($datos == NULL) {?>
                             <span id="vacio"><h3>No hay datos que Mostrar</h3></span>
                        </div>
                        <?php }else{ ?>
                        <table class="table table-bordered table-striped table-condensed buscar" border>
                            <thead>
                                <tr>

                                    <th>Numero de Cuota</th>
                                    <th>Fecha de Cobro</th>
                                    <th>Monto de Cuota</th>
                                    <th>Estado</th>

                                </tr>
                            </thead>
                            <tbody>


                                <?php foreach ($datos as $value) {
                                    $estado = $value->estado;
                                    ?>

                                <tr>
                                    <td><?php print $value->numero_cuota; ?></td>
                                    <td><?php print $value->fecha_vencimiento; ?></td >
                                    <td><?php print $value->monto; ?></td>
                                    <?php if($estado == 1 && $nuevafecha>$value->fecha_vencimiento){ ?>
                                    <td><?php print "Vencido"; ?></td>

                                    <?php }
                                    if($estado == 1 && $nuevafecha<$value->fecha_vencimiento){ ?>
                                    <td><?php print "Pendiente"; ?></td>

                                    <?php }
                                    if($estado == 0){ ?>
                                    <td><?php print "Cancelado"; ?></td>

                                    <?php } ?>

                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php } ?>
                        <br>
                         <center><a class="btn btn-warning" href="<?php echo base_url(); ?>Cuota_c">Volver</a></center>

                    </div>
                </div>
            </div>
        </div>

</div>


</body>
<!--  /Body -->
</html>
