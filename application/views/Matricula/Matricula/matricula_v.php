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
                        <a class="btn btn-success" href="<?php echo base_url(); ?>Matricula_c/nuevo">Agregar Nueva Matricula</a>

                    <?php if($datos == NULL) {?>
                         <span id="vacio"><h3>No hay datos que Mostrar</h3></span>
                    </div>
                    <?php }else{ ?>
                    <table class="table table-bordered table-striped table-condensed buscar" border>
                        <thead>
                            <tr>

                                <th>ALUMNO</th>
                                <th>AÑO LECTIVO</th>
                                <th>PERSONAL</th>
                                <th>FECHA</th>
                                <th>MODIFICAR</th>
                                <th>ELIMINAR</th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php foreach ($datos as $value) {
                                ?>

                            <tr>

                                <td><?php print $value->nombres." ".$value->apellido_paterno." ".$value->apellido_materno; ?></td>
                                <td><?php print $value->anio_lectivo; ?></td>
                                <td><?php print $value->nombres." ".$value->apellidos; ?></td>
                                <td><?php print $value->fecha; ?></td>

                                <td><a href="<?php echo base_url()."Matricula_c/modificar/".$value->idmatricula; ?>"><i id="btnModificar" class="fa fa-pencil"></i></a></td>
                                <td><a id="eliminar" onclick="return confirm('¿Esta Seguro de Eliminar esta Matricula?');"
                                href="<?php echo base_url()."Matricula_c/eliminar/".$value->idmatricula; ?>" ><i class="fa fa-trash-o"></i></a></td>
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
