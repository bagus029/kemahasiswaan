<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Jeniskegiatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jeniskegiatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idjeniskegiatan')->textInput() ?>

    <?= $form->field($model, 'jeniskegiatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'statusjeniskegiatan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
