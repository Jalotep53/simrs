<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PelayananInformasiObat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pelayanan-informasi-obat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_permintaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'metode')->dropDownList([ 'Lisan' => 'Lisan', 'Tertulis' => 'Tertulis', 'Telepon' => 'Telepon', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penanya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_penanya')->dropDownList([ 'Pasien' => 'Pasien', 'Keluarga Pasien' => 'Keluarga Pasien', 'Petugas Kesehatan' => 'Petugas Kesehatan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'no_telp_penanya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_pertanyaan')->dropDownList([ 'Identifikasi Obat' => 'Identifikasi Obat', 'Interaksi Obat' => 'Interaksi Obat', 'Harga Obat' => 'Harga Obat', 'Kontraindikasi' => 'Kontraindikasi', 'Cara Pemakaian' => 'Cara Pemakaian', 'Stabilitas' => 'Stabilitas', 'Dosis' => 'Dosis', 'Keracunan' => 'Keracunan', 'Efek Samping Obat' => 'Efek Samping Obat', 'Penggunaan Terapeutik' => 'Penggunaan Terapeutik', 'Farmakokinetika' => 'Farmakokinetika', 'Farmakodinamika' => 'Farmakodinamika', 'Ketersediaan Obat' => 'Ketersediaan Obat', 'Lain-lain' => 'Lain-lain', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_jenis_pertanyaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uraian_pertanyaan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
