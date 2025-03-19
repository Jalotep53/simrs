<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\JnsPerawatanRadiologi $model */

$this->title = $model->kd_jenis_prw;
$this->params['breadcrumbs'][] = ['label' => 'Jns Perawatan Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jns-perawatan-radiologi-view">

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
            'bagian_rs',
            'bhp',
            'tarif_perujuk',
            'tarif_tindakan_dokter',
            'tarif_tindakan_petugas',
            'kso',
            'menejemen',
            'total_byr',
            'kd_pj',
            'status',
            'kelas',
        ],
    ]) ?>

</div>
