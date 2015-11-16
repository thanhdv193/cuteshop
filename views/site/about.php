<?php

use yii\helpers\Html;
use yii\helpers\Url;
use app\widgets\ProductBoxOneWidget;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= ProductBoxOneWidget::widget() ?>
