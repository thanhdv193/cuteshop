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

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [

                'attribute' => 'product_id',
                'contentOptions' => ['style' => 'width:15px;'],
            ],
            [
                'attribute' => 'image',
                'format' => 'html',
                'label' => 'Ảnh đại diện',
                'value' => function ($model)
                {
                    $array = app\models\Image::find()->where(['object_id' => $model['product_id']])->one();

                    return Html::img('@web/' . $array['image_path'] . '' . $array['filename'], ['width' => '100px', 'height' => '70px']);
                },
                    ],
                    'name',
                    'product_category_id',
                    'product_group_id',
                    'product_node_id',
                    [
                        'attribute' => 'content',
                        'format' => 'html',
                    ],
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
                    ['class' => 'yii\grid\ActionColumn',
                        'header' => 'Thao tác',
                        'headerOptions' => ['width' => '80', 'text-align' => 'center'],
                    ],
                ],
            ]);
            ?>

</div>
