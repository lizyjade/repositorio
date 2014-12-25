
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="es"> <!--<![endif]-->

    <!-- START @HEAD -->
    <head>
        <!-- START @META SECTION --> 
        <meta charset="utf-8">      
        <title>Recuperar Password | UNIANDES</title>
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
        <link href="../../assets/admin/css/pages/minified/sign.min.css" rel="stylesheet">
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
                <img class="animated bounceIn" src="../../assets/global/img/loader/flat/3.gif" alt="..."/>
            </div>
        </div>
        <!--/ END LOADING ANIMATION -->

        <!-- START @SIGN WRAPPER -->
        <div id="sign-wrapper">

            <!-- Brand -->
            <div class="brand">
                <img src="../../assets/global/img/logo/logo-vertical.png" alt="brand logo"/>
            </div>
            <!--/ Brand -->

            <!-- Lost password form -->
            <form class="form-horizontal rounded shadow" action="#">
                <div class="sign-header">
                    <div class="form-group">
                        <div class="sign-text">
                            <span>Restablecer su contraseña</span>
                        </div>
                    </div>
                </div>
                <div class="sign-body">
                    <div class="form-group">
                        <div class="input-group input-group-lg rounded">
                            <input type="text" class="form-control" placeholder="Username or email ">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        </div>
                    </div>
                </div>
                <div class="sign-footer">
                    <div class="form-group">
                        <button type="submit" class="btn btn-theme btn-lg btn-block no-margin rounded">envía un correo de restablecimiento</button>
                    </div>
                </div>
            </form>
            <!--/ Lost password form -->

            <!-- Content text -->
            <p class="text-muted text-center sign-link">Volver a  <a href="../registro/"> Registrarte</a></p>
            <!--/ Content text -->

        </div><!-- /#sign-wrapper -->
        <!--/ END SIGN WRAPPER -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- START @CORE PLUGINS -->
        <script src="../../assets/global/plugins/jquery/jquery.min.js"></script>
        <script src="../../assets/global/plugins/jquery-cookie/jquery.cookie.js"></script>
        <script src="../../assets/global/plugins/jpreloader-v2/js/jpreloader.min.js"></script>
        <script src="../../assets/global/plugins/jquery-easing/jquery.easing.1.3.js"></script>
        <script src="../../assets/global/plugins/ion-sound/js/ion.sound.min.js"></script>
        <!--/ END CORE PLUGINS -->

        <!-- START @PAGE LEVEL SCRIPTS -->
        <script src="../../assets/admin/js/pages/blankon.sign.js"></script>
        <script src="../../assets/admin/js/demo.js"></script>
        <!--/ END PAGE LEVEL SCRIPTS -->
        <!--/ END JAVASCRIPT SECTION -->

        <!-- START GOOGLE ANALYTICS -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-55892530-1', 'auto');
            ga('send', 'pageview');

        </script>
        <!--/ END GOOGLE ANALYTICS -->

    </body>
    <!-- END BODY -->

</html>