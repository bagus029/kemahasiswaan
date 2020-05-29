<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UploaddatadukungSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uploaddatadukung-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'iddatadukung') ?>

    <?= $form->field($model, 'iddetailkeg') ?>

    <?= $form->field($model, 'namadatadukung') ?>

    <?= $form->field($model, 'filedatadukung') ?>

    <?= $form->field($model, 'tanggalupload') ?>

    <?php // echo $form->field($model, 'tanggalupdate') ?>

    <?php // echo $form->field($model, 'statusdatadukung') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
