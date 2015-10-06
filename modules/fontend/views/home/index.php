<?php
use yii\helpers;
?>
<!-- Hot deals -->
<div class="hot-deals-row">
    <div class="container">
        <div class="hot-deals-box">
            <div class="row">
                <div class="" style="width:10%; float: left;">
                    <div class="hot-deals-tab">
                        <div class="hot-deals-title vertical-text">
                            <span>h</span>
                            <span>o</span>
                            <span>t</span>
                            <span class="yellow">d</span>
                            <span class="yellow">e</span>
                            <span class="yellow">a</span>
                            <span class="yellow">l</span>
                            <span class="yellow">s</span>
                        </div>
                        <div class="hot-deals-tab-box">
                            <ul class="nav-tab">
<!--                                <li class="active"><a data-toggle="tab" href="#hot-deal-1">UP TO 40% OFF</a></li>
                                <li><a data-toggle="tab" href="#hot-deal-2">UP TO 50% OFF</a></li>
                                <li><a data-toggle="tab" href="#hot-deal-1">UP TO 60% OFF</a></li>
                                <li><a data-toggle="tab" href="#hot-deal-2">UP TO 70% OFF</a></li>
                                <li><a data-toggle="tab" href="#hot-deal-1">UP TO 80% OFF</a></li>-->
                            </ul>
                            <di class="box-count-down">
                                <span class="countdown-lastest" data-y="2015" data-m="9" data-d="1" data-h="00" data-i="00" data-s="00"></span>
                            </di>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-8 hot-deals-tab-content-col" style="width: 90%">
                    <div class="hot-deals-tab-content tab-container">
                        <div id="hot-deal-1" class="tab-panel active">
                            <ul class="product-list owl-carousel nav-center" data-dots="false" data-loop="true" data-nav = "true" data-margin = "29" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                <li>
                                    <div class="left-block">
                                        <a href="#"><img class="img-responsive" alt="product" src="/images/p3.jpg" /></a>
                                        
                                    </div>
                                    <div class="price-percent-reduction2">
                                        -33% OFF
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
                                        <a href="#"><img class="img-responsive" alt="product" src="/images/p4.jpg" /></a>
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
                                        <a href="#"><img class="img-responsive" alt="product" src="/images/p5.jpg" /></a>
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
                                        <a href="#"><img class="img-responsive" alt="product" src="/images/p6.jpg" /></a>
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
                                        <a href="#"><img class="img-responsive" alt="product" src="/images/p7.jpg" /></a>
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
                        <div id="hot-deal-2" class="tab-panel">
                            <ul class="product-list owl-carousel nav-center" data-dots="false" data-loop="true" data-nav = "true" data-margin = "29" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                <li>
                                    <div class="left-block">
                                        <a href="#"><img class="img-responsive" alt="product" src="/images/p8.jpg" /></a>
                                        
                                    </div>
                                    <div class="price-percent-reduction2">
                                        -30% OFF
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
                                        <a href="#"><img class="img-responsive" alt="product" src="assets/data/option3/p9.jpg" /></a>
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
                                        <a href="#"><img class="img-responsive" alt="product" src="assets/data/option3/p10.jpg" /></a>
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
                                        <a href="#"><img class="img-responsive" alt="product" src="assets/data/option3/p11.jpg" /></a>
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
                                        <a href="#"><img class="img-responsive" alt="product" src="assets/data/option3/p12.jpg" /></a>
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
</div>
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
                                    <a href="#"><img class="img-responsive" alt="product" src="/images/product/p14.jpg" /></a>
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
                                    <a href="#"><img class="img-responsive" alt="product" src="/images/product/p15.jpg" /></a>
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
                                    <a href="#"><img class="img-responsive" alt="product" src="/images/product/p16.jpg" /></a>
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
                                    <a href="#"><img class="img-responsive" alt="product" src="/images/product/p17.jpg" /></a>
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
                                    <a href="#"><img class="img-responsive" alt="product" src="/images/product/p18.jpg" /></a>
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
                                    <a href="#"><img class="img-responsive" alt="product" src="/images/product/p20.jpg" /></a>
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
                                    <a href="#"><img class="img-responsive" alt="product" src="/images/product/p21.jpg" /></a>
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
<!-- ./box product new arrivals -->