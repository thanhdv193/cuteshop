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

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'username') ?>
    <?php //echo $form->field($model, 'email')  ?>

    <?php
    // $form->field($model, 'username')->widget(CKEditor::className(),[
//      'editorOptions' => [
//      'preset' => 'full',
//      'inline' => false, //по умолчанию false
//      ],
//      ]); 
    ?> 


    <?=
    $form->field($model, 'email')->widget(KCFinderInputWidget::className(), [
        'multiple' => true,
    ]);
    ?>
    <?php
    echo FileInput::widget([
        'name' => 'email',
        'options' => [
            'multiple' => true
        ],
        'pluginOptions' => [
            'uploadUrl' => Url::to(['/site/file-upload']),
            'uploadExtraData' => [
                'album_id' => 20,
                'cat_id' => 'Nature'
            ],
            'maxFileCount' => 10
        ]
    ]);
    ?>
    <?= $form->field($model, 'password_hash')->passwordInput() ?>
    <?= $form->field($model, 'password_repeat')->passwordInput() ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
