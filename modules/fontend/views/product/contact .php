<?php

use yii\helpers;
use app\widgets\HotDealWidget;
?>
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Liên hệ</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">Liên hệ với chúng tôi.</span>
        </h2>
        <!-- ../page heading-->
        <div id="contact" class="page-content page-contact">
            <div id="message-box-conact"></div>
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="page-subheading">CONTACT FORM</h3>
                    <div class="contact-form-box">
                        <div class="form-selector">
                            <label>Subject Heading</label>
                            <select class="form-control input-sm" id="subject">
                                <option value="Customer service">Dịch vụ khách hàng</option>
                                <option value="Webmaster">Chất lượng sản phẩm</option>
                            </select>
                        </div>
                        <div class="form-selector">
                            <label>Địa chỉ email</label>
                            <input type="text" class="form-control input-sm" id="email" />
                        </div>
                        <div class="form-selector">
                            <label>Order reference</label>
                            <input type="text" class="form-control input-sm" id="order_reference" />
                        </div>
                        <div class="form-selector">
                            <label>Tin nhắn</label>
                            <textarea class="form-control input-sm" rows="10" id="message"></textarea>
                        </div>
                        <div class="form-selector">
                            <button id="btn-send-contact" class="btn">Send</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6" id="contact_form_map">
                    <h3 class="page-subheading">Thông tin</h3>
                    <p>Lorem ipsum dolor sit amet onsectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor dapibus eget. Mauris tincidunt aliquam lectus sed vestibulum. Vestibulum bibendum suscipit mattis.</p>
                    <br/>
                    <ul>
                        <li>Praesent nec tincidunt turpis.</li>
                        <li>Aliquam et nisi risus.&nbsp;Cras ut varius ante.</li>
                        <li>Ut congue gravida dolor, vitae viverra dolor.</li>
                    </ul>
                    <br/>
                    <ul class="store_info">
                        <li><i class="fa fa-home"></i>Khu 3, Xuân Lộc, Thanh Thủy, Phú Thọ</li>
                        <li><i class="fa fa-phone"></i><span>+ 0210.3688.872</span></li>
                        <li><i class="fa fa-phone"></i><span>+ 01647.519.202</span></li>
                        <li><i class="fa fa-envelope"></i>Email: <span><a href="mailto:%73%75%70%70%6f%72%74@%6b%75%74%65%74%68%65%6d%65.%63%6f%6d">thanhdv193@gmail.com</a></span></li>
                    </ul>                
                    </div>
            </div>
        </div>
    </div>
</div>