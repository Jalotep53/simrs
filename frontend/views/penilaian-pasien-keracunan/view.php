<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPasienKeracunan $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Pasien Keracunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-pasien-keracunan-view">

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
            'tempat_kejadian',
            'keterangan_tempat_kejadian',
            'keluhan',
            'riwayat_penyakit_sekarang',
            'hamil',
            'menyusui',
            'penyebab',
            'nama_bahan',
            'jumlah_bahan',
            'tipe_pemaparan',
            'keterangan_tipe_pemaparan',
            'tipe_kejadian',
            'bau_bahan',
            'keterangan_bau_bahan',
            'pupil',
            'keterangan_pupil',
            'kesadaran',
            'td',
            'nadi',
            'rr',
            'suhu',
            'spo',
            'urine',
            'pengobatan_sebelum_igd',
            'diagnosis',
            'pemeriksaan_penunjang',
            'penatalaksanaan_diberikan',
            'tindak_lanjut',
        ],
    ]) ?>

</div>
