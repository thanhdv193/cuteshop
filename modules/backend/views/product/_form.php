<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\ProductGroup;
use yii\helpers\ArrayHelper;
use kartik\file\FileInput;
use yii\helpers\Url;
use mihaildev\ckeditor\CKEditor;
use iutbay\yii2kcfinder\KCFinderInputWidget;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'accept-charset' => "UTF-8"], 'id' => 'form_product_create']
    );
    ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true,'name'=>'name'])->label('Tên sản phẩm') ?>
    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
        'editorOptions' => [
            'preset' => 'full', 
            'inline' => false, 
            'filebrowserUploadUrl'=>Yii::$app->getUrlManager()->createUrl('dashboard/test')
        ],
    ])->label('Nội dung');
    ?> 
    <?= $form->field($model, 'quantity_current')->textInput(['maxlength' => true,'name'=>'quantity_current'])->label('Số lượng') ?>
    <?= $form->field($model, 'product_category_id')->textInput(['maxlength' => true,'name'=>'product_category_id']) ?>
    <?= $form->field($model, 'product_node_id')->textInput(['maxlength' => true,'name'=>'product_node_id']) ?>
    <?php
    $productGroup = ProductGroup::find()->where(['active' => 1])->all();
    $listData = ArrayHelper::map($productGroup, 'product_group_id', 'name');
    echo $form->field($model, 'product_group_id')->dropDownList(
            $listData, ['prompt' => 'Select...', 'name' => 'product_group_id'])->label('Nhóm sản phẩm');
    ?>
    <?php
    echo FileInput::widget([
        'name' => 'image_id',
        'options' => [
            'multiple' => true
        ],
        'pluginOptions' => [
            'uploadUrl' => Url::to(['/backend/product/up-load-image']),
            'maxFileCount' => 10
        ]
    ]);
    ?>
     <?= $form->field($model, 'price')->textInput(['name'=>'price'])->label('Giá mới') ?>

    <?= $form->field($model, 'old_price')->textInput(['name'=>'old_price'])->label('Giá cũ') ?>

    

    <?php //$form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'h1')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>
    

    

    <?php //$form->field($model, 'announce')->textarea(['rows' => 4]) ?>
    

    <?php //$form->field($model, 'sort_order')->textInput()->label('Thứ tự') ?>

    <?= $form->field($model, 'active')->dropDownList(['1' => 'Hiển thị', '0' => 'Ẩn'], ['class' => 'txt_gender form-control', 'name' => 'active'])->label('Trạng thái'); ?>
      
    <div class="form-group">
<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
