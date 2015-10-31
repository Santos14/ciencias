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

            <div class="page-content">
                <div class="page-body">
                    <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">Registros de Nota</span>
            </div>
            <div class="widget-body">
                <div>
                    <form role="form" id="frm">
                        <input type="hidden" id="id_area" name="id_area" value="<?php echo $data_area['id_area'] ?>">
                        <div class="form-group">
                            <label> Area</label>
                            <?php echo $selectArea;?>

                        </div>
                        <hr class="wide" />

                        <button type="button" class="btn btn-blue" onclick="back_page_main('<?php echo $this->uri->segment(1) ?>');">Atras</button>

                    </form>
                </div>
            </div>
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
