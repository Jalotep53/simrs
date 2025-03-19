<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanGawatDaruratPsikiatri $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-medis-ralan-gawat-darurat-psikiatri-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anamnesis')->dropDownList([ 'Autoanamnesis' => 'Autoanamnesis', 'Alloanamnesis' => 'Alloanamnesis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hubungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluhan_utama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gejala_menyertai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faktor_pencetus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_penyakit_dahulu')->dropDownList([ 'Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_riwayat_penyakit_dahulu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_kehamilan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_sosial')->dropDownList([ 'Bergaul' => 'Bergaul', 'Tidak Bergaul' => 'Tidak Bergaul', 'Lain-lain' => 'Lain-lain', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_riwayat_sosial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_pekerjaan')->dropDownList([ 'Bekerja' => 'Bekerja', 'Tidak Bekerja' => 'Tidak Bekerja', 'Ganti-gantian Pekerjaan' => 'Ganti-gantian Pekerjaan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_riwayat_pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_obat_diminum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faktor_kepribadian_premorbid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faktor_keturunan')->dropDownList([ 'Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_faktor_keturunan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faktor_organik')->dropDownList([ 'Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_faktor_organik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_alergi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_kesadaran')->dropDownList([ 'Compos Mentis' => 'Compos Mentis', 'Apatis' => 'Apatis', 'Somnolen' => 'Somnolen', 'Sopor' => 'Sopor', 'Koma' => 'Koma', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'fisik_td')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_nyeri')->dropDownList([ 'Tidak Nyeri' => 'Tidak Nyeri', 'Nyeri Ringan' => 'Nyeri Ringan', 'Nyeri Sedang' => 'Nyeri Sedang', 'Nyeri Berat' => 'Nyeri Berat', 'Nyeri Sangat Berat' => 'Nyeri Sangat Berat', 'Nyeri Tak Tertahankan' => 'Nyeri Tak Tertahankan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'fisik_nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_bb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_tb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_status_nutrisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_gcs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_kelainan_kepala')->dropDownList([ 'Normal' => 'Normal', 'Abnormal' => 'Abnormal', 'Tidak Diperiksa' => 'Tidak Diperiksa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_status_kelainan_kepala')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_kelainan_leher')->dropDownList([ 'Normal' => 'Normal', 'Abnormal' => 'Abnormal', 'Tidak Diperiksa' => 'Tidak Diperiksa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_status_kelainan_leher')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_kelainan_dada')->dropDownList([ 'Normal' => 'Normal', 'Abnormal' => 'Abnormal', 'Tidak Diperiksa' => 'Tidak Diperiksa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_status_kelainan_dada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_kelainan_perut')->dropDownList([ 'Normal' => 'Normal', 'Abnormal' => 'Abnormal', 'Tidak Diperiksa' => 'Tidak Diperiksa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_status_kelainan_perut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_kelainan_anggota_gerak')->dropDownList([ 'Normal' => 'Normal', 'Abnormal' => 'Abnormal', 'Tidak Diperiksa' => 'Tidak Diperiksa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_status_kelainan_anggota_gerak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_lokalisata')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'psikiatrik_kesan_umum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'psikiatrik_sikap_prilaku')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'psikiatrik_kesadaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'psikiatrik_orientasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'psikiatrik_daya_ingat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'psikiatrik_persepsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'psikiatrik_pikiran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'psikiatrik_insight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'laborat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'radiologi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ekg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'permasalahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instruksi_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rencana_target')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pulang_dipulangkan')->dropDownList([ 'Tidak Perlu Kontrol' => 'Tidak Perlu Kontrol', 'Kontrol/Berobat Jalan' => 'Kontrol/Berobat Jalan', 'Rawat Inap' => 'Rawat Inap', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_pulang_dipulangkan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pulang_dirawat_diruang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pulang_indikasi_ranap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pulang_dirujuk_ke')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pulang_alasan_dirujuk')->dropDownList([ '-' => '-', 'Tempat Penuh' => 'Tempat Penuh', 'Perlu Fasilitas Lebih' => 'Perlu Fasilitas Lebih', 'Permintaan Pasien/Keluarga' => 'Permintaan Pasien/Keluarga', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pulang_paksa')->dropDownList([ '-' => '-', 'Masalah Biaya' => 'Masalah Biaya', 'Kondisi Pasien' => 'Kondisi Pasien', 'Masalah Lokasi Rumah' => 'Masalah Lokasi Rumah', 'Lain-lain' => 'Lain-lain', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_pulang_paksa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pulang_meninggal_igd')->dropDownList([ '-' => '-', '<= 2 Jam' => '<= 2 Jam', '> 2 Jam' => '> 2 Jam', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pulang_penyebab_kematian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_pulang_kesadaran')->dropDownList([ 'Compos Mentis' => 'Compos Mentis', 'Apatis' => 'Apatis', 'Somnolen' => 'Somnolen', 'Sopor' => 'Sopor', 'Koma' => 'Koma', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'fisik_pulang_td')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_pulang_nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_pulang_gcs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_pulang_suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_pulang_rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edukasi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
