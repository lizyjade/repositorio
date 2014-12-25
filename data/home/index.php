<?php include'../menu/menu.php'; ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="es"> <!--<![endif]-->

    <!-- START @HEAD -->
    <head>
        <!-- START @META SECTION -->
        <meta charset="utf-8">        
        <title>Escritorio | UNIANDES</title>
        <!--/ END META SECTION -->

        <!-- START @FAVICONS -->
        <link rel="shortcut icon" href="../../assets/global/img/ico/favicon.ico" />
        <!--/ END FAVICONS -->

        <!-- START @FONT STYLES -->
        <link href="../../assets/admin/css/fuente/fuente.css" rel="stylesheet">
        <!--/ END FONT STYLES -->

        <!-- START @GLOBAL MANDATORY STYLES -->
        <link href="../../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--/ END GLOBAL MANDATORY STYLES -->

        <!-- START @PAGE LEVEL STYLES -->
        <link href="../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../../assets/global/plugins/animate/animate.min.css" rel="stylesheet">
        <!--/ END PAGE LEVEL STYLES -->

        <!-- START @THEME STYLES -->
        <link href="../../assets/admin/css/minified/reset.min.css" rel="stylesheet">
        <link href="../../assets/admin/css/minified/layout.min.css" rel="stylesheet">
        <link href="../../assets/admin/css/minified/components.min.css" rel="stylesheet">
        <link href="../../assets/admin/css/minified/plugins.min.css" rel="stylesheet">
        <link href="../../assets/admin/css/themes/minified/default.theme.min.css" rel="stylesheet" id="theme">
        <link href="../../assets/admin/css/custom.css" rel="stylesheet">
        <!--/ END THEME STYLES -->

        <!-- START @IE SUPPORT -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!--/ END IE SUPPORT -->
    </head>
    <!--/ END HEAD -->

    <body>

        <!-- START @LOADING ANIMATION -->
        <div id="loading">
            <div class="loading-inner">
                <img src="../../assets/global/img/loader/flat/3.gif" alt="..."/>
            </div>
        </div><!-- /#loading -->
        <!--/ END LOADING ANIMATION -->

        <!-- START @WRAPPER -->
        <section id="wrapper">

            <!-- START @HEADER -->
            <header id="header">

                <!-- Start header left -->
                <div class="header-left">
                    <!-- Start offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                    <div class="navbar-minimize-mobile left">
                        <i class="fa fa-bars "></i>
                    </div>                    
                    <!--/ End offcanvas left -->

                    <!-- Start navbar header -->
                    <div class="navbar-header">

                        <!-- Start brand -->
                        <a class="navbar-brand" href="dashboard.html">
                            <img class="logo" src="../../assets/global/img/logo/logo-white.png" alt="brand logo"/>
                        </a><!-- /.navbar-brand -->
                        <!--/ End brand -->

                    </div><!-- /.navbar-header -->
                    <!--/ End navbar header -->

                    <!-- Start offcanvas right: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                  
                    <!--/ End offcanvas right -->

                    <div class="clearfix"></div>
                </div><!-- /.header-left -->
                <!--/ End header left -->

                <!-- Start header right -->
                <div class="header-right">
                    <!-- Start navbar toolbar -->
                    <div class="navbar navbar-toolbar">

                    <!-- Start left navigation -->
                    <ul class="nav navbar-nav navbar-left">

                        <!-- Start sidebar shrink -->
                        <li class="navbar-minimize">
                            <a href="javascript:void(0);" title="Minimize sidebar">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <!--/ End sidebar shrink -->

                        

                    </ul><!-- /.navbar-left -->
                    <!--/ End left navigation -->

                    <!-- Start right navigation -->
                    <?php cabecera(); ?>
                    <!--/ End right navigation -->

                    </div><!-- /.navbar-toolbar -->
                    <!--/ End navbar toolbar -->
                </div><!-- /.header-right -->
                <!--/ End header left -->

            </header> <!-- /#header -->
            <!--/ END HEADER -->

            <!--

            START @SIDEBAR LEFT
            |=========================================================================================================================|
            |  TABLE OF CONTENTS (Apply to sidebar left class)                                                                        |
            |=========================================================================================================================|
            |  01. sidebar-box               |  Variant style sidebar left with box icon                                              |
            |  02. sidebar-rounded           |  Variant style sidebar left with rounded icon                                          |
            |  03. sidebar-circle            |  Variant style sidebar left with circle icon                                           |
            |=========================================================================================================================|

            -->
            <?php menu(); ?>

            <!-- START @PAGE CONTENT -->
            <section id="page-content">

                <!-- Start page header -->
                <div class="header-content">
                    <h2><i class="fa fa-cubes"></i> Menu Principal</h2>
                    <div class="breadcrumb-wrapper hidden-xs">
                        <span class="label">Usted está aquí : </span>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="dashboard.html">Home</a>                                
                            </li>                            
                        </ol>
                    </div><!-- /.breadcrumb-wrapper -->
                </div><!-- /.header-content -->
                <!--/ End page header -->

                <!-- Start body content -->
                <div class="animated fadeIn">

                   
                   
                    
                   

                </div><!-- /.body-content -->
                <!--/ End body content -->

                <!-- Start footer content -->
               <?php footer(); ?>
                <!--/ End footer content -->

            </section><!-- /#page-content -->
            <!--/ END PAGE CONTENT -->

        </section><!-- /#wrapper -->       
        <!--/ END WRAPPER -->

        <!-- START @BACK TOP -->
        <div id="back-top" class="animated pulse circle">
            <i class="fa fa-angle-up"></i>
        </div><!-- /#back-top -->
        <!--/ END BACK TOP -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- START @CORE PLUGINS -->
        <script src="../../assets/global/plugins/jquery/jquery.min.js"></script>
        <script src="../../assets/global/plugins/jquery-cookie/jquery.cookie.js"></script>
        <script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/global/plugins/typeahead/handlebars.js"></script>
        <script src="../../assets/global/plugins/typeahead/typeahead.bundle.min.js"></script>
        <script src="../../assets/global/plugins/jquery-niceScroll/jquery.nicescroll.min.js"></script>
        <script src="../../assets/global/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="../../assets/global/plugins/jpreloader-v2/js/jpreloader.min.js"></script>
        <script src="../../assets/global/plugins/jquery-easing/jquery.easing.1.3.js"></script>
        <script src="../../assets/global/plugins/ion-sound/js/ion.sound.min.js"></script>
        <script src="../../assets/global/plugins/bootbox/bootbox.js"></script>
        <!--/ END CORE PLUGINS -->

        <!-- START @PAGE LEVEL PLUGINS -->
        <script src="../../assets/global/plugins/chosen/chosen.jquery.js"></script>
        <script src="../../assets/global/plugins/jquery-mockjax/jquery.mockjax.js"></script>
        <script src="../../assets/global/plugins/jquery-validation/jquery.validate.js"></script>
        <!--/ END PAGE LEVEL PLUGINS -->

        <!-- START @PAGE LEVEL SCRIPTS -->
        <script src="../../assets/admin/js/apps.js"></script>
        <script src="../../assets/admin/js/pages/blankon.form.js"></script>
        <script src="../../assets/admin/js/demo.js"></script>
        <!--/ END PAGE LEVEL SCRIPTS -->
        <!--/ END JAVASCRIPT SECTION -->

        <!-- START GOOGLE ANALYTICS -->
       
        <!--/ END GOOGLE ANALYTICS -->

    </body>
    <!--/ END BODY -->

</html>

