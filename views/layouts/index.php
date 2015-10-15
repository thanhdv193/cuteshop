<?php

use yii\helpers;
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from avalon.redteamux.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Oct 2014 07:38:22 GMT -->
    <head>
        <meta charset="utf-8">
        <title>Avalon Admin Theme</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="description" content="Avalon Admin Theme">
        <meta name="author" content="The Red Team">

        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,700' rel='stylesheet' type='text/css'>

        <!--[if lt IE 10]>
            <script src="assets/js/media.match.min.js"></script>
            <script src="assets/js/placeholder.min.js"></script>
        <![endif]-->

        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
        <link href="assets/css/styles.css" type="text/css" rel="stylesheet">

        <link href="assets/plugins/jstree/dist/themes/avalon/style.min.css" type="text/css" rel="stylesheet">
        <link href="assets/plugins/codeprettifier/prettify.css" type="text/css" rel="stylesheet">
        <link href="assets/plugins/iCheck/skins/minimal/blue.css" type="text/css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
        <!--[if lt IE 9]>
            <link href="assets/css/ie8.css" type="text/css" rel="stylesheet">
            <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
            <script type="text/javascript" src="assets/plugins/charts-flot/excanvas.min.js"></script>
            <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- The following CSS are included as plugins and can be removed if unused-->

        <link href="assets/plugins/form-daterangepicker/daterangepicker-bs3.css" type="text/css" rel="stylesheet">    	<!-- DateRangePicker -->
        <link href="assets/plugins/switchery/switchery.css" type="text/css" rel="stylesheet">        					<!-- Switchery -->
        <link href="assets/plugins/fullcalendar/fullcalendar.css" type="text/css" rel="stylesheet"> 						<!-- FullCalendar -->


    </head>

    <body class="infobar-offcanvas">
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-44426473-3', 'auto');
            ga('send', 'pageview');
        </script>

        <div id="headerbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-6 col-sm-2">
                        <a href="#" class="shortcut-tiles tiles-brown">
                            <div class="tiles-body">
                                <div class="pull-left"><i class="fa fa-pencil"></i></div>
                            </div>
                            <div class="tiles-footer">
                                Create Post
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <a href="#" class="shortcut-tiles tiles-grape">
                            <div class="tiles-body">
                                <div class="pull-left"><i class="fa fa-group"></i></div>
                                <div class="pull-right"><span class="badge">2</span></div>
                            </div>
                            <div class="tiles-footer">
                                Contacts
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <a href="#" class="shortcut-tiles tiles-primary">
                            <div class="tiles-body">
                                <div class="pull-left"><i class="fa fa-envelope-o"></i></div>
                                <div class="pull-right"><span class="badge">10</span></div>
                            </div>
                            <div class="tiles-footer">
                                Messages
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <a href="#" class="shortcut-tiles tiles-inverse">
                            <div class="tiles-body">
                                <div class="pull-left"><i class="fa fa-camera"></i></div>
                                <div class="pull-right"><span class="badge">3</span></div>
                            </div>
                            <div class="tiles-footer">
                                Gallery
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-2">
                        <a href="#" class="shortcut-tiles tiles-midnightblue">
                            <div class="tiles-body">
                                <div class="pull-left"><i class="fa fa-cog"></i></div>
                            </div>
                            <div class="tiles-footer">
                                Settings
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <a href="#" class="shortcut-tiles tiles-orange">
                            <div class="tiles-body">
                                <div class="pull-left"><i class="fa fa-wrench"></i></div>
                            </div>
                            <div class="tiles-footer">
                                Plugins
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <header id="topnav" class="navbar navbar-inverse navbar-fixed-top clearfix" role="banner">


            <a id="leftmenu-trigger" class="" data-toggle="tooltip" data-placement="right" title="Toggle Sidebar"></a>
            <a class="navbar-brand" href="index-2.html">Avalon</a>
            <a id="rightmenu-trigger" class="" data-toggle="tooltip" data-placement="left" title="Toggle Infobar"></a>


            <div class="yamm navbar-left navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-random mr5"></i>Mega Menu<span class="caret"></span></a>
                        <ul class="dropdown-menu" style="width: 900px;">
                            <li>
                                <div class="yamm-content container-sm-height">
                                    <div class="row row-sm-height yamm-col-bordered">
                                        <div class="col-sm-3 col-sm-height yamm-col">

                                            <h3 class="yamm-category">Sidebar</h3>
                                            <ul class="list-unstyled mb20">
                                                <li><a href="layout-fixed-sidebars.html">Stretch Sidebars</a></li>
                                                <li><a href="layout-sidebar-scroll.html">Scroll Sidebar</a></li>
                                                <li><a href="layout-static-leftbar.html">Static Sidebar</a></li>
                                                <li><a href="layout-leftbar-widgets.html">Sidebar Widgets</a></li>   
                                            </ul>

                                            <h3 class="yamm-category">Infobar</h3>
                                            <ul class="list-unstyled">
                                                <li><a href="layout-infobar-offcanvas.html">Offcanvas Infobar</a></li>
                                                <li><a href="layout-infobar-overlay.html">Overlay Infobar</a></li>
                                                <li><a href="layout-chatbar-overlay.html">Chatbar</a></li>
                                                <li><a href="layout-rightbar-widgets.html">Infobar Widgets</a></li>   
                                            </ul>

                                        </div>
                                        <div class="col-sm-3 col-sm-height yamm-col">

                                            <h3 class="yamm-category">Page Content</h3>
                                            <ul class="list-unstyled mb20">
                                                <li><a href="layout-breadcrumb-top.html">Breadcrumbs on Top</a></li>
                                                <li><a href="layout-page-tabs.html">Page Tabs</a></li>
                                                <li><a href="layout-fullheight-panel.html">Full-Height Panel</a></li>
                                                <li><a href="layout-fullheight-content.html">Full-Height Content</a></li>
                                            </ul>

                                            <h3 class="yamm-category">Misc</h3>
                                            <ul class="list-unstyled">
                                                <li><a href="layout-topnav-options.html">Topnav Options</a></li>
                                                <li><a href="layout-horizontal-small.html">Horizontal Small</a></li>
                                                <li><a href="layout-horizontal-large.html">Horizontal Large</a></li>
                                                <li><a href="layout-boxed.html">Boxed</a></li>
                                            </ul>

                                        </div>
                                        <div class="col-sm-3 col-sm-height yamm-col">

                                            <h3 class="yamm-category">Analytics</h3>
                                            <ul class="list-unstyled mb20">
                                                <li><a href="charts-flot.html">Flot</a></li>
                                                <li><a href="charts-sparklines.html">Sparklines</a></li>
                                                <li><a href="charts-morris.html">Morris</a></li>
                                                <li><a href="charts-easypiechart.html">Easy Pie Charts</a></li>
                                            </ul>

                                            <h3 class="yamm-category">Components</h3>
                                            <ul class="list-unstyled">
                                                <li><a href="ui-tiles.html">Tiles</a></li>
                                                <li><a href="custom-knob.html">jQuery Knob</a></li>
                                                <li><a href="custom-jqueryui.html">jQuery Slider</a></li>
                                                <li><a href="custom-ionrange.html">Ion Range Slider</a></li>
                                            </ul>

                                        </div>
                                        <div class="col-sm-3 col-sm-height yamm-col">
                                            <h3 class="yamm-category">Rem</h3>
                                            <img src="assets/demo/stockphoto/communication_12_carousel.jpg" class="mb20 img-responsive" style="width: 100%;">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown" id="widget-classicmenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                    <li><a href="frontend/index.html" target="_blank">Frontend</a></li>
                    <li><a href="landing/index.html" target="_blank">Landing Page</a></li>
                </ul>
            </div>

            <ul class="nav navbar-nav toolbar pull-right">
                <li class="dropdown">
                    <a href="#" id="navbar-links-toggle" data-toggle="collapse" data-target="header>.navbar-collapse">&nbsp;</a>
                </li>

                <li class="toolbar-icon-bg demo-headerdrop-hidden">
                    <a href="#" id="headerbardropdown"><span class="icon-bg"><i class="fa fa-fw fa-level-down"></i></span></i></a>
                </li>


                <li class="dropdown toolbar-icon-bg hidden-xs">
                    <a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="fa fa-fw fa-tasks"></i></span><span class="badge badge-warning">7</span></a>
                    <div class="dropdown-menu taskprogresses arrow">
                        <div class="dd-header">
                            <span>Tasks</span>
                            <span><a href="#">Settings</a></span>
                        </div>
                        <ul class="scrollthis">
                            <li>
                                <a href="#">
                                    <div class="contextual-progress">
                                        <div class="clearfix">
                                            <div class="progress-title">Template Styling</div>
                                            <div class="progress-percentage">5/25</div>
                                        </div>
                                        <div class="progress progress-lg">
                                            <div class="progress-bar progress-bar-inverse" style="width: 20%"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="contextual-progress">
                                        <div class="clearfix">
                                            <div class="progress-title">App Development</div>
                                            <div class="progress-percentage">3/9</div>
                                        </div>
                                        <div class="progress progress-lg progress-striped active">
                                            <div class="progress-bar progress-bar-success" style="width: 33%"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="contextual-progress">
                                        <div class="clearfix">
                                            <div class="progress-title">App Interface</div>
                                            <div class="progress-percentage">15%</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" style="width: 15%"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="contextual-progress">
                                        <div class="clearfix">
                                            <div class="progress-title">Documentation</div>
                                            <div class="progress-percentage">4/5</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" style="width: 80%"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="contextual-progress">
                                        <div class="clearfix">
                                            <div class="progress-title">eCommerce</div>
                                            <div class="progress-percentage">6/10</div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>


                        </ul>
                        <div class="dd-footer">
                            <a href="#">View all tasks</a>
                        </div>
                    </div>
                </li>


                <li class="dropdown toolbar-icon-bg">
                    <a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="fa fa-fw fa-bell"></i></span><span class="badge badge-alizarin">5</span></a>
                    <div class="dropdown-menu notifications arrow">
                        <div class="dd-header">
                            <span>Notifications</span>
                            <span><a href="#">Settings</a></span>
                        </div>
                        <ul class="scrollthis">
                            <li class="">
                                <a href="#" class="notification-success">
                                    <div class="notification-icon"><i class="fa fa-check fa-fw"></i></div>
                                    <div class="notification-content"><strong>Lorem ipsum</strong> dolor sit amet consectetur adipisicing elit!</div>
                                    <div class="notification-time">40m</div>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="notification-danger">
                                    <div class="notification-icon"><i class="fa fa-times fa-fw"></i></div>
                                    <div class="notification-content">Etiam porta sem malesuada</div>
                                    <div class="notification-time">5h</div>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="notification-inverse">
                                    <div class="notification-icon"><i class="fa fa-cloud fa-fw"></i></div>
                                    <div class="notification-content"><strong>Nesciunt</strong> reprehenderit provident distinctio eveniet cupiditate atque</div>
                                    <div class="notification-time">16h</div>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="notification-warning">
                                    <div class="notification-icon"><i class="fa fa-warning fa-fw"></i></div>
                                    <div class="notification-content">Aperiam accusamus modi ipsum officia quas nisi!</div>
                                    <div class="notification-time">1d</div>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="notification-info">
                                    <div class="notification-icon"><i class="fa fa-shopping-cart fa-fw"></i></div>
                                    <div class="notification-content">Libero distinctio eveniet</div>
                                    <div class="notification-time">5d</div>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="notification-primary">
                                    <div class="notification-icon"><i class="fa fa-comment fa-fw"></i></div>
                                    <div class="notification-content">Officiis modi ipsum officia ad dolor sit amet consectetur sit voluptatem accusantium doloremque laudantium totam rem aperiam</div>
                                    <div class="notification-time">8d</div>
                                </a>
                            </li>
                        </ul>
                        <div class="dd-footer">
                            <a href="#">View all notifications</a>
                        </div>
                    </div>
                </li>

                <li class="dropdown toolbar-icon-bg hidden-xs">
                    <a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="fa fa-fw fa-envelope"></i></span><span class="badge badge-info">1</span></a>
                    <div class="dropdown-menu messages arrow">
                        <div class="dd-header">
                            <span>Messages</span>
                            <span><a href="#">Settings</a></span>
                        </div>

                        <ul class="scrollthis">
                            <li class="">
                                <a href="#">
                                    <img class="msg-avatar" src="assets/demo/avatar/avatar_09.png" alt="avatar" />
                                    <div class="msg-content">
                                        <span class="name">Steven Shipe</span>
                                        <span class="msg">Nonummy nibh epismod lorem ipsum</span>
                                    </div>
                                    <span class="msg-time">30s</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="msg-avatar" src="assets/demo/avatar/avatar_01.png" alt="avatar" />
                                    <div class="msg-content">
                                        <span class="name">Roxann Hollingworth <i class="fa fa-paperclip attachment"></i></span>
                                        <span class="msg">Lorem ipsum dolor sit amet consectetur adipisicing elit</span>
                                    </div>
                                    <span class="msg-time">5m</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="msg-avatar" src="assets/demo/avatar/avatar_05.png" alt="avatar" />
                                    <div class="msg-content">
                                        <span class="name">Diamond Harlands</span>
                                        <span class="msg">:)</span>
                                    </div>
                                    <span class="msg-time">3h</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="msg-avatar" src="assets/demo/avatar/avatar_02.png" alt="avatar" />
                                    <div class="msg-content">
                                        <span class="name">Michael Serio <i class="fa fa-paperclip attachment"></i></span>
                                        <span class="msg">Sed distinctio dolores fuga molestiae modi?</span>
                                    </div>
                                    <span class="msg-time">12h</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="msg-avatar" src="assets/demo/avatar/avatar_03.png" alt="avatar" />
                                    <div class="msg-content">
                                        <span class="name">Matt Jones</span>
                                        <span class="msg">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et mole</span>
                                    </div>
                                    <span class="msg-time">2d</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="msg-avatar" src="assets/demo/avatar/avatar_07.png" alt="avatar" />
                                    <div class="msg-content">
                                        <span class="name">John Doe</span>
                                        <span class="msg">Neque porro quisquam est qui dolorem</span>
                                    </div>
                                    <span class="msg-time">7d</span>
                                </a>
                            </li>					
                        </ul>
                        <div class="dd-footer"><a href="#">View all messages</a></div>
                    </div>
                </li>

                <li class="dropdown toolbar-icon-bg demo-search-hidden mr5">
                    <a href="#" class="dropdown-toggle tooltips" data-toggle="dropdown"><span class="icon-bg"><i class="fa fa-fw fa-search"></i></span></a>

                    <div class="dropdown-menu arrow search dropdown-menu-form">
                        <div class="dd-header">
                            <span>Search</span>
                            <span><a href="#">Advanced search</a></span>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="">

                            <span class="input-group-btn">

                                <a class="btn btn-primary" href="#">Search</a>
                            </span>
                        </div>
                    </div>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle username" data-toggle="dropdown">
                        <span class="hidden-xs">Alexander Smith</span>
                        <img class="img-circle" src="assets/demo/avatar/avatar_06.png" alt="Dangerfield" />

                    </a>
                    <ul class="dropdown-menu userinfo">
                        <li><a href="#"><span class="pull-left">Edit Profile</span> <i class="pull-right fa fa-pencil"></i></a></li>
                        <li><a href="#"><span class="pull-left">Account Settings</span> <i class="pull-right fa fa-cogs"></i></a></li>
                        <li><a href="#"><span class="pull-left">Help</span> <i class="pull-right fa fa-question-circle"></i></a></li>
                        <li class="divider"></li>
                        <li><a href="#"><span class="pull-left">Earnings</span> <i class="pull-right fa fa-money"></i></a></li>
                        <li><a href="#"><span class="pull-left">Statement</span> <i class="pull-right fa fa-file-o"></i></a></li>
                        <li><a href="#"><span class="pull-left">Withdrawals</span> <i class="pull-right fa fa-credit-card"></i></a></li>
                        <li class="divider"></li>
                        <li><a href="#"><span class="pull-left">Sign Out</span> <i class="pull-right fa fa-sign-out"></i></a></li>
                    </ul>
                </li>

            </ul>

        </header>

        <div id="wrapper">
            <div id="layout-static">
                <div class="static-sidebar-wrapper sidebar-default">
                    <div class="static-sidebar">
                        <div class="sidebar">


                            <div class="widget stay-on-collapse">
                                <div class="widget-body welcome-box tabular">
                                    <div class="tabular-row">
                                        <div class="tabular-cell welcome-avatar">
                                            <a href="#"><img src="assets/demo/avatar/avatar_06.png" class="avatar"></a>
                                        </div>
                                        <div class="tabular-cell welcome-options">
                                            <span class="welcome-text">Welcome,</span>
                                            <a href="#" class="name">Alexander Smith</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="widget stay-on-collapse" id="widget-sidebar">
                                <span class="widget-heading">Explore</span>
                                <nav role="navigation" class="widget-body">
                                    <ul class="acc-menu">
                                        <li><a href="index-2.html"><i class="fa fa-home"></i><span>Dashboard</span><span class="badge badge-dark">1</span></a></li>
                                        <li><a href="javascript:;"><i class="fa fa-columns"></i><span>Layouts</span><span class="badge badge-dark">23</span></a>
                                            <ul class="acc-menu">
                                                <li><a href="layout-grids.html">Grid Scaffolding</a></li>

                                                <li><a href="layout-fixed-sidebars.html">Stretch Sidebars</a></li>

                                                <li><a href="layout-sidebar-scroll.html">Sidebar Scroll</a></li>
                                                <li><a href="layout-static-leftbar.html">Static Sidebar</a></li>

                                                <li><a href="layout-infobar-offcanvas.html">Offcanvas Infobar</a></li>
                                                <li><a href="layout-infobar-overlay.html">Overlay Infobar</a></li>

                                                <li><a href="layout-breadcrumb-top.html">Breadcrumb on Top</a></li>
                                                <li><a href="layout-page-tabs.html">Page Tabs</a></li>

                                                <li><a href="layout-fullheight-content.html">Fixed Height Content</a></li>
                                                <li><a href="layout-fullheight-panel.html">Fixed Height Panel</a></li>

                                                <li><a href="layout-leftbar-widgets.html">Leftbar Widgets <span class="label label-grape">Cool</span></a></li>
                                                <li><a href="layout-rightbar-widgets.html">Rightbar Widgets <span class="label label-grape">Cool</span></a></li>
                                                <li><a href="layout-topnav-options.html">Topnav Options</a></li>

                                                <li><a href="javascript:;">Horizontal Nav <span class="badge badge-dark">2</span></a>
                                                    <ul class="acc-menu">
                                                        <li><a href="layout-horizontal-small.html">Small Menu</a></li>
                                                        <li><a href="layout-horizontal-large.html">Large Menu</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="layout-chatbar-overlay.html">Chatbar</a></li>
                                                <li><a href="layout-boxed.html">Boxed</a></li>
                                                <li><a href="layout-compact.html">Compact Leftbar</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="javascript:;"><i class="fa fa-flask"></i><span>Base UI</span></a>
                                            <ul class="acc-menu">
                                                <li><a href="ui-typography.html">Typography</a></li>
                                                <li><a href="ui-buttons.html">Buttons</a></li>
                                                <li><a href="ui-tables.html">Tables</a></li>
                                                <li><a href="ui-forms.html">Forms</a></li>
                                                <li><a href="ui-images.html">Images</a></li>
                                                <li><a href="ui-panels.html">Panels</a></li>
                                                <li><a href="ui-icons.html">Font Icons</a></li>
                                                <li><a href="ui-helpers.html">Helpers</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:;"><i class="fa fa-cogs"></i><span>BS Components</span><span class="label label-primary">BS</span></a>
                                            <ul class="acc-menu">
                                                <li><a href="ui-modals.html">Modal Box</a></li>
                                                <li><a href="ui-progress.html">Progress Bars</a></li>
                                                <li><a href="ui-paginations.html">Pagers &amp; Paginations</a></li>
                                                <li><a href="ui-breadcrumbs.html">Breadcrumbs</a></li>
                                                <li><a href="ui-labelsbadges.html">Labels &amp; Badges</a></li>
                                                <li><a href="ui-alerts.html">Alerts &amp; Notificiations</a></li>
                                                <li><a href="ui-tabs.html">Tabs &amp; Accordions</a></li>
                                                <li><a href="ui-navbars.html">Navbars</a></li>
                                                <li><a href="ui-carousel.html">Carousel</a></li>
                                                <li><a href="ui-wells.html">Wells</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:;"><i class="fa fa-random"></i><span>Custom Components</span></a>
                                            <ul class="acc-menu">
                                                <li><a href="ui-tiles.html">Tiles</a></li>
                                                <li><a href="custom-skylo.html">Page Progress Bar</a></li>
                                                <li><a href="custom-bootbox.html">Bootbox</a></li>
                                                <li><a href="custom-datepaginator.html">Date Paginator</a></li>
                                                <li><a href="custom-pines.html">Pines Notification</a></li>
                                                <li><a href="custom-notific8.html">Notific8 Notification</a></li>
                                                <li><a href="custom-pulsate.html">Pulsating Elements</a></li>
                                                <li><a href="custom-knob.html">jQuery Knob</a></li>
                                                <li><a href="custom-jqueryui.html">jQueryUI Widgets</a></li>
                                                <li><a href="custom-ionrange.html">Ion Range Slider</a></li>
                                                <li><a href="custom-tour.html">Tour</a></li>
                                                <li><a href="ui-nestable.html">Nestable Lists</a></li>
                                                <li><a href="custom-jstree.html">Tree View</a></li>
                                                <li><a href="custom-weather.html">Weather</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:;"><i class="fa fa-pencil"></i><span>Advanced Forms</span></a>
                                            <ul class="acc-menu">
                                                <li><a href="form-components.html">Form Components</a></li>
                                                <li><a href="form-pickers.html">Pickers</a></li>
                                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                                <li><a href="form-validation.html">Form Validation</a></li>
                                                <li><a href="form-masks.html">Form Masks</a></li>
                                                <li><a href="form-dropzone.html">Dropzone Uploader</a></li>
                                                <li><a href="form-ckeditor.html">CKEditor</a></li>
                                                <li><a href="form-summernote.html">Summernote</a></li>
                                                <li><a href="form-markdown.html">Markdown Editor</a></li>
                                                <li><a href="form-xeditable.html">Inline Editor</a></li>
                                                <li><a href="form-imagecrop.html">Image Cropping</a></li>
                                                <li><a href="form-gridforms.html">Grid Forms</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:;"><i class="fa fa-table"></i><span>Advanced Tables</span></a>
                                            <ul class="acc-menu">
                                                <li><a href="tables-responsive.html">Responsive Tables</a></li>
                                                <li><a href="tables-editable.html">Editable Tables</a></li>
                                                <li><a href="tables-data.html">Data Tables</a></li>
                                                <li><a href="tables-advanceddatatable.html">Advanced Data Tables</a></li>
                                                <li><a href="tables-fixedheader.html">Fixed Header Tables</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="ui-advancedpanels.html"><i class="fa fa-cog fa-spin"></i><span>Advanced Panels</span><span class="label label-alizarin">HOT!</span></a></li>
                                        <li><a href="javascript:;"><i class="fa fa-bar-chart-o"></i><span>Analytics</span></a>
                                            <ul class="acc-menu">
                                                <li><a href="charts-flot.html">Flot</a></li>
                                                <li><a href="charts-sparklines.html">Sparklines</a></li>
                                                <li><a href="charts-morris.html">Morris.js</a></li>
                                                <li><a href="charts-chart.html">Chart.js</a></li>
                                                <li><a href="charts-easypiechart.html">Easy Pie Chart</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:;"><i class="fa fa-map-marker"></i><span>Maps</span></a>
                                            <ul class="acc-menu">
                                                <li><a href="maps-google.html">Google Maps</a></li>
                                                <li><a href="maps-vector.html">Vector Maps</a></li>
                                                <li><a href="maps-mapael.html">Mapael</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:;"><i class="fa fa-files-o"></i><span>Pages</span></a>
                                            <ul class="acc-menu">
                                                <li><a href="extras-messages.html">Messages</a></li>
                                                <li><a href="extras-profile.html">Profile</a></li>
                                                <li><a href="extras-calendar.html">Calendar</a></li>
                                                <li><a href="extras-timeline.html">Timeline</a></li>
                                                <li><a href="extras-search.html">Search Page</a></li>
                                                <li><a href="extras-chatroom.html">Chat Room</a></li>
                                                <li><a href="extras-invoice.html">Invoice</a></li>
                                                <li><a href="javascript:;">Responsive Email Template</a>
                                                    <ul class="acc-menu">
                                                        <li><a href="responsive-email/basic.html">Basic</a></li>
                                                        <li><a href="responsive-email/hero.html">Hero</a></li>
                                                        <li><a href="responsive-email/sidebar.html">Sidebar</a></li>
                                                        <li><a href="responsive-email/sidebar-hero.html">Sidebar Hero</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="extras-gallery.html">Gallery</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:;"><i class="fa fa-briefcase"></i><span>Extras</span></a>
                                            <ul class="acc-menu">
                                                <li><a href="extras-pricingtable.html">Pricing Tables</a></li>
                                                <li><a href="extras-faq.html">FAQ</a></li>
                                                <li><a href="extras-registration.html">Registration</a></li>
                                                <li><a href="extras-forgotpassword.html">Password Reset</a></li>
                                                <li><a href="extras-login.html">Login</a></li>
                                                <li><a href="extras-404.html">404 Page</a></li>
                                                <li><a href="extras-500.html">500 Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:;"><i class="fa fa-sitemap"></i><span>Multiple Level Menu</span><span class="badge badge-dark">99</span></a>
                                            <ul class="acc-menu">
                                                <li><a href="javascript:;">Menu Item 1</a></li>
                                                <li><a href="javascript:;">Menu Item 2</a>
                                                    <ul class="acc-menu">
                                                        <li><a href="javascript:;">Menu Item 2.1</a></li>
                                                        <li><a href="javascript:;">Menu Item 2.2</a>
                                                            <ul class="acc-menu">
                                                                <li><a href="javascript:;">Menu Item 2.2.1</a></li>
                                                                <li><a href="javascript:;">Menu Item 2.2.2</a>
                                                                    <ul class="acc-menu">
                                                                        <li><a href="javascript:;">And deeper yet!</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="disabled-link"><a href="index-2.html">Disabled Menu Item</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>


                            <div class="widget stay-on-collapse">
                                <div class="widget-heading">Functional Apps</div>
                                <nav class="widget-body">
                                    <ul class="acc-menu">
                                        <li><a href="app-inbox.html"><i class="fa fa-inbox"></i><span>Inbox</span><span class="badge badge-success">3</span></a></li>
                                        <li><a href="app-tasks.html"><i class="fa fa-tasks"></i><span>Tasks</span><span class="badge badge-info">7</span></a></li>
                                        <li><a href="app-notes.html"><i class="fa fa-pencil-square-o"></i><span>Notes</span></a></li>
                                        <li><a href="app-todo.html"><i class="fa fa-check"></i><span>Todo</span><span class="badge badge-dark">10</span></a></li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="widget stay-on-collapse">
                                <div class="widget-heading">Templates</div>
                                <nav class="widget-body">
                                    <ul class="acc-menu">
                                        <li><a href="javascript:;"><i class="fa fa-coffee"></i><span>Blog</span></a>
                                            <ul class="acc-menu">
                                                <li><a href="app-blog-dashboard.html">Dashboard</a></li>
                                                <li><a href="app-blog-page-list.html">Page List</a></li>
                                                <li><a href="app-blog-edit.html">Page Edit</a></li>
                                                <li><a href="app-blog-comment.html">Comment Moderation</a></li>
                                                <li><a href="javascript:;">Blog Front</a>
                                                    <ul class="acc-menu">
                                                        <li><a href="app-blogfront-list.html">Blog Page</a></li>
                                                        <li><a href="app-blogfront-page.html">Blog Post</a></li>
                                                        <li><a href="app-blogfront-column.html">Blog Column</a></li>
                                                        <li><a href="app-blogfront-portfolio.html">Porfolio</a></li>
                                                    </ul>
                                                </li>


                                            </ul>
                                        </li>
                                        <li><a href="javascript:;"><i class="fa fa-shopping-cart"></i><span>eCommerce</span></a>
                                            <ul class="acc-menu">
                                                <li><a href="app-ecommerce-dashboard.html">Dashboard</a></li>
                                                <!-- <li><a href="app-ecommerce-order-list.html">Order List</a></li>
                                                <li><a href="app-ecommerce-order-details.html">Order Details</a></li> -->
                                                <li><a href="app-ecommerce-product-list.html">Product List</a></li>
                                                <li><a href="app-ecommerce-product-edit.html">Product Edit</a></li>
                                                <li><a href="javascript:;">Store Front</a>
                                                    <ul class="acc-menu">
                                                        <li><a href="app-store-product-list.html">Product List</a></li>
                                                        <!-- <li><a href="app-store-product-column.html">Product Column</a></li> -->
                                                        <li><a href="app-store-product-details.html">Product Details</a></li>
                                                        <li><a href="app-store-shoppingcart.html">Shopping Cart</a></li>
                                                        <li><a href="app-store-checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <div class="page-heading">            
                                <h1>Dashboard</h1>
                                <div class="options">
                                    <div class="btn-toolbar">
                                        <a href="#" class="btn btn-default"><i class="fa fa-fw fa-cog"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- <ol class="breadcrumb">
                                
