<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Jeniskegiatan */

$this->title = 'Create Jeniskegiatan';
$this->params['breadcrumbs'][] = ['label' => 'Jeniskegiatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jeniskegiatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
