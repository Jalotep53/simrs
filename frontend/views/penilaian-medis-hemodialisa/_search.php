<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisHemodialisaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-medis-hemodialisa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'anamnesis') ?>

    <?= $form->field($model, 'hubungan') ?>

    <?php // echo $form->field($model, 'ruangan') ?>

    <?php // echo $form->field($model, 'alergi') ?>

    <?php // echo $form->field($model, 'nyeri') ?>

    <?php // echo $form->field($model, 'status_nutrisi') ?>

    <?php // echo $form->field($model, 'hipertensi') ?>

    <?php // echo $form->field($model, 'keterangan_hipertensi') ?>

    <?php // echo $form->field($model, 'diabetes') ?>

    <?php // echo $form->field($model, 'keterangan_diabetes') ?>

    <?php // echo $form->field($model, 'batu_saluran_kemih') ?>

    <?php // echo $form->field($model, 'keterangan_batu_saluran_kemih') ?>

    <?php // echo $form->field($model, 'operasi_saluran_kemih') ?>

    <?php // echo $form->field($model, 'keterangan_operasi_saluran_kemih') ?>

    <?php // echo $form->field($model, 'infeksi_saluran_kemih') ?>

    <?php // echo $form->field($model, 'keterangan_infeksi_saluran_kemih') ?>

    <?php // echo $form->field($model, 'bengkak_seluruh_tubuh') ?>

    <?php // echo $form->field($model, 'keterangan_bengkak_seluruh_tubuh') ?>

    <?php // echo $form->field($model, 'urin_berdarah') ?>

    <?php // echo $form->field($model, 'keterangan_urin_berdarah') ?>

    <?php // echo $form->field($model, 'penyakit_ginjal_laom') ?>

    <?php // echo $form->field($model, 'keterangan_penyakit_ginjal_laom') ?>

    <?php // echo $form->field($model, 'penyakit_lain') ?>

    <?php // echo $form->field($model, 'keterangan_penyakit_lain') ?>

    <?php // echo $form->field($model, 'konsumsi_obat_nefro') ?>

    <?php // echo $form->field($model, 'keterangan_konsumsi_obat_nefro') ?>

    <?php // echo $form->field($model, 'dialisis_pertama') ?>

    <?php // echo $form->field($model, 'pernah_cpad') ?>

    <?php // echo $form->field($model, 'tanggal_cpad') ?>

    <?php // echo $form->field($model, 'pernah_transplantasi') ?>

    <?php // echo $form->field($model, 'tanggal_transplantasi') ?>

    <?php // echo $form->field($model, 'keadaan_umum') ?>

    <?php // echo $form->field($model, 'kesadaran') ?>

    <?php // echo $form->field($model, 'nadi') ?>

    <?php // echo $form->field($model, 'bb') ?>

    <?php // echo $form->field($model, 'td') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'napas') ?>

    <?php // echo $form->field($model, 'tb') ?>

    <?php // echo $form->field($model, 'hepatomegali') ?>

    <?php // echo $form->field($model, 'splenomegali') ?>

    <?php // echo $form->field($model, 'ascites') ?>

    <?php // echo $form->field($model, 'edema') ?>

    <?php // echo $form->field($model, 'whezzing') ?>

    <?php // echo $form->field($model, 'ronchi') ?>

    <?php // echo $form->field($model, 'ikterik') ?>

    <?php // echo $form->field($model, 'tekanan_vena') ?>

    <?php // echo $form->field($model, 'anemia') ?>

    <?php // echo $form->field($model, 'kardiomegali') ?>

    <?php // echo $form->field($model, 'bising') ?>

    <?php // echo $form->field($model, 'thorax') ?>

    <?php // echo $form->field($model, 'tanggal_thorax') ?>

    <?php // echo $form->field($model, 'ekg') ?>

    <?php // echo $form->field($model, 'tanggal_ekg') ?>

    <?php // echo $form->field($model, 'bno') ?>

    <?php // echo $form->field($model, 'tanggal_bno') ?>

    <?php // echo $form->field($model, 'usg') ?>

    <?php // echo $form->field($model, 'tanggal_usg') ?>

    <?php // echo $form->field($model, 'renogram') ?>

    <?php // echo $form->field($model, 'tanggal_renogram') ?>

    <?php // echo $form->field($model, 'biopsi') ?>

    <?php // echo $form->field($model, 'tanggal_biopsi') ?>

    <?php // echo $form->field($model, 'ctscan') ?>

    <?php // echo $form->field($model, 'tanggal_ctscan') ?>

    <?php // echo $form->field($model, 'arteriografi') ?>

    <?php // echo $form->field($model, 'tanggal_arteriografi') ?>

    <?php // echo $form->field($model, 'kultur_urin') ?>

    <?php // echo $form->field($model, 'tanggal_kultur_urin') ?>

    <?php // echo $form->field($model, 'laborat') ?>

    <?php // echo $form->field($model, 'tanggal_laborat') ?>

    <?php // echo $form->field($model, 'hematokrit') ?>

    <?php // echo $form->field($model, 'hemoglobin') ?>

    <?php // echo $form->field($model, 'leukosit') ?>

    <?php // echo $form->field($model, 'trombosit') ?>

    <?php // echo $form->field($model, 'hitung_jenis') ?>

    <?php // echo $form->field($model, 'ureum') ?>

    <?php // echo $form->field($model, 'urin_lengkap') ?>

    <?php // echo $form->field($model, 'kreatinin') ?>

    <?php // echo $form->field($model, 'cct') ?>

    <?php // echo $form->field($model, 'sgot') ?>

    <?php // echo $form->field($model, 'sgpt') ?>

    <?php // echo $form->field($model, 'ct') ?>

    <?php // echo $form->field($model, 'asam_urat') ?>

    <?php // echo $form->field($model, 'hbsag') ?>

    <?php // echo $form->field($model, 'anti_hcv') ?>

    <?php // echo $form->field($model, 'edukasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
