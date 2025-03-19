<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ChecklistPostOperasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="checklist-post-operasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'sncn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter_bedah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter_anestesi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keadaan_umum')->dropDownList([ 'Sadar' => 'Sadar', 'Tidur' => 'Tidur', 'Terintubasi' => 'Terintubasi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pemeriksaan_penunjang_rontgen')->dropDownList([ 'Ada' => 'Ada', 'Tidak Ada' => 'Tidak Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_pemeriksaan_penunjang_rontgen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan_penunjang_ekg')->dropDownList([ 'Ada' => 'Ada', 'Tidak Ada' => 'Tidak Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_pemeriksaan_penunjang_ekg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan_penunjang_usg')->dropDownList([ 'Ada' => 'Ada', 'Tidak Ada' => 'Tidak Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_pemeriksaan_penunjang_usg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan_penunjang_ctscan')->dropDownList([ 'Ada' => 'Ada', 'Tidak Ada' => 'Tidak Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_pemeriksaan_penunjang_ctscan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan_penunjang_mri')->dropDownList([ 'Ada' => 'Ada', 'Tidak Ada' => 'Tidak Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_pemeriksaan_penunjang_mri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_cairan_infus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kateter_urine')->dropDownList([ 'Ada' => 'Ada', 'Tidak Ada' => 'Tidak Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tanggal_pemasangan_kateter')->textInput() ?>

    <?= $form->field($model, 'warna_kateter')->dropDownList([ 'Jernih' => 'Jernih', 'Keruh' => 'Keruh', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jumlah_kateter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area_luka_operasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'drain')->dropDownList([ 'Ada' => 'Ada', 'Tidak Ada' => 'Tidak Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jumlah_drain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'letak_drain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'warna_drain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jaringan_pa')->dropDownList([ 'Ada' => 'Ada', 'Tidak Ada' => 'Tidak Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nip_perawat_ok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip_perawat_anestesi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
