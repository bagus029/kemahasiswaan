<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\KegiatanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kegiatan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idkegiatan') ?>

    <?= $form->field($model, 'idjeniskegiatan') ?>

    <?= $form->field($model, 'namakegiatan') ?>

    <?= $form->field($model, 'poinkegiatan') ?>

    <?= $form->field($model, 'statuskegiatan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
