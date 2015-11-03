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
                                <span><?php echo $_SESSION["usuario"]." || ".$_SESSION["gestor"]; ?></span>
                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>
                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li><a href="<?php echo base_url(); ?>Principal_c/cerrar"><i class="ace-icon fa fa-power-off"></i>Cerrar Sesión</a></li>
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

<!-- menu original -->

<div id="sidebar" class="sidebar responsive">
    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
    </script>

    <ul class="nav nav-list">
        <li class=""><a href="<?php echo base_url(); ?>Portal_c"> <i class="menu-icon fa fa-home"></i><span class="menu-text"> Inicio </span></a></li>

        <li class="<?php if($padre == "Mantenimientos"){echo "active";}else{echo "";} ?>">
            <a href="index.php#" class="dropdown-toggle">
                <i class="menu-icon fa fa-cogs"></i>
                <span class="menu-text">Mantenimientos</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <ul class="submenu">
                <li class="<?php if($hijo == "Area"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>Area_c"> <i class="menu-icon fa fa-caret-right"></i>Área</a></li>
                <li class="<?php if($hijo == "Criterio"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>Criterio_c"><i class="menu-icon fa fa-caret-right"></i>Criterio de Evaluación</a></li>
                <li class="<?php if($hijo == "Grado"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>Grado_c"><i class="menu-icon fa fa-caret-right"></i>Grado</a></li>
                <li class="<?php if($hijo == "Seccion"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>Seccion_c"><i class="menu-icon fa fa-caret-right"></i>Sección</a></li>
                <li class="<?php if($hijo == "Nivel"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>Nivel_c"><i class="menu-icon fa fa-caret-right"></i>Nivel</a></li>
                <li class="<?php if($hijo == "Turno"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>Turno_c"><i class="menu-icon fa fa-caret-right"></i>Turno</a></li>
                <li class="<?php if($hijo == "Cargo"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>Cargo_c"><i class="menu-icon fa fa-caret-right"></i>Cargo</a></li>
                <li class="<?php if($hijo == "TipoD"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>TipoD_c"><i class="menu-icon fa fa-caret-right"></i>Tipo Discapacidad</a></li>
                <li class="<?php if($hijo == "Aspectos"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>Aspectos_c"> <i class="menu-icon fa fa-caret-right"></i>Aspectos</a></li>

                <li class="<?php if($hijo == "Actividad"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>Actividad_c"> <i class="menu-icon fa fa-caret-right"></i>Actividad</a></li>

                <li class="<?php if($hijo == "Instruccion"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>Instruccion_c"> <i class="menu-icon fa fa-caret-right"></i>Grado de Instrucción</a></li>

                <li class="<?php if($hijo == "TipoDoc"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>TipoDoc_c"><i class="menu-icon fa fa-caret-right"></i>Tipo de Documento</a></li>
                <li class="<?php if($hijo == "TipoS"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>TipoS_c"> <i class="menu-icon fa fa-caret-right"></i>Tipo de Sangre</a></li>
                <li class="<?php if($hijo == "Vacuna"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>Vacuna_c"> <i class="menu-icon fa fa-caret-right"></i>Vacuna</a> </li>
                <li class="<?php if($hijo == "Periodo"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>Periodo_c"><i class="menu-icon fa fa-caret-right"></i>Periodos</a></li>
                <li class="<?php if($hijo == "Concepto"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>Concepto_c"> <i class="menu-icon fa fa-caret-right"></i>Conceptos</a></li>
            </ul>
        </li>

        <li class="<?php if($padre == "Matricula"){echo "active";}else{echo "";} ?>">
            <a href="index.html#" class="dropdown-toggle">
                <i class="menu-icon fa fa-book"></i>
                <span class="menu-text"> Matrículas</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <ul class="submenu">
                <li class="<?php if($hijo == "Alumno"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>RegAlumno_c"><i class="menu-icon fa fa-caret-right"></i>Registrar Alumno</a></li>
                <li class="<?php if($hijo == "Otros"){echo "active";}else{echo "";} ?>"><a href="jqgrid.html"><i class="menu-icon fa fa-caret-right"></i>Otros Controles</a></li>
                <li class="<?php if($hijo == "ControlP"){echo "active";}else{echo "";} ?>"><a href="tables.html"><i class="menu-icon fa fa-caret-right"></i>Control de Peso y Talla</a></li>
                <li class="<?php if($hijo == "Traslados"){echo "active";}else{echo "";} ?>"><a href="jqgrid.html"><i class="menu-icon fa fa-caret-right"></i>Traslados</a></li>
                <li class="<?php if($hijo == "Familiar"){echo "active";}else{echo "";} ?>"><a href="jqgrid.html"><i class="menu-icon fa fa-caret-right"></i>Familiar</a></li>
                <li class="<?php if($hijo == "Domicilio"){echo "active";}else{echo "";} ?>"><a href="tables.html"><i class="menu-icon fa fa-caret-right"></i>Domicilio del Alumno</a></li>
                <li class="<?php if($hijo == "EstadoS"){echo "active";}else{echo "";} ?>"><a href="jqgrid.html"><i class="menu-icon fa fa-caret-right"></i>Estado de Salud</a></li>
                <li class="<?php if($hijo == "Situacion"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>Situacion_c"> <i class="menu-icon fa fa-caret-right"></i>Situación Laboral</a></li>
                <li class="<?php if($hijo == "Ocupacion"){echo "active";}else{echo "";} ?>"><a href="jqgrid.html"><i class="menu-icon fa fa-caret-right"></i>Ocupación</a></li>
                <li class="<?php if($hijo == "Matricula"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>Matricula_c"><i class="menu-icon fa fa-caret-right"></i>Matrícula</a></li>
            </ul>
        </li>

        <li class="<?php if($padre == "Academica"){echo "active";}else{echo "";} ?>">
            <a href="index.html#" class="dropdown-toggle">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Académica </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <ul class="submenu">
                <li class="<?php if($hijo == "Nota"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>Nota_c"><i class="menu-icon fa fa-caret-right"></i>Notas</a></li>

            </ul>
        </li>

        <li class="<?php if($padre == "Pensiones"){echo "active";}else{echo "";} ?>">
            <a href="index.html#" class="dropdown-toggle"><i class="menu-icon fa fa-list-alt"></i>
                <span class="menu-text">Pensiones</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <ul class="submenu">
                <li class="<?php if($hijo == "Cuota"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>Cuota_c"><i class="menu-icon fa fa-caret-right"></i>Cronograma de Cobros</a></li>
                <li class="<?php if($hijo == "Caja"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>Caja_c"><i class="menu-icon fa fa-caret-right"></i>Caja</a></li>
                <li class="<?php if($hijo == "Movimiento"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>Movimiento_c"><i class="menu-icon fa fa-caret-right"></i>Movimientos</a></li>
            </ul>
        </li>

        <li class="<?php if($padre == "Asistencia"){echo "active";}else{echo "";} ?>">
            <a href="index.html#" class="dropdown-toggle">
                <i class="menu-icon fa fa-calendar"></i>
                <span class="menu-text">Asistencia</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <ul class="submenu">
                <li class="<?php if($hijo == "Horario"){echo "active";}else{echo "";} ?>"><a href="<?php echo base_url(); ?>Horario_c"><i class="menu-icon fa fa-caret-right"></i>Registrar Horario</a></li>
                <li class="<?php if($hijo == "Asistencia"){echo "active";}else{echo "";} ?>"><a href="index.html#"><i class="menu-icon fa fa-caret-right"></i>Registrar Asistencia</a></li>
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
