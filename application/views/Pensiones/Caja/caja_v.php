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
        <div id="navbar" class="navbar navbar-default" style="width: 1241px;padding-left: 0px;border-left-width: 100px; height: 45px;">
            <script type="text/javascript">
                try{ace.settings.check('navbar' , 'fixed')}catch(e){}
            </script>

            <div class="navbar-container" id="navbar-container">
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <span class="sr-only">Toggle sidebar</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-header pull-left">
                    <a href="index.html#" class="navbar-brand" style="padding-top: 5px;padding-bottom: 5px;">
                            <img src="<?php echo base_url(); ?>public/img/portal2.png" style="padding-left: 21px;width: 400px;height: 30px;">
                    </a>
                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                        <li class="purple">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#" style="left: 8px;">
                                <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                                <span class="badge badge-important">8</span>
                            </a>

                            <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header"><i class="ace-icon fa fa-exclamation-triangle"></i>8 Notifications</li>
                                <!-- NOTIFICACIONESSSS -->
                                <li class="dropdown-content">
                                    <ul class="dropdown-menu dropdown-navbar navbar-pink">
                                        <li>
                                            <a href="index.html#">
                                                <div class="clearfix">
                                                    <span class="pull-left"><i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>New Comments
                                                    </span>
                                                    <span class="pull-right badge badge-info">+12</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li><a href="index.html#"><i class="btn btn-xs btn-primary fa fa-user"></i>Bob just signed up as an editor ...</a></li>
                                        <li>
                                            <a href="index.html#">
                                                <div class="clearfix">
                                                    <span class="pull-left"><i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>New Orders</span>
                                                    <span class="pull-right badge badge-success">+8</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="index.html#">
                                                <div class="clearfix">
                                                    <span class="pull-left"><i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>Followers</span>
                                                    <span class="pull-right badge badge-info">+11</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown-footer">
                                    <a href="index.html#">See all notifications<i class="ace-icon fa fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </li>

                        <li class="light-blue" style="border-left-width: 0px;padding-left: 1px;">
                            <a data-toggle="dropdown" href="index.html#" class="dropdown-toggle"  style="left: 8px;">
                                <img class="nav-user-photo" src="<?php echo base_url(); ?>public/img/user.jpg" alt="Jason's Photo" />
                                <span class="user-info">Bienvenido</span>
                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>
                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li><a href="index.html#"><i class="ace-icon fa fa-power-off"></i>Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- /.navbar-container -->
        </div>

        <div class="main-container" id="main-container"style="width: 931px;margin-left: 100px; height: 500px;">
            <script type="text/javascript">
                try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>
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

