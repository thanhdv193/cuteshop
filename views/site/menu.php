<?php

use yii\helpers\Html;
use yii\helpers\Url;
use app\components\helpers\Menu;


/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="menu">
    
    <?php echo Menu::menu($data); ?>
</div> 
