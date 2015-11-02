

<!-- menu original -->

<div id="sidebar" class="sidebar responsive">
    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
    </script>

    <ul class="nav nav-list">
        <li class="active"><a href="index.html"> <i class="menu-icon fa fa-home"></i><span class="menu-text"> Inicio </span></a></li>

        <li class="">
            <a href="index.php#" class="dropdown-toggle">
                <i class="menu-icon fa fa-cogs"></i>
                <span class="menu-text">Mantenimientos</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <ul class="submenu">
                <li><a href="<?php echo base_url(); ?>Area_c"> <i class="menu-icon fa fa-caret-right"></i>Área</a></li>
                <li><a href="<?php echo base_url(); ?>Criterio_c"><i class="menu-icon fa fa-caret-right"></i>Criterio de Evaluación</a></li>
                <li><a href="<?php echo base_url(); ?>Grado_c"><i class="menu-icon fa fa-caret-right"></i>Grado</a></li>
                <li><a href="<?php echo base_url(); ?>Seccion_c"><i class="menu-icon fa fa-caret-right"></i>Sección</a></li>
                <li><a href="<?php echo base_url(); ?>Nivel_c"><i class="menu-icon fa fa-caret-right"></i>Nivel</a></li>
                <li><a href="<?php echo base_url(); ?>Turno_c"><i class="menu-icon fa fa-caret-right"></i>Turno</a></li>
                <li><a href="<?php echo base_url(); ?>Cargo_c"><i class="menu-icon fa fa-caret-right"></i>Cargo</a></li>
                <li><a href="<?php echo base_url(); ?>TipoD_c"><i class="menu-icon fa fa-caret-right"></i>Tipo Discapacidad</a></li>
                <li><a href="<?php echo base_url(); ?>Aspectos_c"> <i class="menu-icon fa fa-caret-right"></i>Aspectos</a></li>
                <li><a href="<?php echo base_url(); ?>Actividad_c"> <i class="menu-icon fa fa-caret-right"></i>Actividad</a></li>
                <li><a href="<?php echo base_url(); ?>Instruccion_c"> <i class="menu-icon fa fa-caret-right"></i>Grado de Instrucción</a></li>
                <li><a href="<?php echo base_url(); ?>Situacion_c"> <i class="menu-icon fa fa-caret-right"></i>Situación</a></li>
                <li><a href="<?php echo base_url(); ?>TipoDoc_c"><i class="menu-icon fa fa-caret-right"></i>Tipo de Documento</a></li>
                <li><a href="<?php echo base_url(); ?>TipoS_c"> <i class="menu-icon fa fa-caret-right"></i>Tipo de Sangre</a></li>
                <li><a href="<?php echo base_url(); ?>Vacuna_c"> <i class="menu-icon fa fa-caret-right"></i>Vacuna</a> </li>
                <li><a href="<?php echo base_url(); ?>Periodo_c"><i class="menu-icon fa fa-caret-right"></i>Periodos</a></li>
                <li><a href="<?php echo base_url(); ?>Concepto_c"> <i class="menu-icon fa fa-caret-right"></i>Conceptos</a></li>
            </ul>
        </li>

        <li>
            <a href="index.html#" class="dropdown-toggle">
                <i class="menu-icon fa fa-book"></i>
                <span class="menu-text"> Matrículas</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <ul class="submenu">
                <li><a href="<?php echo base_url(); ?>RegAlumno_c"><i class="menu-icon fa fa-caret-right"></i>Registrar Alumno</a></li>
                <li><a href="jqgrid.html"><i class="menu-icon fa fa-caret-right"></i>Otros Controles</a></li>
                <li><a href="tables.html"><i class="menu-icon fa fa-caret-right"></i>Control de Peso y Talla</a></li>
                <li><a href="jqgrid.html"><i class="menu-icon fa fa-caret-right"></i>Traslados</a></li>
                <li><a href="jqgrid.html"><i class="menu-icon fa fa-caret-right"></i>Familiar</a></li>
                <li><a href="tables.html"><i class="menu-icon fa fa-caret-right"></i>Domicilio del Alumno</a></li>
                <li><a href="jqgrid.html"><i class="menu-icon fa fa-caret-right"></i>Estado de Salud</a></li>
                <li><a href="jqgrid.html"><i class="menu-icon fa fa-caret-right"></i>Situación Laboral</a></li>
                <li><a href="jqgrid.html"><i class="menu-icon fa fa-caret-right"></i>Ocupación</a></li>
                <li><a href="<?php echo base_url(); ?>Matricula_c"><i class="menu-icon fa fa-caret-right"></i>Matrícula</a></li>
            </ul>
        </li>

        <li>
            <a href="index.html#" class="dropdown-toggle">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Académica </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <ul class="submenu">
                <li><a href="<?php echo base_url(); ?>Nota_c"><i class="menu-icon fa fa-caret-right"></i>Notas</a></li>
                <li><a href="<?php echo base_url(); ?>Anio_lectivo_c"><i class="menu-icon fa fa-caret-right"></i>Año Lectivo</a></li>
            </ul>
        </li>

        <li>
            <a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-list-alt"></i>
                <span class="menu-text">Pensiones</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <ul class="submenu">
                <li><a href="<?php echo base_url(); ?>Cuota_c"><i class="menu-icon fa fa-caret-right"></i>Cronograma de Cobros</a></li>
                <li><a href="<?php echo base_url(); ?>Caja_c"><i class="menu-icon fa fa-caret-right"></i>Caja</a></li>
                <li><a href="<?php echo base_url(); ?>Movimiento_c"><i class="menu-icon fa fa-caret-right"></i>Movimientos</a></li>
            </ul>
        </li>

        <li>
            <a href="index.html#" class="dropdown-toggle">
                <i class="menu-icon fa fa-calendar"></i>
                <span class="menu-text">Asistencia</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <ul class="submenu">
                <li><a href="<?php echo base_url(); ?>Horario_c"><i class="menu-icon fa fa-caret-right"></i>Registrar Horario</a></li>
                <li><a href="index.html#"><i class="menu-icon fa fa-caret-right"></i>Registrar Asistencia</a></li>
            </ul>
        </li>

        <li>
            <a href="index.html#" class="dropdown-toggle">
                <i class="menu-icon fa fa-folder"></i>
                <span class="menu-text">Reportes</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <ul class="submenu">
                <li><a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i>Rep. Asis. Matriculados</a></li>
                 <li><a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i>Rep. Pagos</a></li>
                <li><a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i>Rep. Calf. por Alumno</a></li>

                <li><a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i>Rep. de Asistencias</a></li>
                <li><a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i>Rep. de Tutor por Seccion</a></li>
                <li><a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i>Rep. Traslados por Año</a></li>
            </ul>
        </li>

        <li>
            <a href="index.html#" class="dropdown-toggle">
                <i class="menu-icon fa fa-lock"></i>
                <span class="menu-text">Seguridad</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <ul class="submenu">
                <li><a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i>Personal</a></li>
                <li><a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i>Usuarios</a></li>
                <li><a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i>Permisos</a></li>
                <li><a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i>Tipo Personal</a></li>
                <li><a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i>Perfil</a></li>
                <li><a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i>Módulos</a></li>
                <li><a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i>Base de Datos</a></li>
            </ul>
        </li>
        <li>
            <a href="index.html#" class="dropdown-toggle">
                <i class="menu-icon fa fa-globe"></i>
                <span class="menu-text">Portal Web</span>

                <b class="arrow fa fa-angle-down"></b>
            </a>
              <ul class="submenu">
                <li><a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i>Personal</a></li>
                <li><a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i>Usuarios</a></li>
                <li><a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i>Permisos</a></li>
                <li><a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i>Tipo Personal</a></li>
                <li><a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i>Perfil</a></li>
                <li><a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i>Módulos</a></li>
                <li><a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i>Base de Datos</a></li>
            </ul>

        </li>
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
<div id="sorrap" style="background:#f8f8f8 !important; height:150px; padding:0; margin:0; border:0; overflow:hidden">

</div>


    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
    </script>
</div>
