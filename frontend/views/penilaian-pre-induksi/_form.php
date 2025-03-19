<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPreInduksi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-pre-induksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tensi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ekg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lain_lain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asesmen')->dropDownList([ 'Sesuai Asesmen Pre Sedasi/Anestesi' => 'Sesuai Asesmen Pre Sedasi/Anestesi', 'Tidak Sesuai Asesmen Pre Sedasi/Anestesi' => 'Tidak Sesuai Asesmen Pre Sedasi/Anestesi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'perencanaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'infus_perifier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cvc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posisi')->dropDownList([ 'Supine' => 'Supine', 'Lithotomi' => 'Lithotomi', 'Lateral' => 'Lateral', 'Prone' => 'Prone', 'Perlindungan Mata' => 'Perlindungan Mata', 'Kanan' => 'Kanan', 'Kiri' => 'Kiri', 'Lain-lain' => 'Lain-lain', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'premedikasi')->dropDownList([ 'Oral' => 'Oral', 'IM' => 'IM', 'IV' => 'IV', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'premedikasi_keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'induksi')->dropDownList([ 'Intravena' => 'Intravena', 'Inhalasi' => 'Inhalasi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'induksi_keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'face_mask_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nasopharing_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ett_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ett_jenis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ett_viksasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lma_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lma_jenis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tracheostomi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bronchoscopi_fiberoptik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'glidescopi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lain_lain_tatalaksana')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intubasi_sesudah_tidur')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'intubasi_oral')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'intubasi_tracheostomi')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'intubasi_keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sulit_ventilasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sulit_intubasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ventilasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teknik_regional_jenis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teknik_regional_lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teknik_regional_jenis_jarum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teknik_regional_kateter')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'teknik_regional_kateter_viksasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teknik_regional_obat_obatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teknik_regional_komplikasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teknik_regional_hasil')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
