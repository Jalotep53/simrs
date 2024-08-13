<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\JnsPerawatan $model */

$this->title = $model->kd_jenis_prw;
$this->params['breadcrumbs'][] = ['label' => 'Jns Perawatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jns-perawatan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_jenis_prw' => $model->kd_jenis_prw], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_jenis_prw' => $model->kd_jenis_prw], [
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
            'kd_jenis_prw',
            'nm_perawatan',
            'kd_kategori',
            'material',
            'bhp',
            'tarif_tindakandr',
            'tarif_tindakanpr',
            'kso',
            'menejemen',
            'total_byrdr',
            'total_byrpr',
            'total_byrdrpr',
            'kd_pj',
            'kd_poli',
            'status',
        ],
    ]) ?>

</div>
