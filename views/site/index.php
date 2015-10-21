<?php

use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<link href="<?= Url::base('http') ?>/css/popup.css" rel="stylesheet">
<div class="container">
    <div class="row text-center">
        <h3>The Basic Modal</h3>
        <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#basicModal">Click to open Modal</a>
    </div>
    <hr>  
    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content messagepop">                
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <form id="login-form" class="form-horizontal" action="/index.php/site/login" method="post">
                        <div class="form-group field-loginform-username required">
                            <div class="col-lg-12" id=" messages_register">
                                <p style="color:red;" id="login-error" class="help-block help-block-error"></p>
                            </div>
                        </div>

                        <input type="hidden" name="_csrf" value="X0ljdlFmMUosEVE4NgFcOSUGIDsSEWF/KQVVHRwPXSMRGgsDJAtWHA==">
                        <div class="form-group field-loginform-username required">
                            <label class="col-lg-2 control-label" for="loginform-username">Username</label>
                            <div class="col-lg-9"><input type="text" id="loginform-username" class="form-control" name="username" placeholder="User name"></div>
                            <div class="col-lg-12"><p class="help-block help-block-error"></p></div>
                        </div>
                        <div class="form-group field-loginform-password required">
                            <label class="col-lg-2 control-label" for="loginform-password">Password</label>
                            <div class="col-lg-9"><input type="password" id="loginform-password" class="form-control" name="password" placeholder="Password"></div>
                            <div class="col-lg-12"><p class="help-block help-block-error"></p></div>
                        </div>

                        <div class="form-group field-loginform-rememberme">
                            <div class="checkbox">
                                <input type="hidden" name="LoginForm[rememberMe]" value="0">
                                <input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked="">
                                <span style="padding: 0px 0px 0px 16px;">Duy trì đăng nhập</span>                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-1 col-lg-11">
                                <button type="submit" id="login-button" class="btn btn-primary" name="login-button">Login</button>       
                                <button type="button"  class="close_popup btn btn-danger">Cance</button>
                            </div>
                        </div>

                    </form>                

            </div>
        </div>
    </div>    
</div>

