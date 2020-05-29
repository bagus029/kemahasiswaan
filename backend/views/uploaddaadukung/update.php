<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Uploaddatadukung */

$this->title = 'Update Uploaddatadukung: ' . $model->iddatadukung;
$this->params['breadcrumbs'][] = ['label' => 'Uploaddatadukungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->iddatadukung, 'url' => ['view', 'id' => $model->iddatadukung]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="uploaddatadukung-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
