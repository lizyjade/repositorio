<?php 
	function cabecera(){
		print'<ul class="nav navbar-nav navbar-right">
                        <!-- Start profile -->
                        <li class="dropdown navbar-profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="meta">
                                    <span class="avatar"><img src="../../assets/global/img/avatar/35/1.png" class="img-circle" alt="admin"></span>
                                    <span class="text hidden-xs hidden-sm text-muted">David Criollo</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <!-- Start dropdown menu -->
                            <ul class="dropdown-menu animated flipInX">
                                <li class="dropdown-header">Cuenta</li>
                                <li><a href="../perfil/"><i class="fa fa-user"></i> Perfil</a></li>                                
                                <li><a href="../menu/salir.php"><i class="fa fa-share-square"></i>Salir</a></li>                                
                            </ul>
                            <!--/ End dropdown menu -->
                        </li><!-- /.navbar-profile -->
                        <!--/ End profile -->
                    </ul><!-- /.navbar-right -->';
	}
	function menu(){
		print'<aside id="sidebar-left" class="sidebar-circle">

                <!-- Start left navigation - profile shortcut -->
                <div class="sidebar-content">
                    <div class="media">
                        <a class="pull-left has-notif avatar" href="../perfil/">
                            <img src="../../assets/global/img/avatar/50/1.png" alt="admin">                            
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Hola, Deivid <span>Lee</span></h4>
                            <small>Web Designer</small>
                        </div>
                    </div>
                </div><!-- /.sidebar-content -->
                <!--/ End left navigation -  profile shortcut -->

                <!-- Start left navigation - menu -->
                <ul class="sidebar-menu">

                    <!-- Start navigation - frontend themes -->
                    <li class="active">
                        <a href="../home/">
                            <span class="icon"><i class="fa fa-home"></i></span>
                            <span class="text">Home</span>
                        </a>
                    </li>
                    <!--/ End navigation - frontend themes -->

                    <!-- Start navigation - dashboard -->
                    <li >
                        <a href="../home/">
                            <span class="icon"><i class="fa fa-cubes"></i></span>
                            <span class="text">En Proceso</span>
                        </a>
                    </li>
                    <!--/ End navigation - dashboard -->

                    
                </ul><!-- /.sidebar-menu -->
                <!--/ End left navigation - menu -->

                <!-- Start left navigation - footer -->
                <div class="sidebar-footer hidden-xs hidden-sm hidden-md">
                    <a id="setting" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Setting"><i class="fa fa-cog"></i></a>
                    <a id="fullscreen" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Fullscreen"><i class="fa fa-desktop"></i></a>
                    <a id="lock-screen"  class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Lock Screen"><i class="fa fa-lock"></i></a>
                    <a id="logout" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Logout"><i class="fa fa-power-off"></i></a>
                </div><!-- /.sidebar-footer -->
                <!--/ End left navigation - footer -->

            </aside><!-- /#sidebar-left -->
            <!--/ END SIDEBAR LEFT -->';
	}
	function footer(){
		print' <footer class="footer-content">
                    2014 &copy; Aplicacion Web Admin Portafolio. Creado por <a href="" target="_blank">Elizabeth Vasquez</a>, UNIANDES
                </footer><!-- /.footer-content -->
            ';
	}
?>