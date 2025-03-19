<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanGawatDaruratPsikiatri $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Medis Ralan Gawat Darurat Psikiatris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-medis-ralan-gawat-darurat-psikiatri-view">

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
            'gejala_menyertai',
            'faktor_pencetus',
            'riwayat_penyakit_dahulu',
            'keterangan_riwayat_penyakit_dahulu',
            'riwayat_kehamilan',
            'riwayat_sosial',
            'keterangan_riwayat_sosial',
            'riwayat_pekerjaan',
            'keterangan_riwayat_pekerjaan',
            'riwayat_obat_diminum',
            'faktor_kepribadian_premorbid',
            'faktor_keturunan',
            'keterangan_faktor_keturunan',
            'faktor_organik',
            'keterangan_faktor_organik',
            'riwayat_alergi',
            'fisik_kesadaran',
            'fisik_td',
            'fisik_rr',
            'fisik_suhu',
            'fisik_nyeri',
            'fisik_nadi',
            'fisik_bb',
            'fisik_tb',
            'fisik_status_nutrisi',
            'fisik_gcs',
            'status_kelainan_kepala',
            'keterangan_status_kelainan_kepala',
            'status_kelainan_leher',
            'keterangan_status_kelainan_leher',
            'status_kelainan_dada',
            'keterangan_status_kelainan_dada',
            'status_kelainan_perut',
            'keterangan_status_kelainan_perut',
            'status_kelainan_anggota_gerak',
            'keterangan_status_kelainan_anggota_gerak',
            'status_lokalisata',
            'psikiatrik_kesan_umum',
            'psikiatrik_sikap_prilaku',
            'psikiatrik_kesadaran',
            'psikiatrik_orientasi',
            'psikiatrik_daya_ingat',
            'psikiatrik_persepsi',
            'psikiatrik_pikiran',
            'psikiatrik_insight',
            'laborat',
            'radiologi',
            'ekg',
            'diagnosis',
            'permasalahan',
            'instruksi_medis',
            'rencana_target',
            'pulang_dipulangkan',
            'keterangan_pulang_dipulangkan',
            'pulang_dirawat_diruang',
            'pulang_indikasi_ranap',
            'pulang_dirujuk_ke',
            'pulang_alasan_dirujuk',
            'pulang_paksa',
            'keterangan_pulang_paksa',
            'pulang_meninggal_igd',
            'pulang_penyebab_kematian',
            'fisik_pulang_kesadaran',
            'fisik_pulang_td',
            'fisik_pulang_nadi',
            'fisik_pulang_gcs',
            'fisik_pulang_suhu',
            'fisik_pulang_rr',
            'edukasi',
        ],
    ]) ?>

</div>
