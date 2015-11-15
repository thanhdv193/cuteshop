<?php

use yii\helpers;
use app\widgets\HotDealWidget;

$this->title = 'Trang mua bán online';
?>

<!-- Hot deals -->
<?= HotDealWidget::widget() ?>

<!-- ./Hot deals -->
<!-- box product new arrivals -->
<div class="box-products new-arrivals">
    <div class="container">
        <div class="box-product-head">
            <span class="box-title">NEW ARRIVALS IN</span>
            <ul class="box-tabs nav-tab">
                <li><a data-toggle="tab" href="#tab-2">All</a></li>
                <li class="active"><a data-toggle="tab" href="#tab-1">Women Fashion</a></li>
                <li><a data-toggle="tab" href="#tab-1">Bags</a></li>
                <li><a data-toggle="tab" href="#tab-2">SHOES</a></li>
                <li><a data-toggle="tab" href="#tab-1">GLASSES</a></li>
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
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="/images/product/p14.jpg" /></a>
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
                                    <h5 class="product-name"><a href="#">Blue Diamond Ring</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="/images/product/p15.jpg" /></a>
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
                                    <h5 class="product-name"><a href="#">Superior Bag</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="/images/product/p16.jpg" /></a>
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
                                    <h5 class="product-name"><a href="#">Luxury Lady</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                </div>
                            </li>
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
                                    <h5 class="product-name"><a href="#">Smart Phone</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="tab-2" class="tab-panel">
                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "10" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
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
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="/images/product/p18.jpg" /></a>
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
                                    <h5 class="product-name"><a href="#">Blue Diamond Ring</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                    </div>
                                </div>
                                <div class="price-percent-reduction2">
                                    -10% OFF
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="/images/product/p19.jpg" /></a>
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
                                    <h5 class="product-name"><a href="#">Superior Bag</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="/images/product/p20.jpg" /></a>
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
                                    <h5 class="product-name"><a href="#">Luxury Lady</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="/images/product/p21.jpg" /></a>
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
                                    <h5 class="product-name"><a href="#">Smart Phone</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
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
<!-- ./box product new arrivals -->
<!-- box product TOP SELLERS IN -->
<div class="box-products top-sellers">
    <div class="container">
        <div class="box-product-head">
            <span class="box-title">TOP SELLERS IN</span>
            <ul class="box-tabs nav-tab">
                <li><a data-toggle="tab" href="#tab-4">All</a></li>
                <li class="active"><a data-toggle="tab" href="#tab-3">Women Fashion</a></li>
                <li><a data-toggle="tab" href="#tab-3">Bags</a></li>
                <li><a data-toggle="tab" href="#tab-4">SHOES</a></li>
                <li><a data-toggle="tab" href="#tab-3">GLASSES</a></li>
            </ul>
        </div>
        <div class="box-product-content">
            <div class="box-product-adv">
                <ul class="owl-carousel nav-center" data-items="1" data-dots="false" data-autoplay="true" data-loop="true" data-nav="true">
                    <li><a href="#"><img src="" alt="adv"></a></li>
                    <li><a href="#"><img src="" alt="adv"></a></li>
                </ul>
            </div>
            <div class="box-product-list">
                <div class="tab-container">
                    <div id="tab-3" class="tab-panel active">
                        <ul class="product-list owl-carousel nav-center" data-dots="false" data-loop="true" data-nav = "true" data-margin = "10" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
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
                                <div class="price-percent-reduction2">
                                    -30% OFF
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
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
                                    <h5 class="product-name"><a href="#">Blue Diamond Ring</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
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
                                    <h5 class="product-name"><a href="#">Superior Bag</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
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
                                    <h5 class="product-name"><a href="#">Luxury Lady</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
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
                                    <h5 class="product-name"><a href="#">Smart Phone</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="tab-4" class="tab-panel">
                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "10" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
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
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
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
                                    <h5 class="product-name"><a href="#">Blue Diamond Ring</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
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
                                    <h5 class="product-name"><a href="#">Superior Bag</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
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
                                    <h5 class="product-name"><a href="#">Luxury Lady</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
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
                                    <h5 class="product-name"><a href="#">Smart Phone</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
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
<!-- ./box product TOP SELLERS IN -->

<!-- Banner -->
<div class="block-banner">
    <div class="container">
        <div class="block-banner-left">
            <div class="banner-opacity">
                <a href="#"><img src="" alt="Banner"></a>
            </div>
        </div>
        <div class="block-banner-right">
            <div class="banner-opacity">
                <a href="#"><img src="" alt="Banner"></a>
            </div>
        </div>
    </div>
