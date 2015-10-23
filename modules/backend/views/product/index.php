<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'product_id',
            'product_category_id',
            'product_group_id',
            'product_node_id',
            'name',
            // 'title',
            // 'h1',
            // 'meta_description',
            // 'view_count',
            // 'content:ntext',
            // 'announce:ntext',
            // 'sort_order',
            // 'active',
            // 'price',
            // 'old_price',
            // 'quantity_current',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
