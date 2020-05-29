<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Jeniskegiatan */

$this->title = 'Update Jeniskegiatan: ' . $model->idjeniskegiatan;
$this->params['breadcrumbs'][] = ['label' => 'Jeniskegiatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idjeniskegiatan, 'url' => ['view', 'id' => $model->idjeniskegiatan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jeniskegiatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
