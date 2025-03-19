<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanBedahMulut $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Medis Ralan Bedah Muluts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-medis-ralan-bedah-mulut-view">

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
            'rpk',
            'alergi',
            'keadaan',
            'kesadaran',
            'nyeri',
            'td',
            'nadi',
            'suhu',
            'rr',
            'bb',
            'tb',
            'status_nutrisi',
            'kulit',
            'keterangan_kulit',
            'kepala',
            'keterangan_kepala',
            'mata',
            'keterangan_mata',
            'leher',
            'keterangan_leher',
            'kelenjar',
            'keterangan_kelenjar',
            'dada',
            'keterangan_dada',
            'perut',
            'keterangan_perut',
            'ekstremitas',
            'keterangan_ekstremitas',
            'wajah',
            'intra',
            'gigigeligi',
            'lab',
            'rad',
            'penunjang',
            'diagnosis',
            'diagnosis2',
            'permasalahan',
            'terapi',
            'tindakan',
            'edukasi',
        ],
    ]) ?>

</div>
