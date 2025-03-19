<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanRehabMedik $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Medis Ralan Rehab Mediks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-medis-ralan-rehab-medik-view">

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
            'alergi',
            'kesadaran',
            'nyeri',
            'skala_nyeri',
            'td',
            'nadi',
            'suhu',
            'rr',
            'bb',
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
            'resiko_jatuh',
            'resiko_nutrisional',
            'kebutuhan_fungsional',
            'diagnosa_medis',
            'diagnosa_fungsi',
            'penunjang_lain',
            'fisio',
            'okupasi',
            'wicara',
            'akupuntur',
            'tatalain',
            'frekuensi_terapi',
            'fisioterapi',
            'terapi_okupasi',
            'terapi_wicara',
            'terapi_akupuntur',
            'terapi_lainnya',
            'edukasi',
        ],
    ]) ?>

</div>
