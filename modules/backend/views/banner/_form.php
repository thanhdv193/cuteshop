<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use app\models\ImageType;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Banner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banner-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'], 'id' => 'form_menu_create']); ?>
   
    <?php
    $imageType = ImageType::find()->all();
    $listData = ArrayHelper::map($imageType, 'id', 'object_name');
    echo $form->field($model, 'image_type_id')->dropDownList(
            $listData, ['prompt' => 'Select...','name'=>'image_type_id'])->label('Loại ảnh') ;
    ?>
    <?= $form->field($model, 'sort_order')->textInput(['name'=>'sort_order']) ?>   
    <?= $form->field($model, 'active')->dropDownList(['1' => 'Active', '0' => 'Không active'],['class'=>'txt_gender form-control','name'=>'active'])->label('Trạng thái'); ?>
    
    <?php
    echo $form->field($model, 'image_id')->widget(FileInput::classname(), [
        'pluginOptions' => [
            'allowedFileExtensions' => ['jpg', 'gif', 'png'],
            'showCaption' => false,
            'showRemove' => false,
            'showUpload' => FALSE,
            'browseClass' => 'btn btn-primary btn-block btn-file-image',
            'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
            'browseLabel' => 'Chọn banner'
        ],
        'options' => ['accept' => 'image/*'],
    ])->label('Ảnh ');
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
