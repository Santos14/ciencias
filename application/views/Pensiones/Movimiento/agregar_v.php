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

                 <div class="row">
                     <div class="col-md-9">

                        <form action="<?php echo base_url(); ?>Movimiento_c/nuevo" method="post" id="form">
                            <h3><?php echo $titulo; ?></h3>
                            <input type="hidden" name="idactividad" value="<?php echo $idactividad; ?>">

                            <label for="idnivel">Tipo de Movimiento</label>
                            <select name="idaspecto" id="" class="combobox form-control">
                                <option value=""></option>
                                <?php foreach($aspectos as $value){
                                   ?>
                                    <option value="<?php echo $value->idaspecto; ?>"><?php echo $value->descripcion; ?></option>
                                <?php }} ?>
                            </select>
                        <label for="referencia">Referencia</label>
                            <textarea name="referencia" id="" cols="30" rows="10" class="form-control"></textarea>

                             <label for="descripcion">Concepto</label>
                            <input class="form-control" type="text" name="concepto">

                             <label for="descripcion">Monto</label>
                            <input class="form-control" type="text" name="monto">
                            <div class="row">
                                <div class="col-md-6">
                                    <center><input class="btn btn-default shiny" id="btn" type="submit" value="GUARDAR"></center>

                                </div>
                                <div class="col-md-6">
                                     <center><a href="<?php echo base_url(); ?>Movimiento_c" class="btn btn-default shiny" id="btn2" type="button">CANCELAR</a></center>
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
