<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAssetBackend;
use app\widgets\HeaderWidget;
use app\widgets\SlidederWidget;
use app\widgets\FooterWidget;

AppAssetBackend::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="home option3">
        <?php $this->beginBody() ?>


        <?= $content ?>


        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
