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
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-header bordered-bottom bordered-blue">
                                    <span class="widget-caption">Registros de Nota</span>
                                </div>
                                <div class="widget-body">
                                    <div>
                                        <form role="form" id="frm">
                                          <!--   <input type="hidden" id="id_area" name="id_area" value="<?php echo $data_area['id_area'] ?>"> -->
                                          <div class="form-group">
                                            <div class="col-md-4">
                                                <label> Nivel</label><br>

                                                <?php echo $selecNivel; ?>
                                            </div>
                                            <div class="col-md-4">
                                                <label> Grado</label>
                                                <select id="idgrado" name="idgrado" class="form-control" required="">
                                                    <option value=" ">Seleccione...</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label> Turno</label><br>
                                                <?php echo $selecTurno ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <label> Area</label><br>
                                                <?php echo $selectArea; ?>
                                            </div>
                                            <div class="col-md-4">
                                                <label> Asignatura</label>
                                                <select id="idasignatura" name="idasignatura" class="form-control" required="">
                                                    <option value=" ">Seleccione...</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label> Seccion</label>
                                                <select id="idseccion" name="idseccion" class="form-control" required="">
                                                    <option value=" ">Seleccione...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr class="wide" />
                                        <div id="info"></div>

                                        <table class="table table-striped table-bordered table-hover" id="t_notas" style="margin-top:170px;">
                                            <thead>

                                                <tr>
                                                    <th style="width: 40%;">
                                                        Alumno
                                                    </th>
                                                    <th>
                                                        Criterios a evaluar....
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                            <tfoot>
                                                <tr><td colspan="2"><button type="button" class="btn btn-success"onclick="enviar_notas();">Enviar Notas</button></td></tr>
                                            </tfoot>
                                        </table>

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
            var criterios;
            generar_select_secciones = function(data) {
                html = "";
                html = '<select id="idseccion" name="idseccion" >';
                html += '<option>Seleccione...</option>';
                $.each(data, function(i, val) {
                    html += '<option value=' + val['idseccion'] + ' > ' + val['descripcion'] + '</option>';
                });
                html += '</select>'
                return html
            }
            generar_select_grados = function(data) {
                html = "";
                html = '<select id="idgrado" name="idgrado" >';
                html += '<option>Seleccione...</option>';
                $.each(data, function(i, val) {
                    html += '<option value=' + val['idgrado'] + ' > ' + val['descripcion'] + '</option>';
                });
                html += '</select>'
                return html
            }
            generar_select_asignaturas = function(data) {
                html = "";
                html = '<select id="idasignatura" name="idasignatura" >';
                html += '<option>Seleccione...</option>';
                $.each(data, function(i, val) {
                    html += '<option value=' + val['idasignatura'] + ' > ' + val['descripcion'] + '</option>';
                });
                html += '</select>'
                return html
            }
            generar_cuadro_de_notas = function() {
                console.log("criterios");
                console.log(criterios);
                htmlCabecera = "";
                html = "";
                htmlCabecera = "<tr><th style='width: 40%;'>Alumno</th>";
                $.each(criterios, function(i, valx) {
                     htmlCabecera += "<th>"+valx['descripcion']+"</th>";
                });

                htmlCabecera += "</tr>";

                $.post("Nota_c/get_alumnos_matriculados", "idseccion=" + $("#idseccion").val() + "&idgrado=" + $("#idgrado").val() + "&idturno=" + $("#idturno").val(), function(data) {
                    alumnos = data.msg;
                    $.each(alumnos, function(i, val) {
                        html += "<tr><td>" + val['nombres'] + " " + val['apellido_paterno'] + " " + val['apellido_materno'] + "</td>";
                        $.each(criterios, function(i, val2) {
                            html += "<td><input type='text' style='width:30px;' name='nota[" + val2['idcriterio'] + "]'></td>";
                        });

                        html += "</tr>";
                    });
                    $("#t_notas thead").html(htmlCabecera);
                    $("#t_notas tbody").html(html);
                }, 'json');



            }
            enviar_notas = function() {
                str = $("#frm").serialize();
                $.post("Nota_c/Guardar_notas", str, function() {

                }, 'json');
            }
            $(function() {
                $("#idnivel").change(function() {
                    $.post("Nota_c/get_grados", "idnivel=" + $(this).val(), function(data) {
                        if (data.resp == 1) {
                            html = generar_select_grados(data.msg);
                            $("#idgrado").html(html)
                        } else {
                            $("#idgrado").html('<option value=" ">Seleccione...</option>');
                        }
                    }, 'json');
                });
                $("#idgrado").change(function() {

                });
                $("#idarea").change(function() {
                    $("#t_notas tbody").html('');
                    $.post("Nota_c/get_asignaturas", "idarea=" + $(this).val(), function(data) {
                        if (data.resp == 1) {
                            html = generar_select_asignaturas(data.msg);
                            $("#idasignatura").html(html)
                        } else {
                            $("#idasignatura").html('<option value=" ">Seleccione...</option>');
                        }
                    }, 'json');
                });

                $("#idasignatura").change(function() {
                    idgrado = $("#idgrado").val();
                    $.post("Nota_c/get_criterios_and_secciones", "idasignatura=" + $(this).val() + "&idgrado=" + idgrado, function(data) {
                        if (data.resp == 1) {
                            criterios = data.msg.criterios;
                            var secciones = data.msg.secciones;
                            console.log(criterios);
                            console.log(secciones);
                            html = generar_select_secciones(secciones)
                            $("#idseccion").html(html);

//                            $("#t_notas tbody").html(generar_cuadro_de_notas(data.msg));
                        } else {
                            $("#idseccion").html('<option value=" ">Seleccione...</option>');
                            $("#t_notas tbody").html('');
                        }
                    }, 'json');
                });
                $("#idseccion").change(function() {
                    $("#info").html("CURSO : " + $("#idasignatura  option:selected").text() + " EN EL PERIODO :");
                   htmlCuadro = generar_cuadro_de_notas();
                 console.log(htmlCuadro['htmlCabecera']);
                });
            })


        </script>

