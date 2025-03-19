<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\BiayaHarian $model */

$this->title = $model->kd_kamar;
$this->params['breadcrumbs'][] = ['label' => 'Biaya Harians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="biaya-harian-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_kamar' => $model->kd_kamar, 'nama_biaya' => $model->nama_biaya], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_kamar' => $model->kd_kamar, 'nama_biaya' => $model->nama_biaya], [
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
            'kd_kamar',
            'nama_biaya',
            'besar_biaya',
            'jml',
        ],
    ]) ?>

</div>
