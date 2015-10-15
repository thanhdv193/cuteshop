<?php

use kartik\file\FileInput;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use iutbay\yii2kcfinder\KCFinderInputWidget;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php
    $form = ActiveForm::begin([
                'options' => ['enctype' => 'multipart/form-data'], 'id' => 'form_user_create'
    ]);
    ?>
    <?= $form->field($model, 'username')->textInput(['name' => 'username', 'id' => 'username'])->label('Tên tài khoản') ?>    
    <?php
    ?>
    <?= $form->field($model, 'email')->textInput(['name' => 'email', 'id' => 'email'])  ?>    
    <?php
// $form->field($model, 'username')->widget(CKEditor::className(),[
//      'editorOptions' => [
//      'preset' => 'full',
//      'inline' => false, //по умолчанию false
//      ],
//      ]); 
    ?> 
    <?php
//    echo FileInput::widget([
//        'name' => 'email',
//        'options' => [
//            'multiple' => true
//        ],
//        'pluginOptions' => [
//            'uploadUrl' => Url::to(['/backend/user/up-load-image']),
//            'maxFileCount' => 1
//        ]
//    ]);
//    
    ?>
    <?php
    echo $form->field($model, 'Avatar')->widget(FileInput::classname(), [
        'pluginOptions' => [
            'allowedFileExtensions' => ['jpg', 'gif', 'png'],
            'showCaption' => false,
            'showRemove' => false,
            'showUpload' => false,
            'browseClass' => 'btn btn-primary btn-block btn-file-image',
            'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
            'browseLabel' => 'Chọn avatar'
        ],
        'options' => ['accept' => 'image/*'],
    ]);
    ?>
    <?= $form->field($model, 'gender')->dropDownList(['nam' => 'Nam', 'Nu' => 'Nữ', 'bd' => 'Không xác định'])->label('Giới tính'); ?>
    <?= $form->field($model, 'password_hash')->passwordInput()->label('Mật khẩu') ?>
    <?= $form->field($model, 'password_repeat')->passwordInput()->label('Nhập lại mật khẩu') ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
