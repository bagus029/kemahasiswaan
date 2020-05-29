<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DetailkegiatanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detailkegiatans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detailkegiatan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detailkegiatan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'iddetailkeg',
            'idkegiatan',
            'nim',
            'detailkegiatan:ntext',
            'statusdetailkeg',
            //'tglkegiatan',
            //'tempatkegiatan:ntext',
            //'penyelenggara',
            //'validasi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
