<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAssetBackend;
use app\widgets\BackendMenuWidget;
use yii\helpers\Url;

AppAssetBackend::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>

<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="infobar-offcanvas">
        <?php $this->beginBody() ?>
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
                    <!--                    <li class="dropdown">
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
                                        </li>-->
                    <!--                    <li class="dropdown" id="widget-classicmenu">
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
                                        </li>-->
                    <!--                    <li><a href="frontend/index.html" target="_blank">Frontend</a></li>
                                        <li><a href="landing/index.html" target="_blank">Landing Page</a></li>-->
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
                                    <img class="msg-avatar" src="" alt="avatar" />
                                    <div class="msg-content">
                                        <span class="name">Steven Shipe</span>
                                        <span class="msg">Nonummy nibh epismod lorem ipsum</span>
                                    </div>
                                    <span class="msg-time">30s</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="msg-avatar" src="" alt="avatar" />
                                    <div class="msg-content">
                                        <span class="name">Roxann Hollingworth <i class="fa fa-paperclip attachment"></i></span>
                                        <span class="msg">Lorem ipsum dolor sit amet consectetur adipisicing elit</span>
                                    </div>
                                    <span class="msg-time">5m</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="msg-avatar" src="" alt="avatar" />
                                    <div class="msg-content">
                                        <span class="name">Diamond Harlands</span>
                                        <span class="msg">:)</span>
                                    </div>
                                    <span class="msg-time">3h</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="msg-avatar" src="" alt="avatar" />
                                    <div class="msg-content">
                                        <span class="name">Michael Serio <i class="fa fa-paperclip attachment"></i></span>
                                        <span class="msg">Sed distinctio dolores fuga molestiae modi?</span>
                                    </div>
                                    <span class="msg-time">12h</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="msg-avatar" src="" alt="avatar" />
                                    <div class="msg-content">
                                        <span class="name">Matt Jones</span>
                                        <span class="msg">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et mole</span>
                                    </div>
                                    <span class="msg-time">2d</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="msg-avatar" src="" alt="avatar" />
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
                        <span class="hidden-xs"><?php if(Yii::$app->user->isGuest == false) { ?>
                                               <?php echo Yii::$app->user->identity->username ?>
                                           <?php } ?></span>
                        <img class="img-circle" src="/upload/User/Avatar/<?php if(Yii::$app->user->isGuest == false) { ?><?php echo Yii::$app->user->identity->Avatar ?><?php } ?>" alt="Dangerfield" />

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
                                            <a href="#"><img src="/upload/User/Avatar/<?php if(Yii::$app->user->isGuest == false) { ?><?php echo Yii::$app->user->identity->Avatar ?><?php } ?>" class="avatar"></a>
                                        </div>
                                        <div class="tabular-cell welcome-options">
                                            <span class="welcome-text">Xin chào </span>
                                            <a href="#" class="name"><?php if(Yii::$app->user->isGuest == false) { ?>
                                               <?php echo Yii::$app->user->identity->username ?>
                                           <?php } ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--menu -->
                          <?= BackendMenuWidget::widget() ?>
                            <!--end menu -->
                            <!--                            <div class="widget stay-on-collapse" id="widget-sidebar">
                                                            <span class="widget-heading">Explore</span>
                                                            <nav role="navigation" class="widget-body">
                                                                <ul class="acc-menu">
                                                                    <li><a href="index-2.html"><i class="fa fa-hom"></i><span>Dashboard</span><span class="badge badge-dark">1</span></a></li>
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
                                                        </div>-->
                                                       
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


                                <?= $content ?>


                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
                    <footer role="contentinfo">
                        <div class="clearfix">
                            <ul class="list-unstyled list-inline pull-left">
                                <li><h6 style="margin: 0;"> &copy; 2015 </h6></li>
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
                    <h2>System</h2>
                </div>

                <div id="widgetarea">


                    <div class="widget" id="widget-sparkline">
                        <div class="widget-heading">
                            <a href="javascript:;" data-toggle="collapse" data-target="#sparklinestats"><h4>Permissions</h4></a>
                        </div>
                        <div class="widget-body collapse in" id="sparklinestats">
                            <ul class="menu_permissions">
                                <li class="permissions">
                                    <a href="<?php Url::base('http') ?>/admin/assignment">Permissions</a>
                                </li>
                            </ul>
<!--                            <ul class="sparklinestats">
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

                            </ul>-->
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



        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
