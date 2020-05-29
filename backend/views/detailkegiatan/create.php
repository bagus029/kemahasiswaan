<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Detailkegiatan */

$this->title = 'Create Detailkegiatan';
$this->params['breadcrumbs'][] = ['label' => 'Detailkegiatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detailkegiatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
