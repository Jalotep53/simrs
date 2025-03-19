<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisHemodialisa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-medis-hemodialisa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anamnesis')->dropDownList([ 'Autoanamnesis' => 'Autoanamnesis', 'Alloanamnesis' => 'Alloanamnesis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hubungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ruangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alergi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nyeri')->dropDownList([ 'Tidak Nyeri' => 'Tidak Nyeri', 'Nyeri Ringan' => 'Nyeri Ringan', 'Nyeri Sedang' => 'Nyeri Sedang', 'Nyeri Berat' => 'Nyeri Berat', 'Nyeri Sangat Berat' => 'Nyeri Sangat Berat', 'Nyeri Tak Tertahankan' => 'Nyeri Tak Tertahankan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status_nutrisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hipertensi')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_hipertensi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diabetes')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_diabetes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batu_saluran_kemih')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_batu_saluran_kemih')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'operasi_saluran_kemih')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_operasi_saluran_kemih')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'infeksi_saluran_kemih')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_infeksi_saluran_kemih')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bengkak_seluruh_tubuh')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_bengkak_seluruh_tubuh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'urin_berdarah')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_urin_berdarah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penyakit_ginjal_laom')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_penyakit_ginjal_laom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penyakit_lain')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_penyakit_lain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'konsumsi_obat_nefro')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_konsumsi_obat_nefro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dialisis_pertama')->textInput() ?>

    <?= $form->field($model, 'pernah_cpad')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tanggal_cpad')->textInput() ?>

    <?= $form->field($model, 'pernah_transplantasi')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tanggal_transplantasi')->textInput() ?>

    <?= $form->field($model, 'keadaan_umum')->dropDownList([ 'Sehat' => 'Sehat', 'Sakit Ringan' => 'Sakit Ringan', 'Sakit Sedang' => 'Sakit Sedang', 'Sakit Berat' => 'Sakit Berat', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kesadaran')->dropDownList([ 'Compos Mentis' => 'Compos Mentis', 'Apatis' => 'Apatis', 'Somnolen' => 'Somnolen', 'Sopor' => 'Sopor', 'Koma' => 'Koma', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'td')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'napas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hepatomegali')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'splenomegali')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ascites')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'edema')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'whezzing')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ronchi')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ikterik')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tekanan_vena')->dropDownList([ 'Normal' => 'Normal', 'Meningkat' => 'Meningkat', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'anemia')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kardiomegali')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'bising')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'thorax')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tanggal_thorax')->textInput() ?>

    <?= $form->field($model, 'ekg')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tanggal_ekg')->textInput() ?>

    <?= $form->field($model, 'bno')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tanggal_bno')->textInput() ?>

    <?= $form->field($model, 'usg')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tanggal_usg')->textInput() ?>

    <?= $form->field($model, 'renogram')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tanggal_renogram')->textInput() ?>

    <?= $form->field($model, 'biopsi')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tanggal_biopsi')->textInput() ?>

    <?= $form->field($model, 'ctscan')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tanggal_ctscan')->textInput() ?>

    <?= $form->field($model, 'arteriografi')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tanggal_arteriografi')->textInput() ?>

    <?= $form->field($model, 'kultur_urin')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tanggal_kultur_urin')->textInput() ?>

    <?= $form->field($model, 'laborat')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tanggal_laborat')->textInput() ?>

    <?= $form->field($model, 'hematokrit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hemoglobin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'leukosit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trombosit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hitung_jenis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ureum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'urin_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kreatinin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cct')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sgot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sgpt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ct')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asam_urat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hbsag')->dropDownList([ 'Non Reaktif' => 'Non Reaktif', 'Reaktif' => 'Reaktif', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'anti_hcv')->dropDownList([ 'Non Reaktif' => 'Non Reaktif', 'Reaktif' => 'Reaktif', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'edukasi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
