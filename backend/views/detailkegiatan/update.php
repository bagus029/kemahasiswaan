<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Detailkegiatan */

$this->title = 'Update Detailkegiatan: ' . $model->iddetailkeg;
$this->params['breadcrumbs'][] = ['label' => 'Detailkegiatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->iddetailkeg, 'url' => ['view', 'id' => $model->iddetailkeg]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detailkegiatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
