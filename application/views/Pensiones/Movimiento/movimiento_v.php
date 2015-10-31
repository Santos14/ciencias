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
              <div class="botones">

                    <span><h3>Movimientos</h3></span>
                    <a href="<?php echo base_url(); ?>Movimiento_c/mov" class="btn btn-primary">Agregar Nuevo Movimiento</a>


                    <?php if($datos == NULL) {?>
                         <span id="vacio"><h3>No hay datos que Mostrar</h3></span>
                    </div>
                    <?php }else{ ?>

                    <table class="table table-bordered table-striped table-condensed buscar">
                        <thead>
                            <tr>
                                <th width="51" >Concepto</th>

                                <th width="35">Monto</th>
                                <th width="78">Referencia</th>
                                <th width="84">Fecha</th>
                                <th width="190">Extornar</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($datos as $value) {
                                ?>

                            <tr>
                                <td><?php print $value->descripcion; ?></td>

                                <td><?php print $value->monto; ?></td>

                                <td><?php print $value->referencia; ?></td>
                                <td><?php print $value->fecha; ?></td>
                               <td><a class="btn btn-primary" id="" href="<?php echo base_url()."Movimiento_c/extornar/".$value->idmovimiento; ?>" >Extornar</a>
                               </td>

                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
<!--  /Body -->
</html>
