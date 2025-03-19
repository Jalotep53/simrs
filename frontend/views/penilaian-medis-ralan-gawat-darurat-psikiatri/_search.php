<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanGawatDaruratPsikiatriSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-medis-ralan-gawat-darurat-psikiatri-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'anamnesis') ?>

    <?= $form->field($model, 'hubungan') ?>

    <?php // echo $form->field($model, 'keluhan_utama') ?>

    <?php // echo $form->field($model, 'gejala_menyertai') ?>

    <?php // echo $form->field($model, 'faktor_pencetus') ?>

    <?php // echo $form->field($model, 'riwayat_penyakit_dahulu') ?>

    <?php // echo $form->field($model, 'keterangan_riwayat_penyakit_dahulu') ?>

    <?php // echo $form->field($model, 'riwayat_kehamilan') ?>

    <?php // echo $form->field($model, 'riwayat_sosial') ?>

    <?php // echo $form->field($model, 'keterangan_riwayat_sosial') ?>

    <?php // echo $form->field($model, 'riwayat_pekerjaan') ?>

    <?php // echo $form->field($model, 'keterangan_riwayat_pekerjaan') ?>

    <?php // echo $form->field($model, 'riwayat_obat_diminum') ?>

    <?php // echo $form->field($model, 'faktor_kepribadian_premorbid') ?>

    <?php // echo $form->field($model, 'faktor_keturunan') ?>

    <?php // echo $form->field($model, 'keterangan_faktor_keturunan') ?>

    <?php // echo $form->field($model, 'faktor_organik') ?>

    <?php // echo $form->field($model, 'keterangan_faktor_organik') ?>

    <?php // echo $form->field($model, 'riwayat_alergi') ?>

    <?php // echo $form->field($model, 'fisik_kesadaran') ?>

    <?php // echo $form->field($model, 'fisik_td') ?>

    <?php // echo $form->field($model, 'fisik_rr') ?>

    <?php // echo $form->field($model, 'fisik_suhu') ?>

    <?php // echo $form->field($model, 'fisik_nyeri') ?>

    <?php // echo $form->field($model, 'fisik_nadi') ?>

    <?php // echo $form->field($model, 'fisik_bb') ?>

    <?php // echo $form->field($model, 'fisik_tb') ?>

    <?php // echo $form->field($model, 'fisik_status_nutrisi') ?>

    <?php // echo $form->field($model, 'fisik_gcs') ?>

    <?php // echo $form->field($model, 'status_kelainan_kepala') ?>

    <?php // echo $form->field($model, 'keterangan_status_kelainan_kepala') ?>

    <?php // echo $form->field($model, 'status_kelainan_leher') ?>

    <?php // echo $form->field($model, 'keterangan_status_kelainan_leher') ?>

    <?php // echo $form->field($model, 'status_kelainan_dada') ?>

    <?php // echo $form->field($model, 'keterangan_status_kelainan_dada') ?>

    <?php // echo $form->field($model, 'status_kelainan_perut') ?>

    <?php // echo $form->field($model, 'keterangan_status_kelainan_perut') ?>

    <?php // echo $form->field($model, 'status_kelainan_anggota_gerak') ?>

    <?php // echo $form->field($model, 'keterangan_status_kelainan_anggota_gerak') ?>

    <?php // echo $form->field($model, 'status_lokalisata') ?>

    <?php // echo $form->field($model, 'psikiatrik_kesan_umum') ?>

    <?php // echo $form->field($model, 'psikiatrik_sikap_prilaku') ?>

    <?php // echo $form->field($model, 'psikiatrik_kesadaran') ?>

    <?php // echo $form->field($model, 'psikiatrik_orientasi') ?>

    <?php // echo $form->field($model, 'psikiatrik_daya_ingat') ?>

    <?php // echo $form->field($model, 'psikiatrik_persepsi') ?>

    <?php // echo $form->field($model, 'psikiatrik_pikiran') ?>

    <?php // echo $form->field($model, 'psikiatrik_insight') ?>

    <?php // echo $form->field($model, 'laborat') ?>

    <?php // echo $form->field($model, 'radiologi') ?>

    <?php // echo $form->field($model, 'ekg') ?>

    <?php // echo $form->field($model, 'diagnosis') ?>

    <?php // echo $form->field($model, 'permasalahan') ?>

    <?php // echo $form->field($model, 'instruksi_medis') ?>

    <?php // echo $form->field($model, 'rencana_target') ?>

    <?php // echo $form->field($model, 'pulang_dipulangkan') ?>

    <?php // echo $form->field($model, 'keterangan_pulang_dipulangkan') ?>

    <?php // echo $form->field($model, 'pulang_dirawat_diruang') ?>

    <?php // echo $form->field($model, 'pulang_indikasi_ranap') ?>

    <?php // echo $form->field($model, 'pulang_dirujuk_ke') ?>

    <?php // echo $form->field($model, 'pulang_alasan_dirujuk') ?>

    <?php // echo $form->field($model, 'pulang_paksa') ?>

    <?php // echo $form->field($model, 'keterangan_pulang_paksa') ?>

    <?php // echo $form->field($model, 'pulang_meninggal_igd') ?>

    <?php // echo $form->field($model, 'pulang_penyebab_kematian') ?>

    <?php // echo $form->field($model, 'fisik_pulang_kesadaran') ?>

    <?php // echo $form->field($model, 'fisik_pulang_td') ?>

    <?php // echo $form->field($model, 'fisik_pulang_nadi') ?>

    <?php // echo $form->field($model, 'fisik_pulang_gcs') ?>

    <?php // echo $form->field($model, 'fisik_pulang_suhu') ?>

    <?php // echo $form->field($model, 'fisik_pulang_rr') ?>

    <?php // echo $form->field($model, 'edukasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
