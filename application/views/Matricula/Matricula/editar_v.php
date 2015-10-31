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
                        $idmatricula="";
                        $idalumno="";
                        $idseccion="";
                        $idgrado ="";
                        $idturno ="";

                        $observacion ="";




                    }
                    else
                    {
                        $idmatricula= $datos->idmatricula;
                        $idalumno= $datos->idalumno;
                        $idseccion= $datos->idseccion;
                        $idgrado = $datos->idgrado;
                        $idturno = $datos->idturno;

                        $observacion = $datos->observacion;



                    }
                 ?>
                 <div class="row">
                     <div class="col-md-9">

                       <form action="<?php echo base_url(); ?>Matricula_c/nuevo" method="post" id="form">
                            <h3><?php echo $titulo; ?></h3>
                            <input type="hidden" name="idmatricula" value="<?php echo $idmatricula; ?>">

                            <label for="idalumno">Alumno</label>
                            <select name="idalumno" id="" class="combobox form-control">
                                <option value=""></option>
                                <?php foreach($alumno as $value){
                                    if($idalumno == $value->idalumno){
                                    ?>
                                    <option selected value="<?php echo $value->idalumno; ?>"><?php print $value->nombres." ".$value->apellido_paterno." ".$value->apellido_materno; ?></option>
                                    <?php }else{ ?>
                                    <option value="<?php echo $value->idalumno; ?>"><?php print $value->nombres." ".$value->apellido_paterno." ".$value->apellido_materno; ?></option>
                                <?php }} ?>
                            </select>

                            <label for="idseccion ">Seccion</label>
                            <select name="idseccion " id="" class="combobox form-control">
                                <option value=""></option>
                                <?php foreach($seccion as $value){
                                    if($idseccion == $value->idseccion){
                                    ?>
                                    <option selected value="<?php echo $value->idseccion; ?>"><?php print $value->descripcion; ?></option>
                                    <?php }else{ ?>
                                    <option value="<?php echo $value->idseccion; ?>"><?php print $value->descripcion; ?></option>
                                <?php }} ?>
                            </select>

                            <label for="idgrado">Grado</label>
                            <select name="idgrado" id="" class="combobox form-control">
                                <option value=""></option>
                                <?php foreach($grado as $value){
                                    if($idgrado == $value->idgrado){
                                    ?>
                                    <option selected value="<?php echo $value->idgrado; ?>"><?php print $value->descripcion; ?></option>
                                    <?php }else{ ?>
                                    <option value="<?php echo $value->idgrado; ?>"><?php print $value->descripcion; ?></option>
                                <?php }} ?>
                            </select>

                            <label for="idturno">Turno</label>
                            <select name="idturno" id="" class="combobox form-control">
                                <option value=""></option>
                                <?php foreach($turno as $value){
                                    if($idturno == $value->idturno){
                                    ?>
                                    <option selected value="<?php echo $value->idturno; ?>"><?php print $value->descripcion; ?></option>
                                    <?php }else{ ?>
                                    <option value="<?php echo $value->idturno; ?>"><?php print $value->descripcion; ?></option>
                                <?php }} ?>
                            </select>

                            <label for="observacion">Observacion</label>
                            <textarea  class="form-control" name="observacion" value=""><?php echo $observacion; ?></textarea>




                            <div class="row">
                                <div class="col-md-6">
                                    <center><input class="btn btn-default shiny" id="btn" type="submit" value="GUARDAR"></center>

                                </div>
                                <div class="col-md-6">
                                     <center><a href="<?php echo base_url(); ?>Matricula_c" class="btn btn-default shiny" id="btn2" type="button">CANCELAR</a></center>
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
