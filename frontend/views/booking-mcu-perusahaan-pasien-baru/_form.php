<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BookingMcuPerusahaanPasienBaru $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="booking-mcu-perusahaan-pasien-baru-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_pengajuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jk')->dropDownList([ 'L' => 'L', 'P' => 'P', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tmp_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'nm_ibu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelurahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kabupaten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'propinsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gol_darah')->dropDownList([ 'A' => 'A', 'B' => 'B', 'O' => 'O', 'AB' => 'AB', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stts_nikah')->dropDownList([ 'BELUM MENIKAH' => 'BELUM MENIKAH', 'MENIKAH' => 'MENIKAH', 'JANDA' => 'JANDA', 'DUDHA' => 'DUDHA', 'JOMBLO' => 'JOMBLO', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'agama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_mcu')->textInput() ?>

    <?= $form->field($model, 'no_tlp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'umur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pnd')->dropDownList([ 'TS' => 'TS', 'TK' => 'TK', 'SD' => 'SD', 'SMP' => 'SMP', 'SMA' => 'SMA', 'SLTA/SEDERAJAT' => 'SLTA/SEDERAJAT', 'D1' => 'D1', 'D2' => 'D2', 'D3' => 'D3', 'D4' => 'D4', 'S1' => 'S1', 'S2' => 'S2', 'S3' => 'S3', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keluarga')->dropDownList([ 'AYAH' => 'AYAH', 'IBU' => 'IBU', 'ISTRI' => 'ISTRI', 'SUAMI' => 'SUAMI', 'SAUDARA' => 'SAUDARA', 'ANAK' => 'ANAK', 'DIRI SENDIRI' => 'DIRI SENDIRI', 'LAIN-LAIN' => 'LAIN-LAIN', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'namakeluarga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pekerjaanpj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamatpj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelurahanpj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatanpj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kabupatenpj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'propinsipj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perusahaan_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suku_bangsa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bahasa_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cacat_fisik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Sudah Dikonfirmasi' => 'Sudah Dikonfirmasi', 'Menunggu Konfirmasi' => 'Menunggu Konfirmasi', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
