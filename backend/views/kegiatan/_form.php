<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Kegiatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kegiatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idkegiatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idjeniskegiatan')->textInput() ?>

    <?= $form->field($model, 'namakegiatan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'poinkegiatan')->textInput() ?>

    <?= $form->field($model, 'statuskegiatan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
