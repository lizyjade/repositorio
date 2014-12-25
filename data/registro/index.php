
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="es"> <!--<![endif]-->

    <!-- START @HEAD -->
    <head>
        <!-- START @META SECTION -->
        <meta charset="utf-8">        
        <title>Registro | UNIANDES</title>
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
                 <img src="../../assets/global/img/logo/acceso.png" alt="brand logo"/>
            </div>
            <!--/ Brand -->

            <!-- Register form -->
            <form class="form-horizontal rounded shadow no-overflow">
                <div class="sign-header">
                    <div class="form-group">
                        <div class="sign-text">
                           
                            <span>Crear nuevo usuario</span>
                        </div>
                    </div>
                </div>
                <div class="sign-body">
                    <div class="form-group">
                        <div class="input-group input-group-lg rounded no-overflow">
                            <input type="email" class="form-control" placeholder="Tu Email">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg rounded no-overflow">
                            <input type="text" class="form-control" placeholder="Nombre">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg rounded no-overflow">
                            <input type="text" class="form-control" placeholder="Apellido">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg rounded no-overflow">
                            <input type="text" class="form-control" placeholder="Cedula">
                            <span class="input-group-addon"><i class="fa fa-cubes"></i></span>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="sign-footer">
                    <div class="form-group">
                        <div class="callout callout-info no-margin">
                            <p class="text-muted">Para confirmar y activar su nueva cuenta , tendremos que enviar el código de activación a tu correo.</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="ckbox ckbox-theme">
                            <input id="term-of-service" value="1" type="checkbox">
                            <label for="term-of-service" class="rounded">Estoy de acuerdo con <a data-toggle="modal" data-target=".bs-example-modal-photo">Terminos del Servicio</a></label>
                        </div>                       
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-theme btn-lg btn-block btn-push">Registrar</button>                       
                    </div>
                </div>
            </form>
            <!--/ Register form -->
          
           <!-- Start photo viewer modal element -->
            <div class="modal fade bs-example-modal-photo" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-photo-viewer">
                    <div class="modal-content">
                        <div class="row">

                            <div class="col-md-4 col-sm-12 modal-photo-left">
                                <div class="modal-photo">
                                    <img src="../../assets/global/img/logo/politicas.png" >
                                </div>
                            </div><!-- /.modal-photo-left -->

                            <div class="col-md-8 col-sm-12 modal-photo-right">
                                <div class="media-details">
                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>

                                    <span class="category">Terminos y Condiciones</span>
                                    <h3 class="media-title">Universidad Regional Autónoma de los Andes</h3>
                                    <p class="text-muted">
                                        La Aplicación Web portafolio estudiantil se encuentra manipulado por “UNIANDES IBARRA”.
                                         El acceso a la aplicación Web portafolio estudiantil constituye la aceptación
                                          sin modificación ni alteración de todos los términos, condiciones y cláusulas aquí
                                           contenidas. Asimismo, el usuario puede estar sujeto a términos, condiciones y cláusulas 
                                           adicionales ubicadas en otras partes de la Aplicación Web Adicionalmente, la Aplicación 
                                           Web puede contener términos, condiciones y cláusulas agregadas para determinadas aplicaciones

                                         y herramientas (por ejemplo, acceso a archivos u objetos de auditoria)..
                                    </p>

                                    

                                </div><!-- /.media-details -->
                            </div><!-- /.modal-photo-right -->

                        </div><!-- /.row -->
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!--/ End photo viewer modal element -->


            <!-- Content text -->
            <p class="text-muted text-center sign-link">¿Ya tienes una cuenta? <a href="../logeo/"> Entra aquí</a></p>
            <!--/ Content text -->

        </div><!-- /#sign-wrapper -->
        <!--/ END SIGN WRAPPER -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- START @CORE PLUGINS -->
        <script src="../../assets/global/plugins/jquery/jquery.min.js"></script>
        <script src="../../assets/global/plugins/jquery-cookie/jquery.cookie.js"></script>
        <script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js"></script>
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
    <!-- END Body -->

</html>