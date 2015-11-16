<?php

use yii\helpers;
use app\components\helpers\SystemHelper;
use app\components\helpers\HelperLink;
?>

<div class="container">
    <div class="box-product-head">
        <span class="box-title">NEW ARRIVALS IN</span>
        <ul class="box-tabs nav-tab">
            <li><a data-toggle="tab" href="#tab-2">Tất cả</a></li>
            <li class="active"><a data-toggle="tab" href="#tab-1">Áo sơ mi</a></li>
            <li><a data-toggle="tab" href="#tab-1">Áo khoác</a></li>
<!--            <li><a data-toggle="tab" href="#tab-2">SHOES</a></li>
            <li><a data-toggle="tab" href="#tab-1">GLASSES</a></li>-->
        </ul>
    </div>
    <div class="box-product-content">
        <div class="box-product-adv">
            <ul class="owl-carousel nav-center" data-items="1" data-dots="false" data-autoplay="true" data-loop="true" data-nav="true">
                <li><a href="#"><img src="/images/product/adv1.jpg" alt="adv"></a></li>
                <li><a href="#"><img src="/images/product/adv1.jpg" alt="adv"></a></li>
            </ul>
        </div>
        <div class="box-product-list">
            <div class="tab-container">
                <div id="tab-1" class="tab-panel active">
                    <ul class="product-list owl-carousel nav-center" data-dots="false" data-loop="true" data-nav = "true" data-margin = "10" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                       <!-- foreach -->
                        <li>
                            <div class="left-block">
                                <a href="#"><img class="img-responsive" alt="product" src="/images/product/p13.jpg" /></a>
                                <div class="quick-view">
                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                    <a title="Add to compare" class="compare" href="#"></a>
                                    <a title="Quick view" class="search" href="#"></a>
                                </div>
                                <div class="add-to-cart">
                                    <a title="Add to Cart" href="#">Mua hàng</a>
                                </div>
                            </div>
                            <div class="right-block">
                                <h5 class="product-name"><a href="#">Luxury Perfume</a></h5>
                                <div class="content_price">
                                    <span class="price product-price">$38,95</span>
                                    <span class="price old-price">$52,00</span>
                                </div>
                            </div>
                            <div class="price-percent-reduction2">
                                -30% OFF
                            </div>
                        </li>
                      <!-- end foreach --> 
                    </ul>
                </div>
                <div id="tab-2" class="tab-panel">
                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "10" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                        <!-- foreach -->
                        <li>
                            <div class="left-block">
                                <a href="#"><img class="img-responsive" alt="product" src="/images/product/p17.jpg" /></a>
                                <div class="quick-view">
                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                    <a title="Add to compare" class="compare" href="#"></a>
                                    <a title="Quick view" class="search" href="#"></a>
                                </div>
                                <div class="add-to-cart">
                                    <a title="Add to Cart" href="#">Mua hàng</a>
                                </div>
                            </div>
                            <div class="right-block">
                                <h5 class="product-name"><a href="#">Luxury Perfume</a></h5>
                                <div class="content_price">
                                    <span class="price product-price">$38,95</span>
                                    <span class="price old-price">$52,00</span>
                                </div>
                            </div>
                        </li>
                       <!-- end foreach -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>