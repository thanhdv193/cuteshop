<?php

use yii\helpers;
?>
<div class="widget stay-on-collapse" id="widget-sidebar">
    <span class="widget-heading">Explore</span>
    <nav role="navigation" class="widget-body">
        <ul class="acc-menu">
            <li><a href="index-2.html"><i class="fa fa-hom"></i><span>Dashboard</span><span class="badge badge-dark">1</span></a></li>
            <?php foreach ($menu as $key => $menu): ?>
            <li><a href="javascript:;"><i class="fa fa-columns"></i><span><?php echo $menu['name'] ?></span><span class="badge badge-dark">23</span></a>
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
            <?php endforeach; ?>
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