</div>
<!-- ./Banner -->
<!-- box product special-products -->
<div class="box-products special-products">
    <div class="container">
        <div class="box-product-head">
            <span class="box-title">SPECIAL PRODUCTS</span>
            <ul class="box-tabs nav-tab">
                <li><a data-toggle="tab" href="#tab-6">All</a></li>
                <li class="active"><a data-toggle="tab" href="#tab-5">Women Fashion</a></li>
                <li><a data-toggle="tab" href="#tab-6">Bags</a></li>
                <li><a data-toggle="tab" href="#tab-5">SHOES</a></li>
                <li><a data-toggle="tab" href="#tab-6">GLASSES</a></li>
            </ul>
        </div>
        <div class="box-product-content">
            <div class="box-product-adv">
                <ul class="owl-carousel nav-center" data-items="1" data-dots="false" data-autoplay="true" data-loop="true" data-nav="true">
                    <li><a href="#"><img src="" alt="adv"></a></li>
                    <li><a href="#"><img src="" alt="adv"></a></li>
                </ul>
            </div>
            <div class="box-product-list">
                <div class="tab-container">
                    <div id="tab-5" class="tab-panel active">
                        <ul class="product-list owl-carousel nav-center" data-dots="false" data-loop="true" data-nav = "true" data-margin = "10" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
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
                                    -8% OFF
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
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
                                    <h5 class="product-name"><a href="#">Blue Diamond Ring</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
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
                                    <h5 class="product-name"><a href="#">Superior Bag</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
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
                                    <h5 class="product-name"><a href="#">Luxury Lady</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Smart Phone</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="tab-6" class="tab-panel">
                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "10" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
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
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Blue Diamond Ring</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Superior Bag</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Luxury Lady</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Smart Phone</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
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
<!-- ./box product SPECIAL PRODUCTS -->
<!-- box product RECOMMENDATION FOR YOU -->
<div class="box-products recommendation">
    <div class="container">
        <div class="box-product-head">
            <span class="box-title">RECOMMENDATION FOR YOU</span>
            <ul class="box-tabs nav-tab">
                <li><a data-toggle="tab" href="#tab-8">All</a></li>
                <li class="active"><a data-toggle="tab" href="#tab-7">Women Fashion</a></li>
                <li><a data-toggle="tab" href="#tab-8">Bags</a></li>
                <li><a data-toggle="tab" href="#tab-7">SHOES</a></li>
                <li><a data-toggle="tab" href="#tab-8">GLASSES</a></li>
            </ul>
        </div>
        <div class="box-product-content">
            <div class="box-product-adv">
                <ul class="owl-carousel nav-center" data-items="1" data-dots="false" data-autoplay="true" data-loop="true" data-nav="true">
                    <li><a href="#"><img src="" alt="adv"></a></li>
                    <li><a href="#"><img src="" alt="adv"></a></li>
                </ul>
            </div>
            <div class="box-product-list">
                <div class="tab-container">
                    <div id="tab-7" class="tab-panel active">
                        <ul class="product-list owl-carousel nav-center" data-dots="false" data-loop="true" data-nav = "true" data-margin = "10" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
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
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Blue Diamond Ring</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Superior Bag</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Luxury Lady</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Smart Phone</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="tab-8" class="tab-panel">
                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "10" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
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
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Blue Diamond Ring</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                    </div>
                                </div>
                                <div class="price-percent-reduction2">
                                    -30% OFF
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Superior Bag</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Luxury Lady</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Smart Phone</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
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
<!-- ./box product RECOMMENDATION FOR YOU -->
<div class="container">
    <!-- blog list -->
    <div class="blog-list">
        <h2 class="page-heading">
            <span class="page-heading-title">From the blog</span>
        </h2>
        <div class="blog-list-wapper">
            <ul class="owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                <li>
                    <div class="post-thumb image-hover2">
                        <a href="#"><img src="" alt="Blog"></a>
                    </div>
                    <div class="post-desc">
                        <h5 class="post-title">
                            <a href="#">Share the love with KuteShop</a>
                        </h5>
                        <div class="post-meta">
                            <span class="date">February 27, 2015</span>
                            <span class="comment">27 comment</span>
                        </div>
                        <div class="readmore">
                            <a href="#">Readmore</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="post-thumb image-hover2">
                        <a href="#"><img src="" alt="Blog"></a>
                    </div>
                    <div class="post-desc">
                        <h5 class="post-title">
                            <a href="#">Share the love with KuteShop</a>
                        </h5>
                        <div class="post-meta">
                            <span class="date">February 27, 2015</span>
                            <span class="comment">27 comment</span>
                        </div>
                        <div class="readmore">
                            <a href="#">Readmore</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="post-thumb image-hover2">
                        <a href="#"><img src="" alt="Blog"></a>
                    </div>
                    <div class="post-desc">
                        <h5 class="post-title">
                            <a href="#">Big sales this summer</a>
                        </h5>
                        <div class="post-meta">
                            <span class="date">February 27, 2015</span>
                            <span class="comment">27 comment</span>
                        </div>
                        <div class="readmore">
                            <a href="#">Readmore</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="post-thumb image-hover2">
                        <a href="#"><img src="ss" alt="Blog"></a>
                    </div>
                    <div class="post-desc">
                        <h5 class="post-title">
                            <a href="#">How to shop with us</a>
                        </h5>
                        <div class="post-meta">
                            <span class="date">February 27, 2015</span>
                            <span class="comment">27 comment</span>
                        </div>
                        <div class="readmore">
                            <a href="#">Readmore</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- ./blog list -->
</div>