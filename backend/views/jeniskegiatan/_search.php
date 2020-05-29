<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\JeniskegiatanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jeniskegiatan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idjeniskegiatan') ?>

    <?= $form->field($model, 'jeniskegiatan') ?>

    <?= $form->field($model, 'statusjeniskegiatan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
