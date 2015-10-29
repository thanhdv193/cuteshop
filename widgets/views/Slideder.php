<?php

use yii\helpers;
use app\widgets\TrendWidget;
?>

<div id="home-slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 slider-left"></div>
            <div class="col-sm-9 header-top-right">
                <div class="header-top-right-wapper">
                    <div class="homeslider">
                        <div class="content-slide">
                            <ul id="slide-background">
                                <?php foreach($data as $value) : ?>
                                    <li data-background="#FFFFFF"><img alt="Funky roots" src="/<?php echo $value['image']['image_path']?><?php echo $value['image']['filename']?>" title="Funky roots" /></li>
                                <?php endforeach; ?>
<!--                                <li data-background="#FFFFFF"><img alt="Funky roots" src="/upload/banner/1445507895_tao-cover-anh-bia-facebook-vofurm.vn.jpg" title="Funky roots" /></li>
                                <li data-background="#FFFFFF"><img alt="Funky roots" src="/upload/banner/1445585973_anh-bia-buon-fa-co-don-19.jpg" title="Funky roots" /></li>
                                <li data-background="#FFFFFF"><img  alt="Funky roots" src="/upload/banner/1445585987_anh-bia-facebook-37265923_5__84273_std.jpg" title="Funky roots" /></li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="header-banner">
                        <!-- Tremd -->
                         <?= TrendWidget::widget() ?>
                        <!-- End Trend -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>