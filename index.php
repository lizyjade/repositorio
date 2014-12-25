
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <!-- START @HEAD -->
    <head>
        <!-- START @META SECTION -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.">
        <meta name="keywords" content="">
        <meta name="author" content="Djava UI">
        <title>DASHBOARD | BLANKON - Fullpack Admin Theme</title>
        <!--/ END META SECTION -->

        <!-- START @FAVICONS -->
        <link href="../../../assets/global/img/ico/apple-touch-icon-144x144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
        <link href="../../../assets/global/img/ico/apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
        <link href="../../../assets/global/img/ico/apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
        <link href="../../../assets/global/img/ico/apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon-precomposed">
        <link href="../../../assets/global/img/ico/apple-touch-icon.png" rel="shortcut icon">
        <!--/ END FAVICONS -->

        <!-- START @FONT STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet">
        <!--/ END FONT STYLES -->

        <!-- START @GLOBAL MANDATORY STYLES -->
        <link href="../../../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--/ END GLOBAL MANDATORY STYLES -->

        <!-- START @PAGE LEVEL STYLES -->
        <link href="../../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../../../assets/global/plugins/animate/animate.min.css" rel="stylesheet">
        <link href="../../../assets/global/plugins/dropzone/css/dropzone.css" rel="stylesheet">
        <link href="../../../assets/global/plugins/gritter/css/jquery.gritter.css" rel="stylesheet">
        <!--/ END PAGE LEVEL STYLES -->

        <!-- START @THEME STYLES -->
        <link href="../../../assets/admin/css/minified/reset.min.css" rel="stylesheet">
        <link href="../../../assets/admin/css/minified/layout.min.css" rel="stylesheet">
        <link href="../../../assets/admin/css/minified/components.min.css" rel="stylesheet">
        <link href="../../../assets/admin/css/minified/plugins.min.css" rel="stylesheet">
        <link href="../../../assets/admin/css/themes/minified/default.theme.min.css" rel="stylesheet" id="theme">
        <link href="../../../assets/admin/css/custom.css" rel="stylesheet">
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

    <!--

    |=========================================================================================================================|
    |  TABLE OF CONTENTS (Use search to find needed section)                                                                  |
    |=========================================================================================================================|
    |  01. @HEAD                        |  Container for all the head elements                                                |
    |  02. @META SECTION                |  The meta tag provides metadata about the HTML document                             |
    |  03. @FAVICONS                    |  Short for favorite icon, shortcut icon, website icon, tab icon or bookmark icon    |
    |  04. @FONT STYLES                 |  Font from google fonts                                                             |
    |  05. @GLOBAL MANDATORY STYLES     |  The main 3rd party plugins css file                                                |
    |  06. @PAGE LEVEL STYLES           |  Specific 3rd party plugins css file                                                |
    |  07. @THEME STYLES                |  The main theme css file                                                            |
    |  08. @IE SUPPORT                  |  IE support of HTML5 elements and media queries                                     |
    |=========================================================================================================================|
    |  09. @BODY                        |  Contains all the contents of an HTML document                                      |
    |  10. @LOADING ANIMATION           |  Loading animation when the page reload                                             |
    |  11. @WRAPPER                     |  Wrapping page section                                                              |
    |  12. @HEADER                      |  Header page section contains about logo, top navigation, notification menu         |
    |  13. @SIDEBAR LEFT                |  Sidebar page section contains all sidebar menu left                                |
    |  14. @PAGE CONTENT                |  Contents page section contains breadcrumb, content page, footer page               |
    |  15. @SIDEBAR RIGHT               |  Sidebar page section contains all sidebar menu right                               |
    |  16. @BACK TOP                    |  Element back to top and action                                                     |
    |=========================================================================================================================|
    |  17. @CORE PLUGINS                |  The main 3rd party plugins script file                                             |
    |  18. @PAGE LEVEL PLUGINS          |  Specific 3rd party plugins script file                                             |
    |  19. @PAGE LEVEL SCRIPTS          |  The main theme script file                                                         |
    |=========================================================================================================================|

    START @BODY
    |=========================================================================================================================|
	|  TABLE OF CONTENTS (Apply to body class)                                                                                |
	|=========================================================================================================================|
    |  01. page-boxed                   |  Page into the box is not full width screen                                         |
	|  02. page-header-fixed            |  Header element become fixed position                                               |
	|  03. page-sidebar-fixed           |  Sidebar element become fixed position with scroll support                          |
	|  04. page-sidebar-minimize        |  Sidebar element become minimize style width sidebar                                |
	|  05. page-footer-fixed            |  Footer element become fixed position with scroll support on page content           |
	|  06. page-sound                   |  For playing sounds on user actions and page events                                 |
	|=========================================================================================================================|

	-->
    <body class="page-session page-sound page-header-fixed page-sidebar-fixed">

        <!-- START @LOADING ANIMATION -->
        <div id="loading">
            <div class="loading-inner">
                <img src="../../../assets/global/img/loader/flat/3.gif" alt="..."/>
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
                        <i class="fa fa-bars"></i>
                    </div>
                    <!--/ End offcanvas left -->

                    <!-- Start navbar header -->
                    <div class="navbar-header">

                        <!-- Start brand -->
                        <a class="navbar-brand" href="dashboard.html">
                            <img class="logo" src="../../../assets/global/img/logo/logo-white.png" alt="brand logo"/>
                        </a><!-- /.navbar-brand -->
                        <!--/ End brand -->

                    </div><!-- /.navbar-header -->
                    <!--/ End navbar header -->

                    <!-- Start offcanvas right: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                    <div class="navbar-minimize-mobile right">
                        <i class="fa fa-cog"></i>
                    </div>
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
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                            <!--/ End sidebar shrink -->

                            <!-- Start form search -->
                            <li class="navbar-search">
                                <!-- Just view on mobile screen-->
                                <a href="#" class="trigger-search"><i class="fa fa-search"></i></a>
                                <form class="navbar-form">
                                    <div class="form-group has-feedback">
                                        <input type="text" class="form-control typeahead rounded" placeholder="Search for people, places and things">
                                        <button type="submit" class="btn btn-theme fa fa-search form-control-feedback rounded"></button>
                                    </div>
                                </form>
                            </li>
                            <!--/ End form search -->

                        </ul><!-- /.nav navbar-nav navbar-left -->
                        <!--/ End left navigation -->

                        <!-- Start right navigation -->
                        <ul class="nav navbar-nav navbar-right"><!-- /.nav navbar-nav navbar-right -->

                        <!-- Start messages -->
                        <li class="dropdown navbar-message">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i><span class="count label label-danger rounded">7</span></a>

                            <!-- Start dropdown menu -->
                            <div class="dropdown-menu animated flipInX">
                                <div class="dropdown-header">
                                    <span class="title">Messages <strong>(7)</strong></span>
                                    <span class="option text-right"><a href="#">+ New message</a></span>
                                </div>
                                <div class="dropdown-body">

                                    <!-- Start message search -->
                                    <form class="form-horizontal" action="#">
                                        <div class="form-group has-feedback has-feedback-sm m-5">
                                            <input type="text" class="form-control input-sm" placeholder="Search message...">
                                            <button type="submit" class="btn btn-theme fa fa-search form-control-feedback"></button>
                                        </div>
                                    </form>
                                    <!--/ End message search -->

                                    <!-- Start message list -->
                                    <div class="media-list niceScroll">

                                        <a href="page-messages.html" class="media">
                                            <div class="pull-left"><img src="../../../assets/global/img/avatar/50/2.png" class="media-object img-circle" alt="John Kribo"/></div>
                                            <div class="media-body">
                                                <span class="media-heading">John Kribo</span>
                                                <span class="media-text">I was impressed how fast the content is loaded. Congratulations. nice design.</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta"><i class="fa fa-reply"></i></span>
                                                <span class="media-meta"><i class="fa fa-paperclip"></i></span>
                                                <span class="media-meta pull-right">13 minutes</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="page-messages.html" class="media">
                                            <div class="pull-left"><img src="../../../assets/global/img/avatar/50/3.png" class="media-object img-circle" alt="Jennifer Poiyem"/></div>
                                            <div class="media-body">
                                                <span class="media-heading">Jennifer Poiyem</span>
                                                <span class="media-text">It’s Simple, Clean & Nice .. Good work Dear .. GLWS</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta pull-right">17 hours</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="page-messages.html" class="media">
                                            <div class="pull-left"><img src="../../../assets/global/img/avatar/50/4.png" class="media-object img-circle" alt="Clara Wati"/></div>
                                            <div class="media-body">
                                                <span class="media-heading">Clara Wati</span>
                                                <span class="media-text">Great work! Do you have any plans to add loading indicators for AJAX calls that might take longer than normal?</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta pull-right">1 days</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="page-messages.html" class="media">
                                            <div class="pull-left"><img src="../../../assets/global/img/avatar/50/5.png" class="media-object img-circle" alt="Toni Mriang"/></div>
                                            <div class="media-body">
                                                <span class="media-heading">Toni Mriang</span>
                                                <span class="media-text">I am very interested in the theme and I’m thinking about buying it.</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta"><i class="fa fa-paperclip"></i></span>
                                                <span class="media-meta pull-right">2 days</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="page-messages.html" class="media">
                                            <div class="pull-left"><img src="../../../assets/global/img/avatar/50/6.png" class="media-object img-circle" alt="Bella negoro"/></div>
                                            <div class="media-body">
                                                <span class="media-heading">Bella negoro</span>
                                                <span class="media-text">Great work! Good luck!</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta"><i class="fa fa-paperclip"></i></span>
                                                <span class="media-meta"><i class="fa fa-user"></i></span>
                                                <span class="media-meta pull-right">1 week</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="page-messages.html" class="media">
                                            <div class="pull-left"><img src="../../../assets/global/img/avatar/50/7.png" class="media-object img-circle" alt="Kim Mbako"/></div>
                                            <div class="media-body">
                                                <span class="media-heading">Kim Mbako</span>
                                                <span class="media-text">Hi! First of all, thank you for the very nice theme for creating awesome web applications :)</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta"><i class="fa fa-paperclip"></i></span>
                                                <span class="media-meta pull-right">1 week</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="page-messages.html" class="media">
                                            <div class="pull-left"><img src="../../../assets/global/img/avatar/50/8.png" class="media-object img-circle" alt="Pack Suparman"/></div>
                                            <div class="media-body">
                                                <span class="media-heading">Pack Suparman</span>
                                                <span class="media-text">Apik temen kie jan template, nyong gep tuku jal..</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta pull-right">1 week</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <!-- Start message indicator -->
                                        <a href="#" class="media indicator inline">
                                            <span class="spinner">Load more messages...</span>
                                        </a>
                                        <!--/ End message indicator -->

                                    </div>
                                    <!--/ End message list -->

                                </div>
                                <div class="dropdown-footer">
                                    <a href="page-messages.html">See All</a>
                                </div>
                            </div>
                            <!--/ End dropdown menu -->

                        </li><!-- /.dropdown navbar-message -->
                        <!--/ End messages -->

                        <!-- Start notifications -->
                        <li class="dropdown navbar-notification">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i><span class="count label label-danger rounded">6</span></a>

                            <!-- Start dropdown menu -->
                            <div class="dropdown-menu animated flipInX">
                                <div class="dropdown-header">
                                    <span class="title">Notifications <strong>(10)</strong></span>
                                    <span class="option text-right"><a href="#"><i class="fa fa-cog"></i> Setting</a></span>
                                </div>
                                <div class="dropdown-body niceScroll">

                                    <!-- Start notification list -->
                                    <div class="media-list small">

                                        <a href="#" class="media">
                                            <div class="media-object pull-left"><i class="fa fa-share-alt fg-info"></i></div>
                                            <div class="media-body">
                                                <span class="media-text"><strong>Dolanan Remi : </strong><strong>Chris Job,</strong><strong>Denny Puk</strong> and <strong>Joko Fernandes</strong> sent you <strong>5 free energy boosts and other request</strong></span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta">3 minutes</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="#" class="media">
                                            <div class="media-object pull-left"><i class="fa fa-cogs fg-success"></i></div>
                                            <div class="media-body">
                                                <span class="media-text">Your sistem is updated</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta">5 minutes</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="#" class="media">
                                            <div class="media-object pull-left"><i class="fa fa-ban fg-danger"></i></div>
                                            <div class="media-body">
                                                <span class="media-text">3 Member is BANNED</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta">5 minutes</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="#" class="media">
                                            <div class="media-object pull-left"><img class="img-circle" src="../../../assets/global/img/avatar/50/10.png" alt=""/></div>
                                            <div class="media-body">
                                                <span class="media-text">daddy pushed to project Blankon version 1.0.0</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta">45 minutes</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="#" class="media">
                                            <div class="media-object pull-left"><i class="fa fa-user fg-info"></i></div>
                                            <div class="media-body">
                                                <span class="media-text">Change your user profile</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta">1 days</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <a href="#" class="media">
                                            <div class="media-object pull-left"><i class="fa fa-book fg-info"></i></div>
                                            <div class="media-body">
                                                <span class="media-text">Added new article</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta">1 days</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                        <!-- Start notification indicator -->
                                        <a href="#" class="media indicator inline">
                                            <span class="spinner">Load more notifications...</span>
                                        </a>
                                        <!--/ End notification indicator -->

                                    </div>
                                    <!--/ End notification list -->

                                </div>
                                <div class="dropdown-footer">
                                    <a href="#">See All</a>
                                </div>
                            </div>
                            <!--/ End dropdown menu -->

                        </li><!-- /.dropdown navbar-notification -->
                        <!--/ End notifications -->

                        <!-- Start profile -->
                        <li class="dropdown navbar-profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="meta">
                                    <span class="avatar"><img src="../../../assets/global/img/avatar/35/1.png" class="img-circle" alt="admin"></span>
                                    <span class="text hidden-xs hidden-sm text-muted">Tol Lee</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <!-- Start dropdown menu -->
                            <ul class="dropdown-menu animated flipInX">
                                <li class="dropdown-header">Account</li>
                                <li><a href="page-profile.html"><i class="fa fa-user"></i>View profile</a></li>
                                <li><a href="mail-inbox.html"><i class="fa fa-envelope-square"></i>Inbox <span class="label label-info pull-right">30</span></a></li>
                                <li><a href="#"><i class="fa fa-share-square"></i>Invite a friend</a></li>
                                <li class="dropdown-header">Product</li>
                                <li><a href="#"><i class="fa fa-upload"></i>Upload</a></li>
                                <li><a href="#"><i class="fa fa-dollar"></i>Earning</a></li>
                                <li><a href="#"><i class="fa fa-download"></i>Withdrawals</a></li>
                                <li class="divider"></li>
                                <li><a href="page-signin.html"><i class="fa fa-sign-out"></i>Logout</a></li>
                            </ul>
                            <!--/ End dropdown menu -->
                        </li><!-- /.dropdown navbar-profile -->
                        <!--/ End profile -->

                        <!-- Start settings -->
                        <li class="navbar-setting pull-right">
                            <a href="javascript:void(0);"><i class="fa fa-cog fa-spin"></i></a>
                        </li><!-- /.navbar-setting pull-right -->
                        <!--/ End settings -->

                        </ul>
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
            <aside id="sidebar-left" class="sidebar-circle">

                <!-- Start left navigation - profile shortcut -->
                <div class="sidebar-content">
                    <a href="#" class="close">&times;</a>
                    <div class="media">
                        <a class="pull-left has-notif avatar" href="page-profile.html">
                            <img src="../../../assets/global/img/avatar/50/1.png" alt="admin">
                            <i class="online"></i>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Hello, <span>Lee</span></h4>
                            <small>Web Designer</small>
                        </div>
                    </div>
                </div><!-- /.sidebar-content -->
                <!--/ End left navigation -  profile shortcut -->

                <!-- Start left navigation - menu -->
                <ul class="sidebar-menu">

                    <!-- Start navigation - frontend themes -->
                    <li>
                        <a href="frontend-themes.html">
                            <span class="icon"><i class="fa fa-leaf"></i></span>
                            <span class="text">Frontend</span>
                            <span class="label label-danger pull-right rounded">soon</span>
                        </a>
                    </li>
                    <!--/ End navigation - frontend themes -->

                    <!-- Start navigation - dashboard -->
                    <li class="active">
                        <a href="dashboard.html">
                            <span class="icon"><i class="fa fa-home"></i></span>
                            <span class="text">Dashboard</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <!--/ End navigation - dashboard -->

                    <!-- Start navigation - landing -->
                    <li>
                        <a href="index.html">
                            <span class="icon"><i class="fa fa-rocket"></i></span>
                            <span class="text">Landing</span>
                        </a>
                    </li>
                    <!--/ End navigation - landing -->

                    <!-- Start category ui kit-->
                    <li class="sidebar-category">
                        <span>UI KIT</span>
                        <span class="pull-right"><i class="fa fa-magic"></i></span>
                    </li>
                    <!--/ End category ui kit-->

                    <!-- Start navigation - pages -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-file-o"></i></span>
                            <span class="text">Pages</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="page-calendar.html">Calendar</a></li>
                            <li><a href="page-invoice.html">Invoice</a></li>
                            <li><a href="page-messages.html">Messages</a></li>
                            <li><a href="page-timeline.html">Timeline</a></li>
                            <li><a href="page-profile.html">Profile</a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);">Blog<span class="arrow"></span></a>
                                <ul>
                                    <li><a href="page-blog-list.html">List</a></li>
                                    <li><a href="page-blog-single.html">Single</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);">Error <span class="arrow"></span></a>
                                <ul>
                                    <li><a href="page-error-403.html">Error 403</a></li>
                                    <li><a href="page-error-404.html">Error 404</a></li>
                                    <li><a href="page-error-500.html">Error 500</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);">Account <span class="arrow"></span></a>
                                <ul>
                                    <li><a href="page-signin.html">Sign In</a></li>
                                    <li><a href="page-signup.html">Sign Up</a></li>
                                    <li><a href="page-lost-password.html">Lost password</a></li>
                                    <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!--/ End navigation - pages -->

                    <!-- Start navigation - forms -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-list-alt"></i></span>
                            <span class="text">Forms</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="form-element.html">Element</a></li>
                            <li><a href="form-advanced.html">Advanced</a></li>
                            <li><a href="form-layout.html">Layout</a></li>
                            <li><a href="form-validation.html">Validation</a></li>
                            <li><a href="form-wizard.html">Wizard</a></li>
                            <li><a href="form-wysiwyg.html">Text Editor</a></li>
                        </ul>
                    </li>
                    <!--/ End navigation - forms -->

                    <!-- Start navigation - tables -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-table"></i></span>
                            <span class="text">Tables</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="table-default.html">Default</a></li>
                            <li><a href="table-color.html">Color</a></li>
                            <li><a href="table-datatable.html">Datatable</a></li>
                        </ul>
                    </li>
                    <!--/ End navigation - tables -->

                    <!-- Start navigation - mail -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-envelope"></i></span>
                            <span class="text">Mail</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="mail-inbox.html">Inbox</a></li>
                            <li><a href="mail-compose.html">Compose mail</a></li>
                            <li><a href="mail-view.html">View mail</a></li>
                        </ul>
                    </li>
                    <!--/ End navigation - mail -->

                    <!-- Start navigation - maps -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                            <span class="text">Maps</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="maps-google.html">Google</a></li>
                            <li><a href="maps-vector.html">Vector</a></li>
                        </ul>
                    </li>
                    <!--/ End navigation - maps -->

                    <!-- Start navigation - charts -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-signal"></i></span>
                            <span class="text">Charts</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="chart-flot.html">Flot</a></li>
                            <li><a href="chart-morris.html">Morris</a></li>
                            <li><a href="chart-chartjs.html">Chartjs</a></li>
                            <li><a href="chart-c3js.html">C3js</a></li>
                        </ul>
                    </li>
                    <!--/ End navigation - charts -->

                    <!-- Start category development -->
                    <li class="sidebar-category">
                        <span>DEVELOP</span>
                        <span class="pull-right"><i class="fa fa-code"></i></span>
                    </li>
                    <!--/ End category development -->

                    <!-- Start development - components -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-cube"></i></span>
                            <span class="text">Components</span>
                            <span class="plus"></span>
                        </a>
                        <ul>
                            <li><a href="component-grid-system.html">Grid System</a></li>
                            <li><a href="component-buttons.html">Buttons</a></li>
                            <li><a href="component-typography.html">Typography</a></li>
                            <li><a href="component-panel.html">Panels</a></li>
                            <li><a href="component-alerts.html">Alerts</a></li>
                            <li><a href="component-modals.html">Modals</a></li>
                            <li><a href="component-tabsaccordion.html">Tabs & Accordion</a></li>
                            <li><a href="component-sliders.html">Sliders</a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);">
                                    <span class="text">Icons</span>
                                    <span class="count label label-danger">4</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="component-glyphicons.html">Glyphicons</a></li>
                                    <li><a href="component-font-awesome.html">Font Awesome</a></li>
                                    <li><a href="component-weather-icons.html">Weather Icons</a></li>
                                    <li><a href="component-map-icons.html">Map Icons</a></li>
                                </ul>
                            </li>
                            <li><a href="component-other.html">Other</a></li>
                        </ul>
                    </li>
                    <!--/ End development - components -->

                    <!-- Start development - layouts -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-columns"></i></span>
                            <span class="text">Layouts</span>
                            <span class="plus"></span>
                        </a>
                        <ul>
                            <li><a href="layout-blank.html">Blank Page</a></li>
                            <li><a href="layout-boxed.html">Boxed Page</a></li>
                            <li><a href="layout-header-fixed.html">Header Fixed Page</a></li>
                            <li><a href="layout-sidebar-fixed.html">Sidebar Fixed Page</a></li>
                            <li><a href="layout-sidebar-minimize.html">Sidebar Minimize Page</a></li>
                            <li><a href="layout-sidebar-default.html">Sidebar Default Page</a></li>
                            <li><a href="layout-sidebar-box.html">Sidebar Box Page</a></li>
                            <li><a href="layout-sidebar-rounded.html">Sidebar Rounded Page</a></li>
                            <li><a href="layout-sidebar-circle.html">Sidebar Circle Page</a></li>
                            <li><a href="layout-footer-fixed.html">Footer Fixed Page</a></li>
                        </ul>
                    </li>
                    <!--/ End development - layouts -->

                    <!-- Start category widget -->
                    <li class="sidebar-category">
                        <span>WIDGET</span>
                        <span class="pull-right"><i class="fa fa-cubes"></i></span>
                    </li>
                    <!--/ End category widget -->

                    <!-- Start widget - overview -->
                    <li>
                        <a href="widget-overview.html">
                            <span class="icon"><i class="fa fa-desktop"></i></span>
                            <span class="text">Overview</span>
                            <span class="label label-primary pull-right rounded">10</span>
                        </a>
                    </li>
                    <!--/ End widget - overview -->

                    <!-- Start widget - social -->
                    <li>
                        <a href="widget-social.html">
                            <span class="icon"><i class="fa fa-group"></i></span>
                            <span class="text">Social</span>
                            <span class="label label-success pull-right rounded">28</span>
                        </a>
                    </li>
                    <!--/ End widget - social -->

                    <!-- Start widget - blog -->
                    <li>
                        <a href="widget-blog.html">
                            <span class="icon"><i class="fa fa-pencil"></i></span>
                            <span class="text">Blog</span>
                            <span class="label label-info pull-right rounded">15</span>
                        </a>
                    </li>
                    <!--/ End widget - blog -->

                    <!-- Start widget - weather -->
                    <li>
                        <a href="widget-weather.html">
                            <span class="icon"><i class="fa fa-sun-o"></i></span>
                            <span class="text">Weather</span>
                            <span class="label label-warning pull-right rounded">6</span>
                        </a>
                    </li>
                    <!--/ End widget - weather -->

                    <!-- Start widget - misc -->
                    <li class="sidebar-minimize-end">
                        <a href="widget-misc.html">
                            <span class="icon"><i class="fa fa-puzzle-piece"></i></span>
                            <span class="text">Misc</span>
                            <span class="label label-danger pull-right rounded">9</span>
                        </a>
                    </li>
                    <!--/ End widget - misc -->

                    <!-- Start category documentation -->
                    <li class="sidebar-category hidden-sidebar-minimize">
                        <span>BLANKON CORE</span>
                        <span class="pull-right"><i class="fa fa-coffee"></i></span>
                    </li>
                    <!--/ End category documentation -->

                    <!-- Start documentation - blankon versions -->
                    <li class="hidden-sidebar-minimize">
                        <a href="blankon-versions.html">
                            <span class="icon"><i class="fa fa-dropbox"></i></span>
                            <span class="text">Blankon Versions</span>
                        </a>
                    </li>
                    <!--/ End documentation - blankon versions -->

                    <!-- Start documentation - api documentation -->
                    <li class="hidden-sidebar-minimize">
                        <a href="../../../documentation/admin/live-preview-documentation.html" target="_blank">
                            <span class="icon"><i class="fa fa-book"></i></span>
                            <span class="text">API Documentation</span>
                        </a>
                    </li>
                    <!--/ End documentation - api documentation -->

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
            <!--/ END SIDEBAR LEFT -->

            <!-- START @PAGE CONTENT -->
            <section id="page-content">

                <!-- Start page header -->
                <div class="header-content">
                    <h2><i class="fa fa-home"></i>Dashboard <span>dashboard & statistics</span></h2>
                    <div class="breadcrumb-wrapper hidden-xs">
                        <span class="label">You are here:</span>
                        <ol class="breadcrumb">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div><!-- /.header-content -->
                <!--/ End page header -->

                <!-- Start body content -->
                <div class="body-content animated fadeIn">

                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="mini-stat clearfix bg-facebook rounded">
                                <span class="mini-stat-icon"><i class="fa fa-facebook fg-facebook"></i></span>
                                <div class="mini-stat-info">
                                    <span>5,762</span>
                                    Facebook Like
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="mini-stat clearfix bg-twitter rounded">
                                <span class="mini-stat-icon"><i class="fa fa-twitter fg-twitter"></i></span>
                                <div class="mini-stat-info">
                                    <span>7,153</span>
                                    Twitter Followers
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="mini-stat clearfix bg-googleplus rounded">
                                <span class="mini-stat-icon"><i class="fa fa-google-plus fg-googleplus"></i></span>
                                <div class="mini-stat-info">
                                    <span>793</span>
                                    Google+ Posts
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="mini-stat clearfix bg-bitbucket rounded">
                                <span class="mini-stat-icon"><i class="fa fa-bitbucket fg-bitbucket"></i></span>
                                <div class="mini-stat-info">
                                    <span>8,932</span>
                                    Repository
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-md-9">

                            <!-- Start widget visitor chart -->
                            <div class="panel stat-stack widget-visitor rounded shadow">
                                <div class="panel-body no-padding br-3">
                                    <div class="row row-merge">
                                        <div class="col-sm-8">
                                            <div class="panel panel-theme stat-left no-margin no-box-shadow">
                                                <div class="panel-heading no-border">
                                                    <div class="pull-left">
                                                        <h3 class="panel-title">Daily Visitor</h3>
                                                    </div><!-- /.pull-left -->
                                                    <div class="pull-right">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-sm btn-theme dropdown-toggle no-border" data-toggle="dropdown">
                                                                Duration <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-right no-border">
                                                                <li class="dropdown-header">Select duration :</li>
                                                                <li><a href="#">Year</a></li>
                                                                <li><a href="#">Month</a></li>
                                                                <li><a href="#">Week</a></li>
                                                                <li><a href="#">Day</a></li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- /.pull-right -->
                                                    <div class="clearfix"></div>
                                                </div><!-- /.panel-heading -->
                                                <div class="panel-body bg-theme">

                                                    <div id="visitor-chart" class="resize-chart"></div>

                                                </div><!-- /.panel-body -->
                                                <div class="panel-footer no-border-top">
                                                    <div class="row text-center">
                                                        <div class="col-xs-4 col-xs-override border-right dotted">
                                                            <p class="text-danger text-strong mb-0">- 5%</p>
                                                            <p class="h3 text-strong mb-0 mt-10 counter-visit" data-counter="7341">7,341</p>
                                                            <p class="text-muted">Visits Today</p>
                                                        </div>
                                                        <div class="col-xs-4 col-xs-override border-right dotted">
                                                            <p class="text-success text-strong mb-0">+ 32%</p>
                                                            <p class="h3 text-strong mb-0 mt-10 counter-unique" data-counter="23762">23,762</p>
                                                            <p class="text-muted">Unique Visitors</p>
                                                        </div>
                                                        <div class="col-xs-4 col-xs-override">
                                                            <p class="text-success text-strong mb-0">+ 76%</p>
                                                            <p class="h3 text-strong mb-0 mt-10 counter-page" data-counter="70112">70,112</p>
                                                            <p class="text-muted">Page Views</p>
                                                        </div>
                                                    </div>
                                                </div><!-- /.panel-footer -->
                                            </div><!-- /.panel -->
                                        </div><!-- /.col-sm-8 -->
                                        <div class="col-sm-4">
                                            <div class="panel stat-right no-margin no-box-shadow">
                                                <div class="panel-body">
                                                    <h4 class="no-margin">Server Status</h4>
                                                    <p class="text-muted">Summary of the server status.</p>

                                                    <span>Domains</span><span class="pull-right">(7/10)</span>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-lilac" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                                    </div><!-- /.progress -->

                                                    <span>Databases</span><span class="pull-right">(45/100)</span>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-teal" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                                                    </div><!-- /.progress -->

                                                    <span>Email Account</span><span class="pull-right">(30/50)</span>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                                    </div><!-- /.progress -->

                                                    <span>Memory Usage</span><span class="pull-right">(45.2%)</span>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                                                    </div><!-- /.progress -->

                                                    <span>Disk Usage</span><span class="pull-right">(68.2%)</span>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%"></div>
                                                    </div><!-- /.progress -->

                                                    <span>CPU Usage</span><span class="pull-right">(35.05 - 30 cpus)</span>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"></div>
                                                    </div><!-- /.progress -->
                                                </div><!-- /.panel-body -->
                                                <div class="panel-footer">
                                                    <div id="realtime-status-chart" class="resize-chart"></div>
                                                </div>
                                            </div><!-- /.panel -->
                                        </div><!-- /.col-sm-4 -->
                                    </div><!-- /.row -->
                                </div><!-- /.panel-body -->
                            </div><!-- /.panel -->
                            <!--/ End widget visitor chart -->

                        </div>
                        <div class="col-md-3">

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-4 col-xs-12">

                                    <!-- Start weather widget -->
                                    <div class="widget-wrapper bg-theme rounded">
                                        <div class="weather-current-city">
                                            <img src="../../../assets/global/img/building/5.jpg" alt="..."/>
                                            <div class="row">
                                                <div class="col-md-8 col-sm-8 col-xs-8">
                                                            <span class="current-city">
                                                                Yogyakarta, ID
                                                            </span>
                                                            <span class="current-temp">
                                                                27&deg;C
                                                            </span>
                                                </div><!-- /.col-md-7 -->
                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                            <span class="current-day-icon">
                                                              <canvas id="partly-cloudy-day" width="60" height="60"></canvas>
                                                            </span>
                                                </div><!-- /.col-md-5 -->
                                            </div><!-- /.row -->
                                            <span class="current-day"> Monday, 8 December </span>
                                        </div><!-- /.weather-current-city -->
                                        <div class="row">
                                            <ul class="days">
                                                <li class="col-md-4 col-sm-4 col-xs-4">
                                                    <strong>Tue</strong>
                                                    <canvas id="snow" width="45" height="45"></canvas>
                                                    <span>20°</span>
                                                </li>
                                                <li class="col-md-4 col-sm-4 col-xs-4"><strong>Fri</strong>
                                                    <canvas id="rain" width="45" height="45"></canvas>
                                                    <span>18°</span>
                                                </li>
                                                <li class="col-md-4 col-sm-4 col-xs-4"><strong>Sat</strong>
                                                    <canvas id="sleet" width="45" height="45"></canvas>
                                                    <span>24°</span>
                                                </li>
                                            </ul><!-- /.days -->
                                        </div><!-- /.row -->
                                    </div><!-- /.widget-wrapper -->
                                    <!--/ End weather widget -->

                                    <div class="divider"></div>

                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">

                                    <!-- Start blog post widget -->
                                    <div class="blog-item blog-quote rounded shadow">
                                        <div class="quote quote-lilac">
                                            <a href="#">
                                                Stay Hungry, Stay Foolish
                                                <small class="quote-author">- Steve Jobs -</small>
                                            </a>
                                        </div>
                                        <div class="blog-details">
                                            <ul class="blog-meta">
                                                <li>By: <a href="">Djava UI</a></li>
                                                <li>Jun 08, 2014</li>
                                                <li><a href="">2 Comments</a></li>
                                            </ul>
                                        </div><!-- blog-details -->
                                    </div><!-- blog-item -->
                                    <!--/ End blog post widget -->

                                </div>
                            </div>

                        </div>
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-md-9">

                            <!-- Start sample table -->
                            <div class="table-responsive rounded mb-20">
                                <table class="table table-striped table-theme">
                                    <thead>
                                    <tr>
                                        <th class="text-center border-right">No.</th>
                                        <th>Name</th>
                                        <th>Location</th>
                                        <th>Position</th>
                                        <th class="text-center">Rating</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center border-right">1</td>
                                        <td>
                                            <img src="../../../assets/global/img/avatar/35/2.png" class="img-circle img-bordered-theme" alt="John Kribo">
                                            <span>John Kribo</span>
                                        </td>
                                        <td>United State</td>
                                        <td>Senior Web Designer</td>
                                        <td class="text-center">
                                            <div class="rating">
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star active"></span>
                                                <span class="star"></span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-success btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="btn btn-primary btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center border-right">2</td>
                                        <td>
                                            <img src="../../../assets/global/img/avatar/35/3.png" class="img-circle img-bordered-theme" alt="Jennifer Poiyem">
                                            <span>Jennifer Poiyem</span>
                                        </td>
                                        <td>Spain</td>
                                        <td>Senior UX Designer</td>
                                        <td class="text-center">
                                            <div class="rating">
                                                <span class="star"></span>
                                                <span class="star active"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-success btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="btn btn-primary btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center border-right">3</td>
                                        <td>
                                            <img src="../../../assets/global/img/avatar/35/4.png" class="img-circle img-bordered-theme" alt="Clara Wati">
                                            <span>Clara Wati</span>
                                        </td>
                                        <td>United State</td>
                                        <td>Developer</td>
                                        <td class="text-center">
                                            <div class="rating">
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star active"></span>
                                                <span class="star"></span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-success btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="btn btn-primary btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center border-right">4</td>
                                        <td>
                                            <img src="../../../assets/global/img/avatar/35/5.png" class="img-circle img-bordered-theme" alt="Toni Mriang">
                                            <span>Toni Mriang</span>
                                        </td>
                                        <td>Germany</td>
                                        <td>Assistant</td>
                                        <td class="text-center">
                                            <div class="rating">
                                                <span class="star"></span>
                                                <span class="star active"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-success btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="btn btn-primary btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center border-right">5</td>
                                        <td>
                                            <img src="../../../assets/global/img/avatar/35/6.png" class="img-circle img-bordered-theme" alt="Bella negoro">
                                            <span>Bella negoro</span>
                                        </td>
                                        <td>England</td>
                                        <td>Developer</td>
                                        <td class="text-center">
                                            <div class="rating">
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star active"></span>
                                                <span class="star"></span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-success btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="btn btn-primary btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th class="text-center border-right">No.</th>
                                        <th>Name</th>
                                        <th>Location</th>
                                        <th>Position</th>
                                        <th class="text-center">Rating</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div><!-- /.table-responsive -->
                            <!--/ End sample table -->

                            <!-- Start dropzone js -->
                            <form action="../../../assets/admin/data" class="dropzone mb-20 rounded">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </form>
                            <!--/ End dropzone js -->

                        </div>
                        <div class="col-md-3">

                            <!-- Start mini stats social widget -->
                            <div class="row">
                                <div class="col-md-12  col-xs-4 col-xs-override">

                                    <div class="panel rounded shadow">
                                        <div class="panel-heading text-center bg-youtube">
                                            <p class="inner-all no-margin">
                                                <i class="fa fa-youtube fa-5x"></i>
                                            </p>
                                        </div><!-- /.panel-heading -->
                                        <div class="panel-body text-center">
                                            <p class="h4 no-margin inner-all text-strong">
                                                <span class="block">342</span>
                                                <span class="block">Videos</span>
                                            </p>
                                        </div><!-- /.panel-body -->
                                    </div><!-- /.panel -->

                                </div>
                                <div class="col-md-12 col-sm-4 col-xs-4 col-xs-override">

                                    <div class="panel rounded shadow">
                                        <div class="panel-heading text-center bg-dribbble">
                                            <p class="inner-all no-margin">
                                                <i class="fa fa-dribbble fa-5x"></i>
                                            </p>
                                        </div><!-- /.panel-heading -->
                                        <div class="panel-body text-center">
                                            <p class="h4 no-margin inner-all text-strong">
                                                <span class="block">2,341</span>
                                                <span class="block">Designs</span>
                                            </p>
                                        </div><!-- /.panel-body -->
                                    </div><!-- /.panel -->

                                </div>
                                <div class="col-md-12 col-sm-4 col-xs-4 col-xs-override">

                                    <div class="panel rounded shadow">
                                        <div class="panel-heading text-center bg-soundcloud">
                                            <p class="inner-all no-margin">
                                                <i class="fa fa-soundcloud fa-5x"></i>
                                            </p>
                                        </div><!-- /.panel-heading -->
                                        <div class="panel-body text-center">
                                            <p class="h4 no-margin inner-all text-strong">
                                                <span class="block">34,282</span>
                                                <span class="block">Musics</span>
                                            </p>
                                        </div><!-- /.panel-body -->
                                    </div><!-- /.panel -->

                                </div>
                            </div>

                            <!--/ End mini stats social widget -->

                        </div>
                    </div><!-- /.row -->

                </div><!-- /.body-content -->
                <!--/ End body content -->

                <!-- Start footer content -->
                <footer class="footer-content">
                    2014 &copy; Blankon Admin. Created by <a href="http://djavaui.com/" target="_blank">Djava UI</a>, Yogyakarta ID
                </footer><!-- /.footer-content -->
                <!--/ End footer content -->

            </section><!-- /#page-content -->
            <!--/ END PAGE CONTENT -->

            <!-- START @SIDEBAR RIGHT -->
            <aside id="sidebar-right">

                <div class="panel panel-tab">
                    <div class="panel-heading no-padding">
                        <div class="pull-right">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="#sidebar-profile" data-toggle="tab">
                                        <i class="fa fa-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#sidebar-layout" data-toggle="tab">
                                        <i class="fa fa-cogs"></i>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="#sidebar-setting" data-toggle="tab">
                                        <i class="fa fa-paint-brush"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#sidebar-chat" data-toggle="tab">
                                        <i class="fa fa-comments"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body no-padding">
                        <div class="tab-content">
                            <div class="tab-pane" id="sidebar-profile">
                                <div class="sidebar-profile">

                                    <!-- Start right navigation - menu -->
                                    <ul class="sidebar-menu niceScroll">

                                        <!-- Start category about me -->
                                        <li class="sidebar-category">
                                            <span>ABOUT ME</span>
                                            <span class="pull-right"><i class="fa fa-newspaper-o"></i></span>
                                        </li>
                                        <!--/ End category about me -->

                                        <!--/ Start navigation - about me -->
                                        <li>
                                            <ul class="list-unstyled">
                                                <li>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                                </li>
                                                <li>
                                                    <i class="fa fa-refresh"></i> Last update about 2 hours ago
                                                </li>
                                                <li>
                                                    <i class="fa fa-clock-o"></i> Total time spent 250 hrs
                                                </li>
                                                <li>
                                                    <i class="fa fa-envelope"></i> Tol.lee@djavaui.com
                                                </li>
                                                <li>
                                                    <i class="fa fa-mobile"></i> 1 405 777 1212
                                                </li>
                                            </ul>
                                        </li>
                                        <!--/ End navigation - about me -->

                                        <!-- Start category recent activity -->
                                        <li class="sidebar-category">
                                            <span>RECENT ACTIVITY</span>
                                            <span class="pull-right"><i class="fa fa-line-chart"></i></span>
                                        </li>
                                        <!--/ End category recent activity -->

                                        <!--/ Start navigation - activity -->
                                        <li>
                                            <div class="media-list activity">
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <i class="fa fa-flash"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Added a note to Ticket #947</span>
                                                        <span class="media-meta time">about 2 hours ago</span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <i class="fa fa-flash"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Added a product to Ticket #948</span>
                                                        <span class="media-meta time">about 3 hours ago</span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <i class="fa fa-flash"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Added a service to Ticket #949</span>
                                                        <span class="media-meta time">about 15 hours ago</span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                            </div><!-- /.media-list -->
                                        </li>
                                        <!--/ End navigation - activity -->

                                        <!-- Start category current working -->
                                        <li class="sidebar-category">
                                            <span>CURRENTLY WORKING</span>
                                            <span class="pull-right"><i class="fa fa-group"></i></span>
                                        </li>
                                        <!--/ End category current working -->

                                        <!-- Start left navigation - current working -->
                                        <li>
                                            <div class="media-list working">
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="../../../assets/global/img/avatar/35/10.png" class="img-circle" alt="Daddy Botak">
                                                        <i class="online"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Daddy Botak</span>
                                                        <span class="media-meta status">online</span>
                                                        <span class="media-meta device"><i class="fa fa-globe"></i></span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="../../../assets/global/img/avatar/35/11.png" class="img-circle" alt="Sarah Tingting">
                                                        <i class="offline"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Sarah Tingting</span>
                                                        <span class="media-meta status">offline</span>
                                                        <span class="media-meta device"><i class="fa fa-globe"></i></span>
                                                        <span class="media-meta time">7 m</span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="../../../assets/global/img/avatar/35/26.png" class="img-circle" alt="">
                                                        <i class="busy"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Nicolas Olivier</span>
                                                        <span class="media-meta status">busy</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="../../../assets/global/img/avatar/35/13.png" class="img-circle" alt="Claudia Cinta">
                                                        <i class="online"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Claudia Cinta</span>
                                                        <span class="media-meta status">online</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="../../../assets/global/img/avatar/35/26.png" class="img-circle" alt="">
                                                        <i class="busy"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Catherine Parker</span>
                                                        <span class="media-meta status">busy</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                            </div><!-- /.media-list -->
                                        </li>
                                        <!--/ End left navigation - current working -->

                                    </ul>
                                    <!-- Start right navigation - menu -->
                                </div>
                            </div><!-- /#sidebar-profile -->
                            <div class="tab-pane" id="sidebar-layout">
                                <div class="sidebar-layout">

                                    <!-- Start right navigation - menu -->
                                    <ul class="sidebar-menu niceScroll">

                                        <!-- Start category layout -->
                                        <li class="sidebar-category">
                                            <span>LAYOUT</span>
                                            <span class="pull-right"><i class="fa fa-toggle-on"></i></span>
                                        </li>
                                        <!--/ End category layout -->

                                        <!--/ Start navigation - layout -->
                                        <li>
                                            <ul class="list-unstyled layout-setting">
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="layout-fluid" type="radio" name="layout" value="">
                                                        <label for="layout-fluid">Fluid</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="layout-boxed" type="radio" name="layout" value="page-boxed">
                                                        <label for="layout-boxed">Boxed</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--/ End navigation - layout -->

                                        <!-- Start category header -->
                                        <li class="sidebar-category">
                                            <span>HEADER</span>
                                            <span class="pull-right"><i class="fa fa-toggle-on"></i></span>
                                        </li>
                                        <!--/ End category header -->

                                        <!--/ Start navigation - header -->
                                        <li>
                                            <ul class="list-unstyled header-layout-setting">
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="header-default" type="radio" name="header" value="">
                                                        <label for="header-default">Default</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="header-fixed" type="radio" name="header" value="page-header-fixed">
                                                        <label for="header-fixed">Fixed</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--/ End navigation - header -->

                                        <!-- Start category sidebar -->
                                        <li class="sidebar-category">
                                            <span>SIDEBAR</span>
                                            <span class="pull-right"><i class="fa fa-toggle-on"></i></span>
                                        </li>
                                        <!--/ End category sidebar -->

                                        <!--/ Start navigation - sidebar -->
                                        <li>
                                            <ul class="list-unstyled sidebar-layout-setting">
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="sidebar-default" type="radio" name="sidebar" value="">
                                                        <label for="sidebar-default">Default</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="sidebar-fixed" type="radio" name="sidebar" value="page-sidebar-fixed">
                                                        <label for="sidebar-fixed">Fixed</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--/ End navigation - sidebar -->

                                        <!-- Start category sidebar type -->
                                        <li class="sidebar-category">
                                            <span>SIDEBAR TYPE</span>
                                            <span class="pull-right"><i class="fa fa-toggle-on"></i></span>
                                        </li>
                                        <!--/ End category sidebar type -->

                                        <!--/ Start navigation - sidebar -->
                                        <li>
                                            <ul class="list-unstyled sidebar-type-setting">
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="sidebar-type-default" type="radio" name="sidebarType" value="">
                                                        <label for="sidebar-type-default">Default</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="sidebar-type-box" type="radio" name="sidebarType" value="sidebar-box">
                                                        <label for="sidebar-type-box">Box</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="sidebar-type-rounded" type="radio" name="sidebarType" value="sidebar-rounded">
                                                        <label for="sidebar-type-rounded">Rounded</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="sidebar-type-circle" type="radio" name="sidebarType" value="sidebar-circle">
                                                        <label for="sidebar-type-circle">Circle</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--/ End navigation - sidebar -->

                                        <!-- Start category footer -->
                                        <li class="sidebar-category">
                                            <span>FOOTER</span>
                                            <span class="pull-right"><i class="fa fa-toggle-on"></i></span>
                                        </li>
                                        <!--/ End category footer -->

                                        <!--/ Start navigation - footer -->
                                        <li>
                                            <ul class="list-unstyled footer-layout-setting">
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="footer-default" type="radio" name="footer" value="">
                                                        <label for="footer-default">Default</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="footer-fixed" type="radio" name="footer" value="page-footer-fixed">
                                                        <label for="footer-fixed">Fixed</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--/ End navigation - footer -->

                                        <!--/ Start navigation - reset settings -->
                                        <li>
                                            <a id="reset-setting" href="javascript:void(0);" class="btn btn-inverse btn-block"><i class="fa fa-refresh fa-spin"></i> RESET SETTINGS</a>
                                        </li>
                                        <!--/ End navigation - reset settings -->

                                    </ul>
                                    <!-- Start right navigation - menu -->
                                </div>
                            </div><!-- /#sidebar-layout -->
                            <div class="tab-pane in active" id="sidebar-setting">
                                <div class="sidebar-setting">
                                    <!-- Start right navigation - menu -->
                                    <ul class="sidebar-menu">

                                        <!-- Start category color schemes -->
                                        <li class="sidebar-category">
                                            <span>COLOR SCHEMES</span>
                                            <span class="pull-right"><i class="fa fa-tint"></i></span>
                                        </li>
                                        <!--/ End category color schemes -->

                                        <!-- Start navigation - themes -->
                                        <li>
                                            <div class="sidebar-themes color-schemes">

                                                <a class="theme" href="javascript:void(0);" style="background-color: #81b71a" data-toggle="tooltip" data-placement="right" data-original-title="Default"><span class="hide">default</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #00B1E1" data-toggle="tooltip" data-placement="top" data-original-title="Blue"><span class="hide">blue</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #37BC9B" data-toggle="tooltip" data-placement="top" data-original-title="Cyan"><span class="hide">cyan</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #8CC152" data-toggle="tooltip" data-placement="top" data-original-title="Green"><span class="hide">green</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #E9573F" data-toggle="tooltip" data-placement="top" data-original-title="Red"><span class="hide">red</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #F6BB42" data-toggle="tooltip" data-placement="top" data-original-title="Yellow"><span class="hide">yellow</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #906094" data-toggle="tooltip" data-placement="top" data-original-title="Purple"><span class="hide">purple</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #D39174" data-toggle="tooltip" data-placement="top" data-original-title="Brown"><span class="hide">brown</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #9FB478" data-toggle="tooltip" data-placement="left" data-original-title="Green Army"><span class="hide">green-army</span></a>

                                                <a class="theme" href="javascript:void(0);" style="background-color: #63D3E9" data-toggle="tooltip" data-placement="right" data-original-title="Blue Sea"><span class="hide">blue-sea</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #5577B4" data-toggle="tooltip" data-placement="top" data-original-title="Blue Gray"><span class="hide">blue-gray</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #AF86B9" data-toggle="tooltip" data-placement="top" data-original-title="Purple Gray"><span class="hide">purple-gray</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #CC6788" data-toggle="tooltip" data-placement="top" data-original-title="Purple Wine"><span class="hide">purple-wine</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #F06F6F" data-toggle="tooltip" data-placement="top" data-original-title="Alizarin Crimson"><span class="hide">alizarin-crimson</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #979797" data-toggle="tooltip" data-placement="top" data-original-title="Black And White"><span class="hide">black-and-white</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #8BC4B9" data-toggle="tooltip" data-placement="top" data-original-title="Amazon"><span class="hide">amazon</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #B0B069" data-toggle="tooltip" data-placement="top" data-original-title="Amber"><span class="hide">amber</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #A9C784" data-toggle="tooltip" data-placement="left" data-original-title="Android green"><span class="hide">android-green</span></a>

                                                <a class="theme" href="javascript:void(0);" style="background-color: #B3998A" data-toggle="tooltip" data-placement="right" data-original-title="Antique brass"><span class="hide">antique-brass</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #8D8D6E" data-toggle="tooltip" data-placement="top" data-original-title="Antique Bronze"><span class="hide">antique-bronze</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #B0B69D" data-toggle="tooltip" data-placement="top" data-original-title="Artichoke"><span class="hide">artichoke</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #F19B69" data-toggle="tooltip" data-placement="top" data-original-title="Atomic Tangerine"><span class="hide">atomic-tangerine</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #98777B" data-toggle="tooltip" data-placement="top" data-original-title="Bazaar"><span class="hide">bazaar</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #C3A961" data-toggle="tooltip" data-placement="top" data-original-title="Bistre Brown"><span class="hide">bistre-brown</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #D6725E" data-toggle="tooltip" data-placement="top" data-original-title="Bittersweet"><span class="hide">bittersweet</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #7789D1" data-toggle="tooltip" data-placement="top" data-original-title="Blueberry"><span class="hide">blueberry</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #6FA362" data-toggle="tooltip" data-placement="left" data-original-title="Bud Green"><span class="hide">bud-green</span></a>

                                            </div>
                                        </li>
                                        <!--/ End navigation - themes -->

                                        <!-- Start category navbar color -->
                                        <li class="sidebar-category">
                                            <span>NAVBAR COLOR</span>
                                            <span class="pull-right"><i class="fa fa-tint"></i></span>
                                        </li>
                                        <!--/ End category navbar color -->

                                        <!-- Start navigation - navbar color -->
                                        <li>
                                            <div class="sidebar-themes navbar-color">

                                                <a class="theme bg-dark" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Dark"><span class="hide">dark</span></a>
                                                <a class="theme bg-light" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Light"><span class="hide">light</span></a>
                                                <a class="theme bg-primary" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Primary"><span class="hide">primary</span></a>
                                                <a class="theme bg-success" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Success"><span class="hide">success</span></a>
                                                <a class="theme bg-info" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Info"><span class="hide">info</span></a>
                                                <a class="theme bg-warning" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Warning"><span class="hide">warning</span></a>
                                                <a class="theme bg-danger" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Danger"><span class="hide">danger</span></a>

                                            </div><!-- /.navbar-color -->
                                        </li>
                                        <!--/ End navigation - navbar color -->

                                        <!-- Start category sidebar color -->
                                        <li class="sidebar-category">
                                            <span>SIDEBAR COLOR</span>
                                            <span class="pull-right"><i class="fa fa-tint"></i></span>
                                        </li>
                                        <!--/ End category sidebar color -->

                                        <!-- Start navigation - sidebar color -->
                                        <li>
                                            <div class="sidebar-themes sidebar-color">

                                                <a class="theme bg-dark" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Dark"><span class="hide">dark</span></a>
                                                <a class="theme bg-light" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Light"><span class="hide">light</span></a>
                                                <a class="theme bg-primary" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Primary"><span class="hide">primary</span></a>
                                                <a class="theme bg-success" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Success"><span class="hide">success</span></a>
                                                <a class="theme bg-info" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Info"><span class="hide">info</span></a>
                                                <a class="theme bg-warning" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Warning"><span class="hide">warning</span></a>
                                                <a class="theme bg-danger" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Danger"><span class="hide">danger</span></a>

                                            </div><!-- /.sidebar-color -->
                                        </li>
                                        <!--/ End navigation - sidebar color -->

                                        <!-- Start category task progress -->
                                        <li class="sidebar-category">
                                            <span>TASK PROGRESS</span>
                                            <span class="pull-right"><i class="fa fa-sliders"></i></span>
                                        </li>
                                        <!--/ End category task progress -->

                                        <!--/ Start navigation - task progress -->
                                        <li>
                                            <ul class="list-group sidebar-task">
                                                <li class="list-group-item">
                                                    <p class="details"> <span> Core System </span> <span class="pull-right"> 82% </span> </p>
                                                    <div class="progress progress-xs progress-striped active no-margin">
                                                        <div style="width: 82%" class="progress-bar progress-bar-success"> </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <p class="details"> <span> Front-End </span> <span class="pull-right"> 67% </span> </p>
                                                    <div class="progress progress-xs progress-striped active no-margin">
                                                        <div style="width: 47%" class="progress-bar progress-bar-danger"> </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <p class="details"> <span> Back-End </span> <span class="pull-right"> 45% </span> </p>
                                                    <div class="progress progress-xs progress-striped active no-margin">
                                                        <div style="width: 47%" class="progress-bar progress-bar-info"> </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--/ End navigation - task progress -->

                                        <!-- Start category summary system -->
                                        <li class="sidebar-category">
                                            <span>SUMMARY SYSTEM</span>
                                            <span class="pull-right"><i class="fa fa-bar-chart-o"></i></span>
                                        </li>
                                        <!--/ End category summary system -->

                                        <!-- Start left navigation - summary -->
                                        <li>
                                            <ul class="sidebar-summary sparklines">
                                                <li>
                                                    <div class="list-info">
                                                        <span>Average Users</span>
                                                        <h4>1, 412, 101</h4>
                                                    </div>
                                                    <div class="chart"><span class="average">4,2,3,2,4,2,5,1,2,2,5,3</span></div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="list-info">
                                                        <span>Daily Traffic</span>
                                                        <h4>781, 601</h4>
                                                    </div>
                                                    <div class="chart"><span class="traffic">1,2,3,2,4,1,5,3,2,4,2,3</span></div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="list-info">
                                                        <span>Disk Usage</span>
                                                        <h4>52.2%</h4>
                                                    </div>
                                                    <div class="chart"><span class="disk">5,5,3,2,1,3,4,3,2,4,1,3</span></div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="list-info">
                                                        <span>CPU Usage</span>
                                                        <h4>67.8%</h4>
                                                    </div>
                                                    <div class="chart"><span class="cpu">1,5,3,2,4,5,5,3,2,4,5,3</span></div>
                                                    <div class="clearfix"></div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--/ End left navigation - summary -->

                                    </ul>
                                    <!-- Start right navigation - menu -->
                                </div>
                            </div><!-- /#sidebar-setting -->
                            <div class="tab-pane" id="sidebar-chat">
                                <div class="sidebar-chat">

                                    <form class="form-horizontal">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" type="text" placeholder="Search messages...">
                                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                        </div>
                                    </form>

                                    <!-- Start right navigation - menu -->
                                    <ul class="sidebar-menu niceScroll">

                                        <!-- Start category family chat -->
                                        <li class="sidebar-category">
                                            <span>FAMILY</span>
                                            <span class="pull-right"><i class="fa fa-home"></i></span>
                                        </li>
                                        <!--/ End category family chat -->

                                        <li>
                                            <!-- Start chat - contact list -->
                                            <div class="media-list">
                                                <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="../../../assets/global/img/avatar/35/10.png" class="img-circle" alt="Daddy Botak">
                                                        <i class="online"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Daddy Botak</span>
                                                        <span class="media-meta status">online</span>
                                                        <span class="media-meta device"><i class="fa fa-globe"></i></span>
                                                    </span>
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="../../../assets/global/img/avatar/35/11.png" class="img-circle" alt="Sarah Tingting">
                                                        <i class="offline"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Sarah Tingting</span>
                                                        <span class="media-meta status">offline</span>
                                                        <span class="media-meta device"><i class="fa fa-globe"></i></span>
                                                        <span class="media-meta time">7 m</span>
                                                    </span>
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="../../../assets/global/img/avatar/35/26.png" class="img-circle" alt="...">
                                                        <i class="busy"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Nicolas Olivier</span>
                                                        <span class="media-meta status">busy</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </span>
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="../../../assets/global/img/avatar/35/12.png" class="img-circle" alt="Harry Potret">
                                                        <i class="online"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Harry Potret</span>
                                                        <span class="media-meta status">online</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </span>
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="../../../assets/global/img/avatar/35/26.png" class="img-circle" alt="...">
                                                        <i class="busy"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Catherine Parker</span>
                                                        <span class="media-meta status">busy</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </span>
                                                </a><!-- /.media -->
                                            </div><!-- /.media-list -->
                                            <!--/ End chat - contact list -->
                                        </li>

                                        <!-- Start category friends chat -->
                                        <li class="sidebar-category">
                                            <span>FRIENDS</span>
                                            <span class="pull-right"><i class="fa fa-group"></i></span>
                                        </li>
                                        <!--/ End category friends chat -->

                                        <li>
                                            <!-- Start chat - contact list -->
                                            <div class="media-list">
                                                <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="../../../assets/global/img/avatar/35/15.png" class="img-circle" alt="Jeck Joko">
                                                        <i class="online"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Jeck Joko</span>
                                                        <span class="media-meta status">online</span>
                                                        <span class="media-meta device"><i class="fa fa-globe"></i></span>
                                                    </span>
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="../../../assets/global/img/avatar/35/16.png" class="img-circle" alt="Tenny Imoet">
                                                        <i class="busy"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Tenny Imoet</span>
                                                        <span class="media-meta status">busy</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </span>
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="../../../assets/global/img/avatar/35/17.png" class="img-circle" alt="Leli Madang">
                                                        <i class="offline"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Leli Madang</span>
                                                        <span class="media-meta status">offline</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                        <span class="media-meta time">2 m</span>
                                                    </span>
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="../../../assets/global/img/avatar/35/18.png" class="img-circle" alt="Rebecca Cabean">
                                                        <i class="offline"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Rebecca Cabean</span>
                                                        <span class="media-meta status">offline</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                        <span class="media-meta time">8 m</span>
                                                    </span>
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="../../../assets/global/img/avatar/35/26.png" class="img-circle" alt="...">
                                                        <i class="busy"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">ondoel return</span>
                                                        <span class="media-meta status">busy</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </span>
                                                </a><!-- /.media -->
                                            </div><!-- /.media-list -->
                                            <!--/ End chat - contact list -->
                                        </li>

                                        <!-- Start category other chat -->
                                        <li class="sidebar-category">
                                            <span>OTHERS</span>
                                            <span class="pull-right"><i class="fa fa-share"></i></span>
                                        </li>
                                        <!--/ End category other chat -->

                                        <li>
                                            <!-- Start chat - contact list -->
                                            <div class="media-list">
                                                <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="../../../assets/global/img/avatar/35/19.png" class="img-circle" alt="Sishy Mawar">
                                                        <i class="offline"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Sishy Mawar</span>
                                                        <span class="media-meta status">offline</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                        <span class="media-meta time">23 m</span>
                                                    </span>
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="../../../assets/global/img/avatar/35/20.png" class="img-circle" alt="Mbah Roso">
                                                        <i class="away"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Mbah Roso</span>
                                                        <span class="media-meta status">away</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                        <span class="media-meta time">2 h</span>
                                                    </span>
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <span class="media-object pull-left has-notif">
                                                        <img src="../../../assets/global/img/avatar/35/26.png" class="img-circle" alt="...">
                                                        <i class="busy"></i>
                                                    </span>
                                                    <span class="media-body">
                                                        <span class="media-heading">Alma Butoi</span>
                                                        <span class="media-meta status">busy</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </span>
                                                </a><!-- /.media -->
                                            </div><!-- /.media-list -->
                                            <!--/ End chat - contact list -->
                                        </li>

                                    </ul><!-- /.sidebar-menu -->
                                    <!-- Start right navigation - menu -->

                                </div><!-- /.sidebar-setting -->
                            </div><!-- /#sidebar-chat -->
                        </div>
                    </div>
                </div>

            </aside><!-- /#sidebar-right -->
            <!--/ END SIDEBAR RIGHT -->

        </section><!-- /#wrapper -->
        <!--/ END WRAPPER -->

        <!-- START @BACK TOP -->
        <div id="back-top" class="animated pulse circle">
            <i class="fa fa-angle-up"></i>
        </div><!-- /#back-top -->
        <!--/ END BACK TOP -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- START @CORE PLUGINS -->
        <script src="../../../assets/global/plugins/jquery/jquery.min.js"></script>
        <script src="../../../assets/global/plugins/jquery-cookie/jquery.cookie.js"></script>
        <script src="../../../assets/global/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../../assets/global/plugins/typeahead/handlebars.js"></script>
        <script src="../../../assets/global/plugins/typeahead/typeahead.bundle.min.js"></script>
        <script src="../../../assets/global/plugins/jquery-niceScroll/jquery.nicescroll.min.js"></script>
        <script src="../../../assets/global/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="../../../assets/global/plugins/jpreloader-v2/js/jpreloader.min.js"></script>
        <script src="../../../assets/global/plugins/jquery-easing/jquery.easing.1.3.js"></script>
        <script src="../../../assets/global/plugins/ion-sound/js/ion.sound.min.js"></script>
        <script src="../../../assets/global/plugins/bootbox/bootbox.js"></script>
        <!--/ END CORE PLUGINS -->

        <!-- START @PAGE LEVEL PLUGINS -->
        <script src="../../../assets/global/plugins/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js"></script>
        <script src="../../../assets/global/plugins/flot/jquery.flot.min.js"></script>
        <script src="../../../assets/global/plugins/flot/jquery.flot.spline.min.js"></script>
        <script src="../../../assets/global/plugins/flot/jquery.flot.categories.min.js"></script>
        <script src="../../../assets/global/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="../../../assets/global/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="../../../assets/global/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="../../../assets/global/plugins/dropzone/dropzone.min.js"></script>
        <script src="../../../assets/global/plugins/gritter/js/jquery.gritter.min.js"></script>
        <script src="../../../assets/global/plugins/skycons/skycons.js"></script>
        <script>
            var icons = new Skycons({"color": "white"},{"resizeClear": true}),
                    list  = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;

            for(i = list.length; i--; )
                icons.set(list[i], list[i]);

            icons.play();
        </script>
        <!--/ END PAGE LEVEL PLUGINS -->

        <!-- START @PAGE LEVEL SCRIPTS -->
        <script src="../../../assets/admin/js/apps.js"></script>
        <script src="../../../assets/admin/js/pages/blankon.dashboard.js"></script>
        <script src="../../../assets/admin/js/demo.js"></script>
        <!--/ END PAGE LEVEL SCRIPTS -->
        <!--/ END JAVASCRIPT SECTION -->

        <!-- START GOOGLE ANALYTICS -->
        <script>
            _gaq.push(['_setDomainName', 'djavaui.com']);
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-55892530-1', 'auto');
            ga('send', 'pageview');

        </script>
        <!--/ END GOOGLE ANALYTICS -->
    </body>
    <!--/ END BODY -->

</html>