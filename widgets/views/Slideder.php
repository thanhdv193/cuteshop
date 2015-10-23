<?php

use yii\helpers;
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
                        <div class="trending">
                            <h2 class="trending-title">Xu hướng</h2>
                            <div class="trending-product owl-carousel nav-center" data-items="1" data-dots="false" data-nav="true" data-loop="true">
                                <ul>
                                    <li>
                                        <div class="product-container">
                                            <div class="product-image">
                                                <a href="#"><img src="/images/product/p1.jpg" alt="Product"></a>
                                            </div>
                                            <div class="product-meta">
                                                <h5 class="product-name">
                                                    <a href="#">Super Bag</a>
                                                </h5>
                                                <div class="product-price">
                                                    <span class="price">$38,95</span>
                                                    <span class="price-old">$52,00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-container">
                                            <div class="product-image">
                                                <a href="#"><img src="/images/product/p2.jpg" alt="Product"></a>
                                            </div>
                                            <div class="product-meta">
                                                <h5 class="product-name">
                                                    <a href="#">Kute Yellow Bag</a>
                                                </h5>
                                                <div class="product-price">
                                                    <span class="price">$38,95</span>
                                                    <span class="price-old">$52,00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <div class="product-container">
                                            <div class="product-image">
                                                <a href="#"><img src="/images/product/p41.jpg" alt="Product"></a>
                                            </div>
                                            <div class="product-meta">
                                                <h5 class="product-name">
                                                    <a href="#">Super Bag</a>
                                                </h5>
                                                <div class="product-price">
                                                    <span class="price">$38,95</span>
                                                    <span class="price-old">$52,00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-container">
                                            <div class="product-image">
                                                <a href="#"><img src="/images/product/p42.jpg" alt="Product"></a>
                                            </div>
                                            <div class="product-meta">
                                                <h5 class="product-name">
                                                    <a href="#">Kute Yellow Bag</a>
                                                </h5>
                                                <div class="product-price">
                                                    <span class="price">$38,95</span>
                                                    <span class="price-old">$52,00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>