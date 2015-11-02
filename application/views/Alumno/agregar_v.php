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
                        <?php
            if($datos=="")
            {
              $idalumno ="";
              $nombres ="";
              $apep="";
              $apem="";
              $sexo="";
              $estado_civil="";
              $nacimiento_registrado="";
              $fecha_nacimiento="";
              $lenguam="";
              $lenguas="";
              $numero_hermanos="";
              $lugar="";
              $religion="";
              $numero_documento="";
              $observacion="";
              $tiposangre="";
              $tipodocumento="";
              $tipoparto="";
              $distrito="";
              $provin1="";

            }
            else
            {
              $idalumno =$datos->idalumno;
              $nombres =$datos->nombres;
              $apep=$datos->apellido_paterno;
              $apem=$datos->apellido_materno;
              $sexo=$datos->sexo;
              $estado_civil=$datos->estado_civil;
              $nacimiento_registrado=$datos->nacimiento_registrado;
              $fecha_nacimiento=$datos->fecha_nacimiento;
              $lenguam=$datos->lengua_materna;
              $lenguas=$datos->segunda_lengua;
              $numero_hermanos=$datos->numero_hermanos;
              $lugar=$datos->lugar_q_ocupa;
              $religion=$datos->religion;
              $numero_documento=$datos->numero_documento;
              $observacion=$datos->observaciones;
              $tiposangre=$datos->idtipo_sangre;
              $tipodocumento=$datos->idtipo_documento;
              $tipoparto=$datos->idtipo_parto;
              $distrito=$datos->idubigeo;
              $provin1=$provin->idprovincia;

            }
            ?>

            <div class="row">

             <div class="col-md-12">

              <form action="<?php echo base_url(); ?>RegAlumno_c/nuevo" method="post" id="form">
                <h3><?php echo $titulo; ?></h3>

                <input type="hidden" name="idalumno" value="<?php echo $idalumno; ?>">

                <label for="descripcion">Nombres</label>
                <input class="form-control" type="text" name="nombres" value="<?php echo $nombres; ?>">
                <div class="row">
                  <div class="col-md-6">

                    <label for="descripcion">Apellido Paterno</label>
                    <input class="form-control" type="text" name="apep" value="<?php echo $apep; ?>">

                  </div>
                  <div class="col-md-6">

                    <label for="descripcion">Apellido Materno</label>
                    <input class="form-control" type="text" name="apem" value="<?php echo $apem; ?>">
                  </div>
                </div>

                <div class="row">

                 <div class="col-md-4">
                  <label for="descripcion">Sexo </label>
                  <select name="sexo" class="form-control">

                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="descripcion">Estado Civil </label>
                  <select name="estado_civil" class="form-control">

                    <option value="Soltero">Soltero</option>
                    <option value="Casado">Casado</option>
                    <option value="Viudad">Viudad</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <label for="descripcion">Nacimiento Registrado</label>
                  <select name="nacimiento_registrado" class="form-control">

                    <option value="si">si</option>
                    <option value="no">no</option>

                  </select>
                </div>

              </div>

              <div class="row">
                <div class="col-md-4">

                  <label for="descripcion">Fecha de Nacimiento</label>
                  <input class="form-control" type="date" name="fecha_nacimiento" value="<?php echo $fecha_nacimiento; ?>">
                </div>

                <div class="col-md-4">

                  <label for="descripcion">Idioma Materno</label>
                  <input class="form-control" type="text" name="idioma" value="<?php echo $lenguas; ?>">

                </div>
                <div class="col-md-4">

                  <label for="descripcion">Segundo Idioma</label>
                  <input class="form-control" type="text" name="idiomas" value="<?php echo $lenguas; ?>">

                </div>
              </div>


              <div class="row">
               <div class="col-md-3">
                 <label for="descripcion">numero de hijos</label>
                 <input class="form-control" type="text" name="numero" value="<?php echo $numero_hermanos;?>">
               </div>
               <div class="col-md-3">
                <label for="descripcion">Lugar que ocupa </label>
                <input  class="form-control" type="text" name="ocupas" value="<?php echo $lugar; ?>">
              </div>
              <div class="col-md-3">
               <label for="descripcion">Religion</label>
               <input class="form-control" type="text" name="religion" value="<?php echo $religion; ?>">
             </div>
             <div class="col-md-3">
              <label for="descripcion">Nº de Documento</label>
              <input class="form-control" type="text" name="documento" value="<?php echo $numero_documento; ?>">
            </div>

          </div>
          <div class="row">
           <div class="col-md-4">

             <label for="descripcion">Tipo de Sangre</label>
             <select name="tiposangre" class="form-control">

               <?php foreach($sangre as $value){
                if($tiposangre == $value->idtipo_sangre){
                  ?>
                  <option selected value="<?php echo $value->idtipo_sangre; ?>"><?php echo $value->descripcion; ?></option>
                  <?php }

                  else{
                   ?>
                   <option value="<?php echo $value->idtipo_sangre; ?>">
                    <?php echo $value->descripcion; ?>
                  </option>
                  <?php }} ?>


                </select>
              </div>
              <div class="col-md-4">

               <label for="descripcion">Tipo de Documento</label>
               <select name="tipodocumento" class="form-control">
                 <?php

                 foreach ($documento as $value)
                 {

                  if($tipodocumento == $value->idtipo_documento){
                    ?>
                    <option selected value="<?php echo $value->idtipo_documento; ?>"><?php echo $value->descripcion; ?></option>
                    <?php }

                    else{ ?>

                    <option value="<?php echo $value->idtipo_documento; ?>">
                      <?php echo $value->descripcion; ?>

                    </option>
                    <?php
                  }

                }

                ?>

              </select>
            </div>
            <div class="col-md-4">

             <label for="descripcion">Tipo de Parto</label>
             <select name="tipoparto" class="form-control">
               <?php

               foreach ($parto as $value) {
                 if($tipoparto == $value->idtipo_parto){
                  ?>
                  <option selected value="<?php echo $value->idtipo_parto; ?>"><?php echo $value->descripcion; ?></option>
                  <?php }

                  else{
                   ?>
                   <option value="<?php echo $value->idtipo_parto; ?>">
                    <?php echo $value->descripcion; ?>
                  </option>
                  <?php }} ?>

                </select>
              </div>




            </div>
            <div class="row">
              <div class="col-md-5">
               <label for="descripcion">Tipo de Discapacidad</label>

               <?php

               if(isset($disca)){


                                    //  print_r($disca->idtipo_discapacidad);exit();
                 foreach ($discapacidad as $value) {
                  $c=0;
                  foreach ($disca as $values) {
                    if($values->idtipo_discapacidad==$value->idtipo_discapacidad){
                      $c=1?>

                      <div class="checkbox">
                        <label><input type="checkbox" value="<?php echo $value->idtipo_discapacidad;?>" name="discapacitadoedad[]" checked ><?php echo $value->descripcion;?></label>
                      </div>
                      <?php }
                    }
                    if($c==0){?>
                    <div class="checkbox">
                      <label><input type="checkbox" value="<?php echo $value->idtipo_discapacidad;?>" name="discapacitadoedad[]"  ><?php echo $value->descripcion;?></label>
                    </div>
                    <?php

                  }


                  ?>

                  <?php
                }

              }


              else{foreach ($discapacidad as $value) { ?>

              <td> <div class="checkbox">
                <label><input type="checkbox" value="<?php echo $value->idtipo_discapacidad;?>" name="discapacitadoedad[]"  ><?php echo $value->descripcion;?></label>
              </div></td>

              <?php }}
              ?>

            </select>

          </div>
          <div class="col-md-4">
           <table>
             <thead>
              <tr> <th><label for="descripcion">Tipo de Actividad</label>   </th>

                <th>   <label>edad</label></th>

              </tr>
            </thead>
            <tbody>

             <?php


             if(isset($actis)){

               foreach ($actividad as $value) {
                $c=0;

                foreach ($actis as $values) {
                  if($values->idactividad==$value->idactividad)  {

                    $c=1;
                    ?>

                    <!--<option onclick="activar('<?php //echo "edad".$value->idtipo_discapacidad;?>')" value='<?php// echo $value->idtipo_discapacidad;?>'><?php// echo $value->descripcion;?></option>-->
                    <tr>
                     <td> <div class="checkbox">
                      <label><input id='edads<?php echo $value->idactividad;?>'  onclick="activar('<?php echo $value->idactividad;?>')" type="checkbox" value="<?php echo $value->idactividad;?>" name="actividad[]" checked><?php echo $value->descripcion;?></label>
                    </div></td>








                    <td><input value='<?php echo $values->edad; ?>' type='text' class='campo'  name='edad[]' id='edad<?php echo $value->idactividad ?>'/></td></tr>


                    <?php

                  }
               }


                  if ($c==0 ) {?>


                  <tr><td> <div class="checkbox">
                    <label><input id='edads<?php echo $value->idactividad;?>'  onclick="activar('<?php echo $value->idactividad;?>')" type="checkbox" value="<?php echo $value->idactividad;?>" name="actividad[]"><?php echo $value->descripcion;?></label>
                  </div></td>



                  <td><input type='text' class='campo'  name='edad[]' id='edad<?php $value->idactividad?>' disabled/></td></tr>


                  <?php
                }




            }


          }

          else {
           foreach ($actividad as $value) {?>

           <!--<option onclick="activar('<?php //echo "edad".$value->idtipo_discapacidad;?>')" value='<?php// echo $value->idtipo_discapacidad;?>'><?php// echo $value->descripcion;?></option>-->

           <tr> <td> <div class="checkbox">
            <label><input id='edads<?php echo $value->idactividad;?>'  onclick="activar('<?php echo $value->idactividad;?>')" type="checkbox" value="<?php echo $value->idactividad;?>" name="actividad[]"><?php echo $value->descripcion;?></label>
          </div></td></tr><tr>







          <td><input type='text' class='campo'  name='edad[]' id='edad<?php echo $value->idactividad ?>' disabled/></td></tr>



          <?php


        }}
        ?>

      </tbody>
    </table>
    div class="row">
  <div class="col-md-4">

    <label>Departamento</label>
    <select class="form-control" id="departamento">
      <option>Seleccione departamento</option>
      <?php

      if(isset($depar))

      {

       foreach ($departamento as $value) {

         if($depar->iddepartamento == $value->iddepartamento){
          ?>
          <option selected value="<?php echo $value->iddepartamento; ?>"><?php echo $value->departamento; ?></option>
          <?php }

          else{
           ?>
           <option value="<?php echo $value->iddepartamento; ?>">
            <?php echo $value->departamento; ?>
          </option>
          <?php }

        }

      }

      else {


       foreach ($departamento as $value) {

        echo   "<option value='$value->iddepartamento'>$value->departamento</option>";

      }


    }
    ?>

  </select>
</div>

<div class="col-md-4">

  <label>Provincia</label>
  <select class="form-control" id="provincia">
    <?php if($provin1 !=""){

     echo "  <option value='$provin->idprovincia'>$provin->provincia</option>";

   }
   else{
    echo "<option>Primero departamento</option>";

  }
  ?>





</select>

</div>
<div class="col-md-4">

 <label>Distrito</label>
 <select class="form-control" id="distrito" name="distrito">
  <?php if($distri->iddistrito !=""){

   echo "  <option value='$distri->iddistrito'>$distri->distrito</option>";

 }
 else{
  echo "<option>Primero provincia</option>";

}
?>
</select>


</div>
</div>




<div class="row">
 <div class="col-md-12">
   <label for="descripcion">Observaciones</label>

   <textarea class="form-control" rows="3" name="observacion" ><?php  echo $observacion?></textarea>
 </div>
</div>


</div>


</div>

<div class="row">
  <div class="col-md-6">
    <center><input class="btn btn-default shiny" id="btn" type="submit" value="GUARDAR"></center>

  </div>
  <div class="col-md-6">
   <center><a href="<?php echo base_url(); ?>RegAlumno_c" class="btn btn-default shiny" id="btn2" type="button">CANCELAR</a></center>
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