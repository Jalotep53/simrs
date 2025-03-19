<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPasienPenyakitMenular $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Pasien Penyakit Menulars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-pasien-penyakit-menular-view">

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
            'pasien_mengetahui_kondisi_penyakitnya',
            'penyakit_sama_serumah',
            'riwayat_kontak',
            'keterangan_riwayat_kontak',
            'transmisi_penularan_penyakit',
            'keterangan_transmisi_penularan_penyakit',
            'kebutuhan_ruang_rawat',
            'keluhan_yang_dirasakan_saat_ini',
            'riwayat_penyakit_keluarga',
            'riwayat_alergi',
            'riwayat_vaksinasi',
            'riwayat_pengobatan',
            'diagnosa_utama',
            'diagnosa_tambahan',
        ],
    ]) ?>

</div>
