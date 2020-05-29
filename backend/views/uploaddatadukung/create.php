<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Uploaddatadukung */

$this->title = 'Create Uploaddatadukung';
$this->params['breadcrumbs'][] = ['label' => 'Uploaddatadukungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uploaddatadukung-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
