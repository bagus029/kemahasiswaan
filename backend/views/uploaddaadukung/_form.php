<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Uploaddatadukung */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uploaddatadukung-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'iddatadukung')->textInput() ?>

    <?= $form->field($model, 'iddetailkeg')->textInput() ?>

    <?= $form->field($model, 'namadatadukung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'filedatadukung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggalupload')->textInput() ?>

    <?= $form->field($model, 'tanggalupdate')->textInput() ?>

    <?= $form->field($model, 'statusdatadukung')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