<li class="active"><a href="index.html">Home</a></li>

                            </ol> -->
                            <div class="container-fluid">


                                <div id="panel-advancedoptions">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a class="info-tiles tiles-inverse has-footer" href="#">
                                                <div class="tiles-heading">
                                                    <div class="pull-left">Orders</div>
                                                    <div class="pull-right">
                                                        <div id="tileorders" class="sparkline-block"></div>
                                                    </div>
                                                </div>
                                                <div class="tiles-body">
                                                    <div class="text-center">1,249</div>
                                                </div>
                                                <div class="tiles-footer">
                                                    <div class="pull-left">manage orders</div>
                                                    <div class="pull-right percent-change">+20.7%</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="info-tiles tiles-green has-footer" href="#">
                                                <div class="tiles-heading">
                                                    <div class="pull-left">Revenues</div>
                                                    <div class="pull-right">
                                                        <div id="tilerevenues" class="sparkline-block"></div>
                                                    </div>
                                                </div>
                                                <div class="tiles-body">
                                                    <div class="text-center">$61,250</div>
                                                </div>
                                                <div class="tiles-footer">
                                                    <div class="pull-left">go to accounts</div>
                                                    <div class="pull-right percent-change">+17.2%</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="info-tiles tiles-blue has-footer" href="#">
                                                <div class="tiles-heading">
                                                    <div class="pull-left">Tickets</div>
                                                    <div class="pull-right">
                                                        <div id="tiletickets" class="sparkline-block"></div>
                                                    </div>
                                                </div>
                                                <div class="tiles-body">
                                                    <div class="text-center">1,398</div>
                                                </div>
                                                <div class="tiles-footer">
                                                    <div class="pull-left">see all tickets</div>
                                                    <div class="pull-right percent-change">+10.3%</div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-3">
                                            <a class="info-tiles tiles-midnightblue has-footer" href="#">
                                                <div class="tiles-heading">
                                                    <div class="pull-left">Members</div>
                                                    <div class="pull-right">
                                                        <div id="tilemembers" class="sparkline-block"></div>
                                                    </div>
                                                </div>
                                                <div class="tiles-body">
                                                    <div class="text-center">7,112</div>
                                                </div>
                                                <div class="tiles-footer">
                                                    <div class="pull-left">manage members</div>
                                                    <div class="pull-right percent-change">-11.1%</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12 bs-grid">
                                            <div class="panel panel-default panel-btn-focused" id="p1" data-widget-editbutton="false">
                                                <div class="panel-heading">
                                                    <h2>
                                                        <ul class="nav nav-tabs">
                                                            <li class="active"><a href="#tab-visitor" data-toggle="tab"><i class="fa fa-user visible-xs"></i><span class="hidden-xs">Visitor Stats</span></a></li>
                                                            <li><a href="#tab-revenues" data-toggle="tab"><i class="fa fa-bar-chart-o visible-xs"></i><span class="hidden-xs">Revenues</span></a></li>
                                                        </ul>
                                                    </h2>
                                                </div>
                                                <div class="panel-colorbox" style="display: none">
                                                    <ul class="list-unstyled list-inline panel-color-list">
                                                        <li><span data-widget-setstyle="panel-default"></span></li>
                                                        <li><span data-widget-setstyle="panel-inverse"></span></li>
                                                        <li><span data-widget-setstyle="panel-primary"></span></li>
                                                        <li><span data-widget-setstyle="panel-success"></span></li>
                                                        <li><span data-widget-setstyle="panel-warning"></span></li>
                                                        <li><span data-widget-setstyle="panel-danger"></span></li>
                                                        <li><span data-widget-setstyle="panel-info"></span></li>
                                                        <li><span data-widget-setstyle="panel-brown"></span></li>
                                                        <li><span data-widget-setstyle="panel-indigo"></span></li>
                                                        <li><span data-widget-setstyle="panel-orange"></span></li>
                                                        <li><span data-widget-setstyle="panel-midnightblue"></span></li>
                                                        <li><span data-widget-setstyle="panel-sky"></span></li>
                                                        <li><span data-widget-setstyle="panel-magenta"></span></li>
                                                        <li><span data-widget-setstyle="panel-purple"></span></li>
                                                        <li><span data-widget-setstyle="panel-green"></span></li>
                                                        <li><span data-widget-setstyle="panel-grape"></span></li>
                                                    </ul>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="tab-content">
                                                        <div class="clearfix">
                                                            <button class="btn btn-default pull-left" id="daterangepicker2">
                                                                <i class="fa fa-calendar visible-xs"></i> 
                                                                <span class="hidden-xs" style="text-transform: uppercase;"><?php echo date("F j, Y", strtotime('-30 day')); ?> - <?php echo date("F j, Y"); ?></span> <b class="caret"></b>
                                                            </button>

                                                            <div class="btn-toolbar pull-right">
                                                                <div class="btn-group">
                                                                    <a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download visible-xs"></i><span class="hidden-xs">Export as </span> <span class="caret"></span></a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="#">Text File (*.txt)</a></li>
                                                                        <li><a href="#">Excel File (*.xlsx)</a></li>
                                                                        <li><a href="#">PDF File (*.pdf)</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="tab-visitor" class="tab-pane active">
                                                            <div id="visitors-stats" style="height:250px;" class="demo-graph graph-1"></div>
                                                        </div>
                                                        <div id="tab-revenues" class="tab-pane">
                                                            <div id="revenues-stats" style="height: 250px;" class="demo-graph graph-2"></div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 bs-grid">
                                            <div class="row">
                                                <div class="col-md-12 bs-grid">
                                                    <div class="panel panel-default panel-btn-focused" id="p2">
                                                        <div class="panel-heading">
                                                            <h2>Population by country</h2>
                                                        </div>
                                                        <div class="panel-editbox" style="display: none">
                                                            <div class="form-horizontal">
                                                                <div class="form-group">
                                                                    <div class="col-sm-12">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel-colorbox" style="display: none">
                                                            <ul class="list-unstyled list-inline panel-color-list">
                                                                <li><span data-widget-setstyle="panel-default"></span></li>
                                                                <li><span data-widget-setstyle="panel-inverse"></span></li>
                                                                <li><span data-widget-setstyle="panel-primary"></span></li>
                                                                <li><span data-widget-setstyle="panel-success"></span></li>
                                                                <li><span data-widget-setstyle="panel-warning"></span></li>
                                                                <li><span data-widget-setstyle="panel-danger"></span></li>
                                                                <li><span data-widget-setstyle="panel-info"></span></li>
                                                                <li><span data-widget-setstyle="panel-brown"></span></li>
                                                                <li><span data-widget-setstyle="panel-indigo"></span></li>
                                                                <li><span data-widget-setstyle="panel-orange"></span></li>
                                                                <li><span data-widget-setstyle="panel-midnightblue"></span></li>
                                                                <li><span data-widget-setstyle="panel-sky"></span></li>
                                                                <li><span data-widget-setstyle="panel-magenta"></span></li>
                                                                <li><span data-widget-setstyle="panel-purple"></span></li>
                                                                <li><span data-widget-setstyle="panel-green"></span></li>
                                                                <li><span data-widget-setstyle="panel-grape"></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="panel-body bg-gray">
                                                            <div class="map-world">
                                                                <div class="row mb20">
                                                                    <div class="map col-md-12">
                                                                        <span>Alternative content for the map</span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="areaLegend">
                                                                            <span>Alternative content for the legend</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="plotLegend">
                                                                            <span>Alternative content for the legend</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 bs-grid">
                                                    <div class="panel panel-default panel-btn-focused demo-new-members" id="p3">
                                                        <div class="panel-heading">
                                                            <h2>New Members</h2>
                                                        </div>
                                                        <div class="panel-editbox" style="display: none">
                                                            <div class="form-horizontal">
                                                                <div class="form-group">
                                                                    <div class="col-sm-12">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel-colorbox" style="display: none">
                                                            <ul class="list-unstyled list-inline panel-color-list">
                                                                <li><span data-widget-setstyle="panel-default"></span></li>
                                                                <li><span data-widget-setstyle="panel-inverse"></span></li>
                                                                <li><span data-widget-setstyle="panel-primary"></span></li>
                                                                <li><span data-widget-setstyle="panel-success"></span></li>
                                                                <li><span data-widget-setstyle="panel-warning"></span></li>
                                                                <li><span data-widget-setstyle="panel-danger"></span></li>
                                                                <li><span data-widget-setstyle="panel-info"></span></li>
                                                                <li><span data-widget-setstyle="panel-brown"></span></li>
                                                                <li><span data-widget-setstyle="panel-indigo"></span></li>
                                                                <li><span data-widget-setstyle="panel-orange"></span></li>
                                                                <li><span data-widget-setstyle="panel-midnightblue"></span></li>
                                                                <li><span data-widget-setstyle="panel-sky"></span></li>
                                                                <li><span data-widget-setstyle="panel-magenta"></span></li>
                                                                <li><span data-widget-setstyle="panel-purple"></span></li>
                                                                <li><span data-widget-setstyle="panel-green"></span></li>
                                                                <li><span data-widget-setstyle="panel-grape"></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="panel-body panel-no-padding">
                                                            <div class="tabel-responsive">
                                                                <table class="table table-hover mb0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="5" class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></th>
                                                                    <th width="25">Name</th>
                                                                    <th width="35" class="hidden-xs">Email</th>
                                                                    <th width="50"></th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></td>
                                                                            <td>Joesph Keitt</td>
                                                                            <td class="hidden-xs">joseph01@xyz.com</td>
                                                                            <td class="vam td-btn text-right">
                                                                                <div class="btn-group">
                                                                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-check"></i></a>
                                                                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-times"></i></a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></td>
                                                                            <td>Andrew Hall</td>
                                                                            <td class="hidden-xs">andrew01@xyz.com</td>
                                                                            <td class="vam td-btn text-right">
                                                                                <div class="btn-group">
                                                                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-check"></i></a>
                                                                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-times"></i></a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></td>
                                                                            <td>Rhett Hisle</td>
                                                                            <td class="hidden-xs">rhett88@abc.com</td>
                                                                            <td class="vam td-btn text-right">
                                                                                <div class="btn-group">
                                                                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-check"></i></a>
                                                                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-times"></i></a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></td>
                                                                            <td>Collin Bessette</td>
                                                                            <td class="hidden-xs">collb11@xyz.com</td>
                                                                            <td class="vam td-btn text-right">
                                                                                <div class="btn-group">
                                                                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-check"></i></a>
                                                                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-times"></i></a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></td>
                                                                            <td>Anderson Corrigan</td>
                                                                            <td class="hidden-xs">andy91@abc.com</td>
                                                                            <td class="vam td-btn text-right">
                                                                                <div class="btn-group">
                                                                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-check"></i></a>
                                                                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-times"></i></a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></td>
                                                                            <td>Archie Chavarria</td>
                                                                            <td class="hidden-xs">arch77@abc.com</td>
                                                                            <td class="vam td-btn text-right">
                                                                                <div class="btn-group">
                                                                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-check"></i></a>
                                                                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-times"></i></a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></td>
                                                                            <td>Dirk Fino</td>
                                                                            <td class="hidden-xs">dif03@xyz.com</td>
                                                                            <td class="vam td-btn text-right">
                                                                                <div class="btn-group">
                                                                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-check"></i></a>
                                                                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-times"></i></a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></td>
                                                                            <td>Ignacio Mcmaster</td>
                                                                            <td class="hidden-xs">andrew01@xyz.com</td>
                                                                            <td class="vam td-btn text-right">
                                                                                <div class="btn-group">
                                                                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-check"></i></a>
                                                                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-times"></i></a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></td>
                                                                            <td>Dana Adair</td>
                                                                            <td class="hidden-xs">dann4@abc.com</td>
                                                                            <td class="vam td-btn text-right">
                                                                                <div class="btn-group">
                                                                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-check"></i></a>
                                                                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-times"></i></a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></td>
                                                                            <td>Lloyd Klass</td>
                                                                            <td class="hidden-xs">lklass1@abc.com</td>
                                                                            <td class="vam td-btn text-right">
                                                                                <div class="btn-group">
                                                                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-check"></i></a>
                                                                                    <a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-times"></i></a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="panel-footer p10 m0">
                                                                <ul class="pagination pagination-sm m0 pull-right">
                                                                    <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                                                    <li class="active"><a href="#">1</a></li>
                                                                    <li><a href="#">2</a></li>
                                                                    <li><a href="#">3</a></li>
                                                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                                                </ul>
                                                                <a href="#" class="btn btn-sm btn-default pull-left">Approve Selected</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 bs-grid">
                                                    <div class="panel panel-default panel-btn-focused" id="p4">
                                                        <div class="panel-heading">
                                                            <h2>Calendar</h2>
                                                            <div class="panel-ctrls">

                                                            </div>
                                                        </div>
                                                        <div class="panel-editbox" style="display: none">
                                                            <div class="form-horizontal">
                                                                <div class="form-group">
                                                                    <div class="col-sm-12">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel-colorbox" style="display: none">
                                                            <ul class="list-unstyled list-inline panel-color-list">
                                                                <li><span data-widget-setstyle="panel-default"></span></li>
                                                                <li><span data-widget-setstyle="panel-inverse"></span></li>
                                                                <li><span data-widget-setstyle="panel-primary"></span></li>
                                                                <li><span data-widget-setstyle="panel-success"></span></li>
                                                                <li><span data-widget-setstyle="panel-warning"></span></li>
                                                                <li><span data-widget-setstyle="panel-danger"></span></li>
                                                                <li><span data-widget-setstyle="panel-info"></span></li>
                                                                <li><span data-widget-setstyle="panel-brown"></span></li>
                                                                <li><span data-widget-setstyle="panel-indigo"></span></li>
                                                                <li><span data-widget-setstyle="panel-orange"></span></li>
                                                                <li><span data-widget-setstyle="panel-midnightblue"></span></li>
                                                                <li><span data-widget-setstyle="panel-sky"></span></li>
                                                                <li><span data-widget-setstyle="panel-magenta"></span></li>
                                                                <li><span data-widget-setstyle="panel-purple"></span></li>
                                                                <li><span data-widget-setstyle="panel-green"></span></li>
                                                                <li><span data-widget-setstyle="panel-grape"></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div id="calendar-drag"></div>
                                                        </div>
                                                    </div>
                                                </div>			
                                            </div>
                                        </div>
                                        <div class="col-md-6 bs-grid">
                                            <div class="row">
                                                <div class="col-md-12 bs-grid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="panel panel-default panel-btn-focused" id="p5">
                                                                <div class="panel-heading">
                                                                    <h2>Live Dynamic</h2>
                                                                    <div class="panel-ctrls">
                                                                        <input type="checkbox" class="js-switch-success switchery-xs" checked id="live-dynamic-switch" />
                                                                        <i class="separator"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="panel-editbox" style="display: none">
                                                                    <div class="form-horizontal">
                                                                        <div class="form-group">
                                                                            <div class="col-sm-12">
                                                                                <input type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel-colorbox" style="display: none">
                                                                    <ul class="list-unstyled list-inline panel-color-list">
                                                                        <li><span data-widget-setstyle="panel-default"></span></li>
                                                                        <li><span data-widget-setstyle="panel-inverse"></span></li>
                                                                        <li><span data-widget-setstyle="panel-primary"></span></li>
                                                                        <li><span data-widget-setstyle="panel-success"></span></li>
                                                                        <li><span data-widget-setstyle="panel-warning"></span></li>
                                                                        <li><span data-widget-setstyle="panel-danger"></span></li>
                                                                        <li><span data-widget-setstyle="panel-info"></span></li>
                                                                        <li><span data-widget-setstyle="panel-brown"></span></li>
                                                                        <li><span data-widget-setstyle="panel-indigo"></span></li>
                                                                        <li><span data-widget-setstyle="panel-orange"></span></li>
                                                                        <li><span data-widget-setstyle="panel-midnightblue"></span></li>
                                                                        <li><span data-widget-setstyle="panel-sky"></span></li>
                                                                        <li><span data-widget-setstyle="panel-magenta"></span></li>
                                                                        <li><span data-widget-setstyle="panel-purple"></span></li>
                                                                        <li><span data-widget-setstyle="panel-green"></span></li>
                                                                        <li><span data-widget-setstyle="panel-grape"></span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div id="server-load" style="height: 192px;"></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <a href="#" class="info-tiles tiles-midnightblue">
                                                                <div class="tiles-heading">
                                                                    Bandwidth
                                                                </div>
                                                                <div class="tiles-body">
                                                                    <div class="easypiechart" id="bandwidth" data-percent="42">
                                                                        <span class="percent"></span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <a href="#" class="info-tiles tiles-primary">
                                                                <div class="tiles-heading">
                                                                    Server Load
                                                                </div>
                                                                <div class="tiles-body">
                                                                    <div class="easypiechart" id="serverload" data-percent="31">
                                                                        <span class="percent"></span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <a href="#" class="info-tiles tiles-grape">
                                                                <div class="tiles-heading">
                                                                    RAM Usage
                                                                </div>
                                                                <div class="tiles-body">
                                                                    <div class="easypiechart" id="ramusage" data-percent="72">
                                                                        <span class="percent"></span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>		
                                                <div class="col-md-12 bs-grid">
                                                    <div class="panel panel-default panel-btn-focused" id="p6">
                                                        <div class="panel-heading">
                                                            <h2>Todo List</h2>
                                                        </div>
                                                        <div class="panel-editbox" style="display: none">
                                                            <div class="form-horizontal">
                                                                <div class="form-group">
                                                                    <div class="col-sm-12">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel-colorbox" style="display: none">
                                                            <ul class="list-unstyled list-inline panel-color-list">
                                                                <li><span data-widget-setstyle="panel-default"></span></li>
                                                                <li><span data-widget-setstyle="panel-inverse"></span></li>
                                                                <li><span data-widget-setstyle="panel-primary"></span></li>
                                                                <li><span data-widget-setstyle="panel-success"></span></li>
                                                                <li><span data-widget-setstyle="panel-warning"></span></li>
                                                                <li><span data-widget-setstyle="panel-danger"></span></li>
                                                                <li><span data-widget-setstyle="panel-info"></span></li>
                                                                <li><span data-widget-setstyle="panel-brown"></span></li>
                                                                <li><span data-widget-setstyle="panel-indigo"></span></li>
                                                                <li><span data-widget-setstyle="panel-orange"></span></li>
                                                                <li><span data-widget-setstyle="panel-midnightblue"></span></li>
                                                                <li><span data-widget-setstyle="panel-sky"></span></li>
                                                                <li><span data-widget-setstyle="panel-magenta"></span></li>
                                                                <li><span data-widget-setstyle="panel-purple"></span></li>
                                                                <li><span data-widget-setstyle="panel-green"></span></li>
                                                                <li><span data-widget-setstyle="panel-grape"></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="panel-body panel-no-padding panel-tasks">
                                                            <h4 class="task-header">Pending Tasks</h4>
                                                            <ul class="connectedSortable" id="sortable-tasks">
                                                                <li class="item-warning">
                                                                    <span class="drag-handle"> 
                                                                        <div class="checkbox-inline icheck"><input type="checkbox"></div>
                                                                    </span>
                                                                    <p>
                                                                        Send project demo files to client
                                                                    </p>
                                                                    <a href="#" class="btn btn-xs btn-default task-options"><i class="fa fa-pencil"></i></a>
                                                                </li>
                                                                <li class="item-orange">
                                                                    <span class="drag-handle"> 
                                                                        <div class="checkbox-inline icheck"><input type="checkbox"></div>
                                                                    </span>
                                                                    <p>
                                                                        Sketch wireframes for new project and send it to client as soon as possible
                                                                    </p>
                                                                    <a href="#" class="btn btn-xs btn-default task-options"><i class="fa fa-pencil"></i></a>
                                                                </li>
                                                                <li class="">
                                                                    <span class="drag-handle"> 
                                                                        <div class="checkbox-inline icheck"><input type="checkbox"></div>
                                                                    </span>
                                                                    <p>
                                                                        Buy some milk
                                                                    </p>
                                                                    <a href="#" class="btn btn-xs btn-default task-options"><i class="fa fa-pencil"></i></a>
                                                                </li>
                                                                <li class="">
                                                                    <span class="drag-handle"> 
                                                                        <div class="checkbox-inline icheck"><input type="checkbox"></div>
                                                                    </span>
                                                                    <p>
                                                                        Prepare documentation for completed project
                                                                    </p>
                                                                    <a href="#" class="btn btn-xs btn-default task-options"><i class="fa fa-pencil"></i></a>
                                                                </li>
                                                                <li class="item-success">
                                                                    <span class="drag-handle"> 
                                                                        <div class="checkbox-inline icheck"><input type="checkbox"></div>
                                                                    </span>
                                                                    <p>
                                                                        Meeting with the development team
                                                                    </p>
                                                                    <a href="#" class="btn btn-xs btn-default task-options"><i class="fa fa-pencil"></i></a>
                                                                </li>

                                                            </ul>
                                                            <h4 class="task-header"><i class="fa fa-check"></i> Completed Tasks</h4>
                                                            <ul class="task-completed connectedSortable" id="completed-tasks">

                                                                <li class="item-primary">
                                                                    <span class="drag-handle"> 
                                                                        <div class="checkbox-inline icheck"><input type="checkbox" checked></div>
                                                                        <span class="drag-image"></span>
                                                                    </span>
                                                                    <p>
                                                                        Assign tasks to designers
                                                                    </p>
                                                                    <a href="#" class="btn btn-xs btn-default task-options"><i class="fa fa-pencil"></i></a>
                                                                </li>
                                                                <li class="">
                                                                    <span class="drag-handle"> 
                                                                        <div class="checkbox-inline icheck"><input type="checkbox" checked></div>
                                                                        <span class="drag-image"></span>
                                                                    </span>
                                                                    <p>
                                                                        Set up a meeting with new client
                                                                    </p>
                                                                    <a href="#" class="btn btn-xs btn-default task-options"><i class="fa fa-pencil"></i></a>
                                                                </li>

                                                            </ul>
                                                            <div class="tasks-footer clearfix">
                                                                <a href="#" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> <span class="hidden-xs">New</span></a>
                                                                <a href="#" class="btn btn-sm btn-default"><i class="fa fa-check"></i> <span class="hidden-xs">Mark All Done</span></a>
                                                                <a href="app-todo.html" class="btn-link btn-sm pull-right" style="padding-right: 0">Go to todo page</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
                    <footer role="contentinfo">
                        <div class="clearfix">
                            <ul class="list-unstyled list-inline pull-left">
                                <li><h6 style="margin: 0;"> &copy; 2014 Avalon</h6></li>
                            </ul>
                            <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
                        </div>
                    </footer>
                </div>
            </div>
        </div>


        <div class="infobar-wrapper">
            <div class="infobar">

                <div class="infobar-options">
                    <h2>Infobar</h2>
                </div>

                <div id="widgetarea">


                    <div class="widget" id="widget-sparkline">
                        <div class="widget-heading">
                            <a href="javascript:;" data-toggle="collapse" data-target="#sparklinestats"><h4>Sparkline Stats</h4></a>
                        </div>
                        <div class="widget-body collapse in" id="sparklinestats">
                            <ul class="sparklinestats">
                                <li>
                                    <div class="pull-left">
                                        <h5 class="title">Total Revenue</h5>
                                        <h3>$241,750 <span class="badge badge-success">+13.6%</span></h3>
                                    </div>
                                    <div class="pull-right">
                                        <div class="sparkline" id="infobar-revenuestats"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="pull-left">
                                        <h5 class="title">Products Sold</h5>
                                        <h3>11,562 <span class="badge badge-success">+19.2%</span></h3>
                                    </div>
                                    <div class="pull-right">
                                        <div class="sparkline" id="infobar-unitssold"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="pull-left">
                                        <h5 class="title">Total Orders</h5>
                                        <h3>1,249 <span class="badge badge-danger">-10.5%</span></h3>
                                    </div>
                                    <div class="pull-right">
                                        <div class="sparkline" id="infobar-orders"></div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="widget" id="widget-weather">
                        <div class="widget-heading">
                            <a href="javascript:;" data-toggle="collapse" data-target="#weatherwidget"><h4>Weather</h4></a>
                        </div>
                        <div class="widget-body collapse in" id="weatherwidget">
                            <div class="weather-container">
                                <div class="weather-widget"></div>
                            </div>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-heading">
                            <a href="javascript:;" data-toggle="collapse" data-target="#recentactivity"><h4>Recent Activity</h4></a>
                        </div>
                        <div class="widget-body collapse in" id="recentactivity">
                            <ul class="recent-activities">
                                <li>
                                    <div class="avatar">
                                        <img src="assets/demo/avatar/avatar_11.png" class="img-responsive img-circle">
                                    </div>
                                    <div class="content">
                                        <span class="msg"><a href="#" class="person">Jean Alanis</a> invited 3 unconfirmed members to <a href="#">Sed ut perspiciatis unde</a></span>
                                        <span class="time">Sep 16, 2014 at 10:06 AM</span>

                                    </div>
                                </li>
                                <li>
                                    <div class="activityicon activity-success">
                                        <i class="fa fa-cloud"></i>
                                    </div>
                                    <div class="content">
                                        <span class="msg"><a href="#" class="person">Stacy Villani</a> and <a href="#" class="person">Leroy Greenlee</a> added new files to <a href="#">Dicta sunt explicabo</a></span>
                                        <span class="time">Sep 12, 2014 at 11:06 PM</span>

                                    </div>
                                </li>
                                <li>
                                    <div class="avatar">
                                        <img src="assets/demo/avatar/avatar_07.png" class="img-responsive img-circle">
                                    </div>
                                    <div class="content">
                                        <span class="msg"><a href="#" class="person">Shannon Schmucker</a> is now following <a href="#" class="person">Anthony Ware</a></span>
                                        <span class="time">Sep 06, 2014 at 1:46 AM</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="avatar">
                                        <img src="assets/demo/avatar/avatar_01.png" class="img-responsive img-circle">
                                    </div>
                                    <div class="content">
                                        <span class="msg"><a href="#" class="person">Roxann Hollingworth</a> commented on <a href="#">Natus error sit voluptatem</a></span>
                                        <span class="time">Sep 02, 2014 at 7:50 PM</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="avatar">
                                        <img src="assets/demo/avatar/avatar_04.png" class="img-responsive img-circle">
                                    </div>
                                    <div class="content">
                                        <span class="msg"><a href="#" class="person">Mitchell Kosak</a> added <a href="#" class="person">Bruce Ory</a> to <a href="#">Accusantium doloremque laudantium</a></span>
                                        <span class="time">Sep 02, 2014 at 8:35 AM</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="activityicon activity-inverse">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="content">
                                        <span class="msg"><a href="#">4 new users</a> requested to join group</span>
                                        <span class="time">Aug 29, 2014 at 05:34 PM</span>

                                    </div>
                                </li>
                                <li>
                                    <div class="avatar">
                                        <img src="assets/demo/avatar/avatar_09.png" class="img-responsive img-circle">
                                    </div>
                                    <div class="content">
                                        <span class="msg"><a href="#" class="person">Rodney Moody</a> created new thread <a href="#">Vero eos et accusamus</a></span>
                                        <span class="time">Aug 13, 2014 at 1:23 PM</span>

                                    </div>
                                </li>
                                <li>
                                    <div class="activityicon activity-info">
                                        <i class="fa fa-comment-o"></i>
                                    </div>
                                    <div class="content">
                                        <span class="msg">Anonymous user commented on <a href="#">Totam rem aperiam</a></span>
                                        <span class="time">Aug 11, 2014 at 12:01 PM</span>

                                    </div>
                                </li>
                                <li>
                                    <div class="avatar">
                                        <img src="assets/demo/avatar/avatar_05.png" class="img-responsive img-circle">
                                    </div>
                                    <div class="content">
                                        <span class="msg"><a href="#" class="person">Pricilla Panella</a> is now following <a href="#" class="person">Ricky Marengo</a></span>
                                        <span class="time">Jul 25, 2014 at 3:11 PM</span>
                                    </div>
                                </li>
                                <li class="seeall">
                                    <a href="#" class="pull-right">See all activities</a>
                                </li>
                            </ul>
                        </div>
                    </div>



                    <!-- <div class="widget">
                        <div class="widget-heading">
                            <a href="javascript:;" data-toggle="collapse" data-target="#storagespace"><h4>Storage Space</h4></a>
                        </div>
                        <div class="widget-body collapse in" id="storagespace">
                            <div class="" style="padding: 20px 0">
                                <div class="clearfix">
                                    <div class="progress-title pull-left">1.31 GB used</div>
                                    <div class="progress-percentage pull-right">87.3%</div>
                                </div>
                                <div class="progress progress-lg">
                                    <div class="progress-bar progress-bar-success" style="width: 50%"></div>
                                    <div class="progress-bar progress-bar-warning" style="width: 25%"></div>
                                    <div class="progress-bar progress-bar-danger" style="width: 12.3%"></div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="widget">
                        <div class="widget-heading">
                            <a href="javascript:;" data-toggle="collapse" data-target="#contactdetails"><h4>Contact Details</h4></a>
                        </div>
                        <div class="widget-body collapse in" id="contactdetails">
                            <div class="contactdetails">
                                <div class="avatar">
                                    <img src="assets/demo/avatar/avatar_11.png" class="img-responsive img-circle">
                                </div>
                                <span class="contact-name">Joseph Vasquez</span>
                                <span class="contact-status">Client Representative</span>
                                <ul class="details">
                                    
                                    <li><a href="#"><i class="fa fa-fw fa-envelope-o"></i>&nbsp;p.bateman@gmail.com</a></li>
                                    <li><i class="fa fa-fw fa-phone"></i>&nbsp;+1 234 567 890</li>
                                    <li><i class="fa fa-fw fa-map-marker"></i>&nbsp;Hollywood Hills, California</li>
                                    
                                </ul>
            
                        </div>
                    </div> -->


                    <!-- <div class="widget">
                        <div class="widget-heading">
                            <a href="javascript:;" data-toggle="collapse" data-target="#contact-list"><h4>Contact List</h4></a>
                        </div>
                        <div class="widget-body collapse in" id="contact-list">
                            <ul class="contact-list">
                                <li>
                                    <div class="avatar">
                                        <img src="assets/demo/avatar/avatar_06.png" class="img-responsive img-circle" />
                                    </div>
                                    <div class="details">
                                        <div class="clearfix">
                                            <a href="#" class="contact-name pull-left">Jessie Pinkman</a>
                                            
                                                <div class="contact-profiles">
                                                    <a href="javascript:;" class="dropdown-toggle profile-list" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#"><i class="fa pull-right fa-envelope-o" style="color: #cccccc;"></i>Email</a></li>
                                                        <li><a href="#"><i class="fa pull-right fa-skype" style="color: #12a5f4;"></i>Skype</a></li>
                                                        <li><a href="#"><i class="fa pull-right fa-twitter" style="color: #00aced;"></i>Twitter</a></li>
                                                        <li><a href="#"><i class="fa pull-right fa-linkedin" style="color: #007bb6;"></i>LinkedIn</a></li>
                                                    </ul>
                                                </div>
                                                
                                            
                                        </div>
                                        <span class="contact-details">Senior Developer</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="avatar">
                                        <img src="assets/demo/avatar/avatar_01.png" class="img-responsive img-circle" />
                                    </div>
                                    <div class="details">
                                        <div class="clearfix">
                                            <a href="#" class="contact-name pull-left">Emma Watson</a>
                                            
                                                <div class="contact-profiles">
                                                    <a href="javascript:;" class="dropdown-toggle profile-list" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#"><i class="fa pull-right fa-envelope-o" style="color: #cccccc;"></i>Email</a></li>
                                                        <li><a href="#"><i class="fa pull-right fa-skype" style="color: #12a5f4;"></i>Skype</a></li>
                                                        <li><a href="#"><i class="fa pull-right fa-twitter" style="color: #00aced;"></i>Twitter</a></li>
                                                        <li><a href="#"><i class="fa pull-right fa-linkedin" style="color: #007bb6;"></i>LinkedIn</a></li>
                                                    </ul>
                                                </div>
                                                
                                            
                                        </div>
                                        <span class="contact-details">Graphic Designer</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="avatar">
                                        <img src="assets/demo/avatar/avatar_09.png" class="img-responsive img-circle" />
                                    </div>
                                    <div class="details">
                                        <div class="clearfix">
                                            <a href="#" class="contact-name pull-left">David Luke</a>
                                            
                                                <div class="contact-profiles">
                                                    <a href="javascript:;" class="dropdown-toggle profile-list" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#"><i class="fa pull-right fa-envelope-o" style="color: #cccccc;"></i>Email</a></li>
                                                        <li><a href="#"><i class="fa pull-right fa-skype" style="color: #12a5f4;"></i>Skype</a></li>
                                                        <li><a href="#"><i class="fa pull-right fa-twitter" style="color: #00aced;"></i>Twitter</a></li>
                                                        <li><a href="#"><i class="fa pull-right fa-linkedin" style="color: #007bb6;"></i>LinkedIn</a></li>
                                                    </ul>
                                                </div>
                                                
                                            
                                        </div>
                                        <span class="contact-details">Client Representative</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="avatar">
                                        <img src="assets/demo/avatar/avatar_11.png" class="img-responsive img-circle" />
                                    </div>
                                    <div class="details">
                                        <div class="clearfix">
                                            <a href="#" class="contact-name pull-left">John Arren</a>
                                            
                                                <div class="contact-profiles">
                                                    <a href="javascript:;" class="dropdown-toggle profile-list" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#"><i class="fa pull-right fa-envelope-o" style="color: #cccccc;"></i>Email</a></li>
                                                        <li><a href="#"><i class="fa pull-right fa-skype" style="color: #12a5f4;"></i>Skype</a></li>
                                                        <li><a href="#"><i class="fa pull-right fa-twitter" style="color: #00aced;"></i>Twitter</a></li>
                                                        <li><a href="#"><i class="fa pull-right fa-linkedin" style="color: #007bb6;"></i>LinkedIn</a></li>
                                                    </ul>
                                                </div>
                                                
                                            
                                        </div>
                                        <span class="contact-details">Project Manager</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="avatar">
                                        <img src="assets/demo/avatar/avatar_05.png" class="img-responsive img-circle" />
                                    </div>
                                    <div class="details">
                                        <div class="clearfix">
                                            <a href="#" class="contact-name pull-left">Ben Stiller</a>
                                            
                                                <div class="contact-profiles">
                                                    <a href="javascript:;" class="dropdown-toggle profile-list" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#"><i class="fa pull-right fa-envelope-o" style="color: #cccccc;"></i>Email</a></li>
                                                        <li><a href="#"><i class="fa pull-right fa-skype" style="color: #12a5f4;"></i>Skype</a></li>
                                                        <li><a href="#"><i class="fa pull-right fa-twitter" style="color: #00aced;"></i>Twitter</a></li>
                                                        <li><a href="#"><i class="fa pull-right fa-linkedin" style="color: #007bb6;"></i>LinkedIn</a></li>
                                                    </ul>
                                                </div>
                                                
                                            
                                        </div>
                                        <span class="contact-details">Senior Designer</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="avatar">
                                        <img src="assets/demo/avatar/avatar_08.png" class="img-responsive img-circle" />
                                    </div>
                                    <div class="details">
                                        <div class="clearfix">
                                            <a href="#" class="contact-name pull-left">Jeofry Thompson</a>
                                            
                                                <div class="contact-profiles">
                                                    <a href="javascript:;" class="dropdown-toggle profile-list" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#"><i class="fa pull-right fa-envelope-o" style="color: #cccccc;"></i>Email</a></li>
                                                        <li><a href="#"><i class="fa pull-right fa-skype" style="color: #12a5f4;"></i>Skype</a></li>
                                                        <li><a href="#"><i class="fa pull-right fa-twitter" style="color: #00aced;"></i>Twitter</a></li>
                                                        <li><a href="#"><i class="fa pull-right fa-linkedin" style="color: #007bb6;"></i>LinkedIn</a></li>
                                                    </ul>
                                                </div>
                                                
                                            
                                        </div>
                                        <span class="contact-details">Developer</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> -->




                </div>
            </div>
        </div>


        <!-- Switcher -->
        <div class="demo-options">
            <div class="demo-options-icon"><i class="fa fa-spin fa-fw fa-smile-o"></i></div>
            <div class="demo-heading">Demo Settings</div>

            <div class="demo-body">
                <div class="tabular">
                    <div class="tabular-row">
                        <div class="tabular-cell">Fixed Header</div>
                        <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" checked data-size="mini" data-on-color="success" data-off-color="default" name="demo-fixedheader" data-on-text="I" data-off-text="O"></div>
                    </div>
                    <div class="tabular-row">
                        <div class="tabular-cell">Boxed Layout</div>
                        <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" data-size="mini" data-on-color="success" data-off-color="default" name="demo-boxedlayout" data-on-text="I" data-off-text="O"></div>
                    </div>
                    <div class="tabular-row">
                        <div class="tabular-cell">Collapse Leftbar</div>
                        <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" data-size="mini" data-on-color="success" data-off-color="default" name="demo-collapseleftbar" data-on-text="I" data-off-text="O"></div>
                    </div>
                    <div class="tabular-row">
                        <div class="tabular-cell">Collapse Rightbar</div>
                        <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" checked data-size="mini" data-on-color="success" data-off-color="default" name="demo-collapserightbar" data-on-text="I" data-off-text="O"></div>
                    </div>
                    <div class="tabular-row hide" id="demo-horizicon">
                        <div class="tabular-cell">Horizontal Icons</div>
                        <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" checked data-size="mini" data-on-color="primary" data-off-color="warning" data-on-text="S" data-off-text="L" name="demo-horizicons" ></div>
                    </div>
                </div>

            </div>

            <div class="demo-body">
                <div class="option-title">Header Colors</div>
                <ul id="demo-header-color" class="demo-color-list">
                    <li><span class="demo-white"></span></li>
                    <li><span class="demo-black"></span></li>
                    <li><span class="demo-midnightblue"></span></li>
                    <li><span class="demo-primary"></span></li>
                    <li><span class="demo-info"></span></li>
                    <li><span class="demo-alizarin"></span></li>
                    <li><span class="demo-grape"></span></li>
                    <li><span class="demo-violet"></span></li>                
                    <li><span class="demo-indigo"></span></li> 
                </ul>
            </div>

            <div class="demo-body">
                <div class="option-title">Sidebar Colors</div>
                <ul id="demo-sidebar-color" class="demo-color-list">
                    <li><span class="demo-white"></span></li>
                    <li><span class="demo-black"></span></li>
                    <li><span class="demo-midnightblue"></span></li>
                    <li><span class="demo-primary"></span></li>
                    <li><span class="demo-info"></span></li>
                    <li><span class="demo-alizarin"></span></li>
                    <li><span class="demo-grape"></span></li>
                    <li><span class="demo-violet"></span></li>                
                    <li><span class="demo-indigo"></span></li> 
                </ul>
            </div>

            <div class="demo-body hide" id="demo-boxes">
                <div class="option-title">Boxed Layout Options</div>
                <ul id="demo-boxed-bg" class="demo-color-list">
                    <li><span class="pattern-brickwall"></span></li>
                    <li><span class="pattern-dark-stripes"></span></li>
                    <li><span class="pattern-rockywall"></span></li>
                    <li><span class="pattern-subtle-carbon"></span></li>
                    <li><span class="pattern-tweed"></span></li>
                    <li><span class="pattern-vertical-cloth"></span></li>
                    <li><span class="pattern-grey_wash_wall"></span></li>
                    <li><span class="pattern-pw_maze_black"></span></li>
                    <li><span class="patther-wild_oliva"></span></li>
                    <li><span class="pattern-stressed_linen"></span></li>
                    <li><span class="pattern-sos"></span></li>
                </ul>
            </div>

        </div>
        <!-- /Switcher -->
        <!-- Load site level scripts -->

        <script src="assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
        <script src="assets/js/jqueryui-1.9.2.min.js"></script> 							<!-- Load jQueryUI -->
        <script src="assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->

        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script> 	<!-- Slimscroll for custom scrolls -->
        <script src="assets/plugins/sparklines/jquery.sparklines.min.js"></script>  		<!-- Sparkline -->
        <script src="assets/plugins/jstree/dist/jstree.min.js"></script>  				<!-- jsTree -->

        <script src="assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->
        <script src="assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> 		<!-- Swith/Toggle Button -->

        <script src="assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

        <script src="assets/plugins/iCheck/icheck.min.js"></script>     					<!-- iCheck -->

        <script src="assets/js/enquire.min.js"></script> 										<!-- Enquire for Responsiveness -->

        <script src="assets/plugins/bootbox/bootbox.js"></script>					<!-- BOOTBOX -->

        <script src="assets/js/application.js"></script>
        <script src="assets/demo/demo.js"></script>
        <script src="assets/demo/demo-switcher.js"></script>

        <script src="assets/plugins/simpleWeather/jquery.simpleWeather.min.js"></script> 

        <!-- End loading site level scripts -->

        <!-- Load page level scripts-->

        <script src="assets/plugins/form-daterangepicker/daterangepicker.js"></script>     	<!-- Date Range Picker -->
        <script src="assets/plugins/form-daterangepicker/moment.min.js"></script>             <!-- Moment.js for Date Range Picker -->

        <script src="assets/plugins/easypiechart/jquery.easypiechart.js"></script> 			<!-- EasyPieChart -->
        <script src="assets/plugins/powerwidgets/js/powerwidgets.js"></script> 				<!-- PowerWidgets -->
        <script src="assets/plugins/switchery/switchery.js"></script>     					<!-- Switchery -->

        <script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>   			<!-- FullCalendar -->

        <!-- Charts -->
        <script src="assets/plugins/charts-flot/jquery.flot.min.js"></script>             	<!-- Flot Main File -->
        <script src="assets/plugins/charts-flot/jquery.flot.stack.min.js"></script>       	<!-- Flot Stacked Charts Plugin -->
        <script src="assets/plugins/charts-flot/jquery.flot.orderBars.min.js"></script>   	<!-- Flot Ordered Bars Plugin-->
        <script src="assets/plugins/charts-flot/jquery.flot.resize.min.js"></script>          <!-- Flot Responsive -->
        <script src="assets/plugins/charts-flot/jquery.flot.tooltip.min.js"></script> 		<!-- Flot Tooltips -->

        <!-- Maps -->
        <script src="assets/plugins/jQuery-Mapael/js/raphael/raphael-min.js"></script>        <!-- Load Raphael as Dependency -->
        <script src="assets/plugins/jQuery-Mapael/js/jquery.mapael.js"></script>              <!-- jQuery Mapael -->
        <!-- <script src="assets/plugins/jQuery-mousewheel/jquery.mousewheel.min.js"></script> -->     <!-- Mousewheel Support in zoomed-in maps -->
        <script src="assets/plugins/jQuery-Mapael/js/maps/world_countries.js"></script>       <!-- Vector Data of World Countries -->


        <script src="assets/demo/demo-index.js"></script> 									<!-- Initialize scripts for this page-->

        <!-- End loading page level scripts-->

    </body>

    <!-- Mirrored from avalon.redteamux.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Oct 2014 07:42:50 GMT -->
</html>