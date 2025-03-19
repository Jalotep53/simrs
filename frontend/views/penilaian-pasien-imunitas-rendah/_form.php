<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPasienImunitasRendah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-pasien-imunitas-rendah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anamnesis')->dropDownList([ 'Autoanamnesis' => 'Autoanamnesis', 'Alloanamnesis' => 'Alloanamnesis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hubungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pasien_mengetahui_kondisi_penyakitnya')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kebutuhan_ruang_perawatan')->dropDownList([ 'Isolasi' => 'Isolasi', 'Ruang Rawat Biasa' => 'Ruang Rawat Biasa', 'ICU' => 'ICU', 'ICU Isolasi' => 'ICU Isolasi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'riwayat_penyakit_keluhan')->textInput(['maxlength' => true]) ?>

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
