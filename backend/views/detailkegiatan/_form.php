<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Detailkegiatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detailkegiatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'iddetailkeg')->textInput() ?>

    <?= $form->field($model, 'idkegiatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detailkegiatan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'statusdetailkeg')->textInput() ?>

    <?= $form->field($model, 'tglkegiatan')->textInput() ?>

    <?= $form->field($model, 'tempatkegiatan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'penyelenggara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'validasi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
