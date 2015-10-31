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
    <style type="text/css">
    .pinta{background: skyblue;}
    </style>
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
                   	<div class="col-md-12">
                   		<select class="form-control col-md-4" id="cnivel">
                   			<option value="" >Seleccione Nivel</option>
                   			<?php foreach ($datos as $key => $value): ?>
                   				<option value='<?php echo $value->idnivel; ?>' ><?php echo $value->descripcion; ?></option>
                   			<?php endforeach ?>
                   		</select>

                   		<select class="form-control col-md-4" id="cgrado">
                   			<option value="" >Seleccione Grado</option>
                   		</select>

                   		<select class="form-control col-md-4" id="cseccion">
                   			<option value="" >Seleccione Seccion</option>
                   			<?php foreach ($secciones as $key => $value): ?>
                   				<option value="<?php echo $value->idseccion; ?>" ><?php echo $value->descripcion; ?></option>
                   			<?php endforeach ?>
                   		</select>
                   	</div>
                   	<div class="col-md-4" id="listadecursos">
                   		<ul id='bebebe' class='list-group'>
                   		</ul>
                   		<button  class="btn btn-succes" id="limpiar">LIMPIAR</button>
                   		<button  class="btn btn-succes" id="grabar">GRABAR</button>
                   	</div>
                   	<div class="col-md-8" id="horass">
                   		
                   	</div>
                    
                </div>
            </div>
        </div>

</div>
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
<!--  /Body -->
</html>
