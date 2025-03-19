<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SisruteRujukanKeluar $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sisrute-rujukan-keluar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rujuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_peserta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jk')->dropDownList([ 'L' => 'L', 'P' => 'P', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'tmp_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_tlp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jns_rujukan')->dropDownList([ '1. Rawat Jalan' => '1. Rawat Jalan', '2. Rawat Darurat/Inap' => '2. Rawat Darurat/Inap', '3. Parsial' => '3. Parsial', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tgl_rujuk')->textInput() ?>

    <?= $form->field($model, 'kd_faskes_tujuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_faskes_tujuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_alasan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alasan_rujuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alasan_lainnya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_diagnosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_rujuk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nik_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dokter_perujuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nik_petugas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'petugas_entry')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anamnesis_pemeriksaan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kesadaran')->dropDownList([ '1. Sadar' => '1. Sadar', '2. Tidak Sadar' => '2. Tidak Sadar', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tekanan_darah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'respirasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keadaan_umum')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tingkat_nyeri')->dropDownList([ '0. Tidak Nyeri' => '0. Tidak Nyeri', '1. Ringan' => '1. Ringan', '2. Sedang' => '2. Sedang', '3. Berat' => '3. Berat', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alergi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'laboratorium')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'radiologi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'terapitindakan')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
