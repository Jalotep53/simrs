<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanTht $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Medis Ralan Thts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-medis-ralan-tht-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat], [
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
            'tanggal',
            'kd_dokter',
            'anamnesis',
            'hubungan',
            'keluhan_utama',
            'rps',
            'rpd',
            'rpo',
            'alergi',
            'td',
            'nadi',
            'rr',
            'suhu',
            'bb',
            'tb',
            'nyeri',
            'status_nutrisi',
            'kondisi:ntext',
            'ket_lokalis:ntext',
            'lab:ntext',
            'rad:ntext',
            'tes_pendengaran:ntext',
            'penunjang:ntext',
            'diagnosis',
            'diagnosisbanding',
            'permasalahan:ntext',
            'terapi:ntext',
            'tindakan:ntext',
            'tatalaksana:ntext',
            'edukasi',
        ],
    ]) ?>

</div>
