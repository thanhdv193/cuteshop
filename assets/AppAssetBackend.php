<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAssetBackend extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/layout/style.css',
        'css/lib/bootstrap/css/bootstrap.min.css',
        'css/layout/reset.css',
        'css/layout/option3.css',
        'css/layout/animate.css',
        'css/layout/responsive.css',
        'lib/jquery-ui/jquery-ui.css',
        'lib/owl.carousel/owl.carousel.css',
        'lib/jquery.bxslider/jquery.bxslider.css',
        'lib/select2/css/select2.min.css',
        'lib/font-awesome/css/font-awesome.min.css'
        
    ];
    public $js = [
        'js/main.js',
        'lib/bootstrap/js/bootstrap.min.js',
        'lib/select2/js/select2.min.js',        
        'js/jquery.actual.min.js',
        'lib/countdown/jquery.plugin.js',
        'lib/countdown/jquery.countdown.js',        
        'lib/owl.carousel/owl.carousel.min.js',
        'lib/jquery.bxslider/jquery.bxslider.min.js',
        'js/theme-script.js',
        
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
