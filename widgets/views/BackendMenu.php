<?php

use yii\helpers;
?>

<div class="widget stay-on-collapse" id="widget-sidebar">
    <span class="widget-heading">Explore</span>
    <nav role="navigation" class="widget-body">
        <ul class="acc-menu">
            <li><a href="index-2.html"><i class="fa fa-hom"></i><span>Dashboard</span><span class="badge badge-dark">1</span></a></li>
            <?php foreach ($menu as $key => $value): ?>
            <li><a href="javascript:;"><i class="fa fa-columns"></i><span><?php echo $value['name'] ?></span><span class="badge badge-dark">23</span></a>
                <ul class="acc-menu">
                    <?php foreach ($value as $subMenu): ?>      
                   
                   <!--      <li><a href="layout-grids.html"></a></li>  -->
                    <?php endforeach; ?>
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