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
class AppAsset extends AssetBundle
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
        'css/lib/jquery-ui/jquery-ui.css',
        'css/lib/owl.carousel/owl.carousel.css',
        'css/lib/jquery.bxslider/jquery.bxslider.css',
        'css/lib/select2/css/select2.min.css',
        'css/lib/font-awesome/css/font-awesome.min.css'
        
    ];
    public $js = [
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
