<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SisruteRujukanKeluar $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Sisrute Rujukan Keluars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sisrute-rujukan-keluar-view">

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
            'no_rujuk',
            'no_rkm_medis',
            'nm_pasien',
            'no_ktp',
            'no_peserta',
            'jk',
            'tgl_lahir',
            'tmp_lahir',
            'alamat',
            'no_tlp',
            'jns_rujukan',
            'tgl_rujuk',
            'kd_faskes_tujuan',
            'nm_faskes_tujuan',
            'kd_alasan',
            'alasan_rujuk',
            'alasan_lainnya',
            'kd_diagnosa',
            'diagnosa_rujuk:ntext',
            'nik_dokter',
            'dokter_perujuk',
            'nik_petugas',
            'petugas_entry',
            'anamnesis_pemeriksaan:ntext',
            'kesadaran',
            'tekanan_darah',
            'nadi',
            'suhu',
            'respirasi',
            'keadaan_umum:ntext',
            'tingkat_nyeri',
            'alergi',
            'laboratorium:ntext',
            'radiologi:ntext',
            'terapitindakan:ntext',
        ],
    ]) ?>

</div>
