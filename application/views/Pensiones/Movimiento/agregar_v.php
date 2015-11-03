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

                 <div class="row">
                     <div class="col-md-9">

                        <form action="<?php echo base_url(); ?>Movimiento_c/nuevo" method="post" id="form">
                            <h3><?php echo $titulo; ?></h3>

                            <label for="idtipo_movimiento">Tipo de Movimiento</label>
                            <select name="idtipo_movimiento" id="" class="combobox form-control">
                                <option value=""></option>
                                <?php foreach($tipoMovimiento as $value){
                                   ?>
                                    <option value="<?php echo $value->idtipo_movimiento; ?>"><?php echo $value->descripcion; ?></option>
                                <?php } ?>
                            </select>

                             <label for="descripcion">Concepto</label>
                            <select name="idconcepto" id="" class="combobox form-control">
                                <option value=""></option>
                                <?php foreach($concepto as $value){
                                   ?>
                                    <option value="<?php echo $value->idconcepto; ?>"><?php echo $value->descripcion; ?></option>
                                <?php } ?>
                            </select>

                        <label for="referencia">Referencia</label>
                            <textarea name="referencia" id="" cols="30" rows="5" class="form-control" maxlength="100"></textarea>

                             <label for="descripcion">Monto</label>
                            <input class="form-control" type="text" name="monto" maxlength="5" onpaste="return false" onkeypress="return solonumeros(event)" required="required">




                            <div class="row">
                                <div class="col-md-6">
                                    <center><input class="form-control btn btn-primary" id="btn" type="submit" value="GUARDAR"></center>

                                </div>
                                <div class="col-md-6">
                                     <center><a href="<?php echo base_url(); ?>Movimiento_c" class="form-control btn btn-primary" id="btn2" type="button">CANCELAR</a></center>
                                </div>
                            </div>
                        </form>
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

    function taer(str){
      var xmlhttp;
      if (str=="") {
        document.getElementById("tipo_registro").innerHTML = "";
      };
      if (window.XMLHttpRequest) {
        //IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
      }else{
        //IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      };

      xmlhttp.onreadystatechange = function(){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          document.getElementById("rp_madre").innerHTML = xmlhttp.responseText;
        };
      }


      xmlhttp.open("GET","db.php?c="+str,true);

      xmlhttp.send();
    }

  </script>