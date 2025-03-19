<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PeriksaRadiologi $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Periksa Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="periksa-radiologi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam], [
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
            'no_rawat',
            'nip',
            'kd_jenis_prw',
            'tgl_periksa',
            'jam',
            'dokter_perujuk',
            'bagian_rs',
            'bhp',
            'tarif_perujuk',
            'tarif_tindakan_dokter',
            'tarif_tindakan_petugas',
            'kso',
            'menejemen',
            'biaya',
            'kd_dokter',
            'status',
            'proyeksi',
            'kV',
            'mAS',
            'FFD',
            'BSF',
            'inak',
            'jml_penyinaran',
            'dosis',
        ],
    ]) ?>

</div>
