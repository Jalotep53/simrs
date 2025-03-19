<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanNeurologi $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Medis Ralan Neurologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-medis-ralan-neurologi-view">

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
            'kesadaran',
            'status',
            'td',
            'nadi',
            'suhu',
            'rr',
            'bb',
            'nyeri',
            'gcs',
            'kepala',
            'keterangan_kepala',
            'thoraks',
            'keterangan_thoraks',
            'abdomen',
            'keterangan_abdomen',
            'ekstremitas',
            'keterangan_ekstremitas',
            'columna',
            'keterangan_columna',
            'muskulos',
            'keterangan_muskulos',
            'lainnya',
            'lab',
            'rad',
            'penunjanglain',
            'diagnosis',
            'diagnosis2',
            'permasalahan',
            'terapi',
            'tindakan',
            'edukasi',
        ],
    ]) ?>

</div>
