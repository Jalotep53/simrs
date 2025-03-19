<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPasienPenyakitMenular $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-pasien-penyakit-menular-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anamnesis')->dropDownList([ 'Autoanamnesis' => 'Autoanamnesis', 'Alloanamnesis' => 'Alloanamnesis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hubungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pasien_mengetahui_kondisi_penyakitnya')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penyakit_sama_serumah')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'riwayat_kontak')->dropDownList([ 'Bekerja Di Daerah KLB' => 'Bekerja Di Daerah KLB', 'Merawat Pasien Penyakit Infeksi' => 'Merawat Pasien Penyakit Infeksi', 'Berkunjung Ke Daerah Endemik Dalam 2 Minggu Terakhir' => 'Berkunjung Ke Daerah Endemik Dalam 2 Minggu Terakhir', 'Bekerja Di Laboratorium' => 'Bekerja Di Laboratorium', 'Kontak Langsung' => 'Kontak Langsung', 'Lain-lain' => 'Lain-lain', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_riwayat_kontak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transmisi_penularan_penyakit')->dropDownList([ 'Airborne' => 'Airborne', 'Droplet' => 'Droplet', 'Kontak Langsung' => 'Kontak Langsung', 'Cairan Tubuh Lainnya' => 'Cairan Tubuh Lainnya', 'Lain-lain' => 'Lain-lain', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_transmisi_penularan_penyakit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kebutuhan_ruang_rawat')->dropDownList([ 'Isolasi' => 'Isolasi', 'Ruang Biasa' => 'Ruang Biasa', 'ICU' => 'ICU', 'ICU Isolasi' => 'ICU Isolasi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keluhan_yang_dirasakan_saat_ini')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_penyakit_keluarga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_alergi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_vaksinasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_pengobatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_utama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_tambahan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
