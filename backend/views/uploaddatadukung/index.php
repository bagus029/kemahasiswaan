<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UploaddatadukungSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Uploaddatadukungs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uploaddatadukung-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Uploaddatadukung', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'iddatadukung',
            'iddetailkeg',
            'namadatadukung',
            'filedatadukung',
            'tanggalupload',
            //'tanggalupdate',
            //'statusdatadukung',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
