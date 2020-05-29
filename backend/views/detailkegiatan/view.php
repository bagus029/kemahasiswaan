<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Detailkegiatan */

$this->title = $model->iddetailkeg;
$this->params['breadcrumbs'][] = ['label' => 'Detailkegiatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="detailkegiatan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->iddetailkeg], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->iddetailkeg], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'iddetailkeg',
            'idkegiatan',
            'nim',
            'detailkegiatan:ntext',
            'statusdetailkeg',
            'tglkegiatan',
            'tempatkegiatan:ntext',
            'penyelenggara',
            'validasi',
        ],
    ]) ?>

</div>
