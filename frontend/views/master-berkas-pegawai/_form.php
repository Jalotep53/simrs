<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MasterBerkasPegawai $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="master-berkas-pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori')->dropDownList([ 'Tenaga klinis Dokter Umum' => 'Tenaga klinis Dokter Umum', 'Tenaga klinis Dokter Spesialis' => 'Tenaga klinis Dokter Spesialis', 'Tenaga klinis Perawat dan Bidan' => 'Tenaga klinis Perawat dan Bidan', 'Tenaga klinis Profesi Lain' => 'Tenaga klinis Profesi Lain', 'Tenaga Non Klinis' => 'Tenaga Non Klinis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nama_berkas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_urut')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
