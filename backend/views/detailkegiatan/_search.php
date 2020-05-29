<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DetailkegiatanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detailkegiatan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'iddetailkeg') ?>

    <?= $form->field($model, 'idkegiatan') ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'detailkegiatan') ?>

    <?= $form->field($model, 'statusdetailkeg') ?>

    <?php // echo $form->field($model, 'tglkegiatan') ?>

    <?php // echo $form->field($model, 'tempatkegiatan') ?>

    <?php // echo $form->field($model, 'penyelenggara') ?>

    <?php // echo $form->field($model, 'validasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
