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
                       <div class="col-md-12" style="top: 30px;">
                       <span><h3>Registrar Horarios</h3></span><br>
                        <select class="form-control col-md-4" id="cnivel">
                            <option value="" >Seleccione Nivel</option>
                            <?php foreach ($datos as $key => $value): ?>
                                <option value='<?php echo $value->idnivel; ?>' ><?php echo $value->descripcion; ?></option>
                            <?php endforeach ?>
                        </select><br><br>



                        <select class="form-control col-md-4" id="cgrado">
                            <option  value="" >Seleccione Grado</option>
                        </select><br><br>


                        <select class="form-control col-md-4" id="cseccion">
                            <option value="" >Seleccione Seccion</option>
                            <?php foreach ($secciones as $key => $value): ?>
                                <option value="<?php echo $value->idseccion; ?>" ><?php echo $value->descripcion; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-md-4" id="listadecursos" style="top: 60px;">
                        <ul id='bebebe' class='list-group'>
                        </ul>
                        <button  class="btn btn-succes" id="limpiar">LIMPIAR</button>
                        <button  class="btn btn-succes" id="grabar">GRABAR</button>
                    </div>
                    <div class="col-md-8" id="horass" style="top: 40px;">

                    </div>
                    </div>
                </div>
            </div><!-- /.main-content -->

            <div class="footer" >
                <div class="footer-inner">
                    <div class="footer-content" style="width: 951px; left:100px; top: 50px;">
                        <span class="bigger-120"> <p class="copy">Copyright &copy; 2015 |  Colegio Particular Ciencias</a></p></span>
                    </div>
                </div>
            </div>

            <a href="index.html#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
    </div><!-- /.main-container -->

    <?php include("includes/js2.inc") ; ?>
<script type="text/javascript">

                $("#limpiar").click(function(){
                    location.reload();
                });

                $("#cnivel").on("change",function(){
                    $.post("<?php echo base_url().'Horario_c/listgrado'; ?>",{id:$(this).val()},function(data){
                        $("#cgrado").append(data);
                    });
                });






                $("#cseccion").on("change",function(){
                    var grado = $("#cgrado").val();
                    var nivel = $("#cnivel").val();

                    if(grado == "" || nivel == ""){
                        alert("debe seleccionar nivel y grado para poder consultar los datos");
                    }else{
                        //traetabla();
                        $.get("<?php echo base_url().'Horario_c/cursosajax'; ?>",
                            {"grado":grado,"seccion":$(this).val()},
                                function(data){
                                    $("#bebebe").empty();



                                    var html = "";
                                    $.each(data, function(i, item) {
                                        for(var j=1;j<=item.duracion;j++){
                                           html = html+'<li id="'+item.iddocente_x_seccion+'" class="list-group-item curso">'+item.descripcion+'</li>';
                                        }
                                    })

                                    $("#bebebe").append(html);

                                    $(".curso").on("click",function(){
                                        $(".pinta").removeClass("pinta");
                                        $(this).addClass("pinta");
                                    })


                        },'json');
                    }

                });




                var dias = new Array("Lunes","Martes","Miercoles","Jueves","Viernes");
                var htmle = "";
                htmle = htmle+'<form id="formbebe" method="POST" action="<?php echo base_url();?>Horario_c/grabarhorario" ><table id="tablabebe" class="table table-bordered">';
                htmle = htmle+"<tr><td style='background:red;'></td>";
                for(var z=0;z<dias.length;z++){
                    htmle = htmle+"<td>"+dias[z]+"</td>";
                }
                htmle = htmle+"</tr>";
                for(var i = 7 ; i<= 18 ; i++){
                    htmle = htmle+"<tr>";
                        htmle=htmle+"<td style='width:140px;' >"+i+":00 - "+(i+1)+":00  </td>";
                        for(var j = 1; j <= dias.length;j++){
                            htmle = htmle+"<td class='pinta2'  style='width:100px;' id='"+i+"-"+j+"' ><input type='hidden' name='idhora[]' value='"+i+"'><input type='hidden' name='iddia[]' value='"+j+"'><input type='hidden' name='idcurso[]' value=''></td>";
                        }

                    htmle = htmle+"</tr>";
                }
                htmle = htmle+"</table></form>";

                document.getElementById("horass").innerHTML= htmle;

                $(".pinta2").on("click",function(){

                    if($("ul#bebebe > li").hasClass("pinta")){

                        var nombrecurso = $(".pinta").text();
                        var cursoid = $(".pinta").attr("id");
                        if($(this).text() == ""){
                            $(this).append(nombrecurso);
                            $(this).find("input[name='idcurso[]']").val(cursoid);
                            $(".pinta").remove();
                        }else{
                            alert("ya esta lleno");
                        }

                    }else{
                        alert("debe seleccionar un curso");
                    }
                });


                  function traetabla(){
                    var dias = new Array("Lunes","Martes","Miercoles","Jueves","Viernes");
                    var htmle = "";
                    htmle = htmle+'<table id="tablabebe" class="table table-bordered">';
                    htmle = htmle+"<tr><td style='background:red;'></td>";
                    for(var z=0;z<dias.length;z++){
                        htmle = htmle+"<td>"+dias[z]+"</td>";
                    }
                    htmle = htmle+"</tr>";
                    for(var i = 7 ; i<= 18 ; i++){
                        htmle = htmle+"<tr>";
                            htmle=htmle+"<td style='width:140px;' >"+i+":00 - "+(i+1)+":00  </td>";
                            for(var j = 1; j <= dias.length;j++){
                                htmle = htmle+"<td class='pinta2'  style='width:100px;' id='"+i+"-"+j+"' ><input type='hidden' name='idhora' value='"+i+"'><input type='hidden' name='iddia' value='"+j+"'><input type='hidden' name='idcurso' value=''></td>";
                            }

                        htmle = htmle+"</tr>";
                    }
                    htmle = htmle+"</table>";

                    document.getElementById("horass").innerHTML= htmle;
                }

                $("#grabar").on("click",function(){
                    var ruta = $("#formbebe").attr("action");
                    var data = $("#formbebe").serialize();
                    $.post(ruta,data,function(data){
                        if(data.res == "ok"){
                            alert("se grabo correctamente");
                            location.reload();
                        }else{
                            alert("error al grabar");
                        }
                    },'json')
                });



</script>

</body>
</html>


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

