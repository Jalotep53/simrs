<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeluarSetNomor $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-keluar-set-nomor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenis_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'digit_1')->dropDownList([ 'No Urut Bulanan' => 'No Urut Bulanan', 'No Urut Tahunan' => 'No Urut Tahunan', 'Kode Klasifikasi Surat' => 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat' => 'Kode Sub Klasifikasi Surat', 'Tanggal Angka' => 'Tanggal Angka', 'Tanggal Romawi' => 'Tanggal Romawi', 'Bulan Angka' => 'Bulan Angka', 'Bulan Romawi' => 'Bulan Romawi', 'Tahun' => 'Tahun', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'digit_2')->dropDownList([ 'No Urut Bulanan' => 'No Urut Bulanan', 'No Urut Tahunan' => 'No Urut Tahunan', 'Kode Klasifikasi Surat' => 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat' => 'Kode Sub Klasifikasi Surat', 'Tanggal Angka' => 'Tanggal Angka', 'Tanggal Romawi' => 'Tanggal Romawi', 'Bulan Angka' => 'Bulan Angka', 'Bulan Romawi' => 'Bulan Romawi', 'Tahun' => 'Tahun', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'digit_3')->dropDownList([ 'No Urut Bulanan' => 'No Urut Bulanan', 'No Urut Tahunan' => 'No Urut Tahunan', 'Kode Klasifikasi Surat' => 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat' => 'Kode Sub Klasifikasi Surat', 'Tanggal Angka' => 'Tanggal Angka', 'Tanggal Romawi' => 'Tanggal Romawi', 'Bulan Angka' => 'Bulan Angka', 'Bulan Romawi' => 'Bulan Romawi', 'Tahun' => 'Tahun', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'digit_4')->dropDownList([ 'No Urut Bulanan' => 'No Urut Bulanan', 'No Urut Tahunan' => 'No Urut Tahunan', 'Kode Klasifikasi Surat' => 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat' => 'Kode Sub Klasifikasi Surat', 'Tanggal Angka' => 'Tanggal Angka', 'Tanggal Romawi' => 'Tanggal Romawi', 'Bulan Angka' => 'Bulan Angka', 'Bulan Romawi' => 'Bulan Romawi', 'Tahun' => 'Tahun', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'digit_5')->dropDownList([ 'No Urut Bulanan' => 'No Urut Bulanan', 'No Urut Tahunan' => 'No Urut Tahunan', 'Kode Klasifikasi Surat' => 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat' => 'Kode Sub Klasifikasi Surat', 'Tanggal Angka' => 'Tanggal Angka', 'Tanggal Romawi' => 'Tanggal Romawi', 'Bulan Angka' => 'Bulan Angka', 'Bulan Romawi' => 'Bulan Romawi', 'Tahun' => 'Tahun', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'digit_6')->dropDownList([ 'No Urut Bulanan' => 'No Urut Bulanan', 'No Urut Tahunan' => 'No Urut Tahunan', 'Kode Klasifikasi Surat' => 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat' => 'Kode Sub Klasifikasi Surat', 'Tanggal Angka' => 'Tanggal Angka', 'Tanggal Romawi' => 'Tanggal Romawi', 'Bulan Angka' => 'Bulan Angka', 'Bulan Romawi' => 'Bulan Romawi', 'Tahun' => 'Tahun', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'digit_7')->dropDownList([ 'No Urut Bulanan' => 'No Urut Bulanan', 'No Urut Tahunan' => 'No Urut Tahunan', 'Kode Klasifikasi Surat' => 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat' => 'Kode Sub Klasifikasi Surat', 'Tanggal Angka' => 'Tanggal Angka', 'Tanggal Romawi' => 'Tanggal Romawi', 'Bulan Angka' => 'Bulan Angka', 'Bulan Romawi' => 'Bulan Romawi', 'Tahun' => 'Tahun', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'digit_8')->dropDownList([ 'No Urut Bulanan' => 'No Urut Bulanan', 'No Urut Tahunan' => 'No Urut Tahunan', 'Kode Klasifikasi Surat' => 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat' => 'Kode Sub Klasifikasi Surat', 'Tanggal Angka' => 'Tanggal Angka', 'Tanggal Romawi' => 'Tanggal Romawi', 'Bulan Angka' => 'Bulan Angka', 'Bulan Romawi' => 'Bulan Romawi', 'Tahun' => 'Tahun', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'digit_9')->dropDownList([ 'No Urut Bulanan' => 'No Urut Bulanan', 'No Urut Tahunan' => 'No Urut Tahunan', 'Kode Klasifikasi Surat' => 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat' => 'Kode Sub Klasifikasi Surat', 'Tanggal Angka' => 'Tanggal Angka', 'Tanggal Romawi' => 'Tanggal Romawi', 'Bulan Angka' => 'Bulan Angka', 'Bulan Romawi' => 'Bulan Romawi', 'Tahun' => 'Tahun', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'digit_10')->dropDownList([ 'No Urut Bulanan' => 'No Urut Bulanan', 'No Urut Tahunan' => 'No Urut Tahunan', 'Kode Klasifikasi Surat' => 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat' => 'Kode Sub Klasifikasi Surat', 'Tanggal Angka' => 'Tanggal Angka', 'Tanggal Romawi' => 'Tanggal Romawi', 'Bulan Angka' => 'Bulan Angka', 'Bulan Romawi' => 'Bulan Romawi', 'Tahun' => 'Tahun', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'digit_11')->dropDownList([ 'No Urut Bulanan' => 'No Urut Bulanan', 'No Urut Tahunan' => 'No Urut Tahunan', 'Kode Klasifikasi Surat' => 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat' => 'Kode Sub Klasifikasi Surat', 'Tanggal Angka' => 'Tanggal Angka', 'Tanggal Romawi' => 'Tanggal Romawi', 'Bulan Angka' => 'Bulan Angka', 'Bulan Romawi' => 'Bulan Romawi', 'Tahun' => 'Tahun', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'digit_12')->dropDownList([ 'No Urut Bulanan' => 'No Urut Bulanan', 'No Urut Tahunan' => 'No Urut Tahunan', 'Kode Klasifikasi Surat' => 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat' => 'Kode Sub Klasifikasi Surat', 'Tanggal Angka' => 'Tanggal Angka', 'Tanggal Romawi' => 'Tanggal Romawi', 'Bulan Angka' => 'Bulan Angka', 'Bulan Romawi' => 'Bulan Romawi', 'Tahun' => 'Tahun', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'digit_13')->dropDownList([ 'No Urut Bulanan' => 'No Urut Bulanan', 'No Urut Tahunan' => 'No Urut Tahunan', 'Kode Klasifikasi Surat' => 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat' => 'Kode Sub Klasifikasi Surat', 'Tanggal Angka' => 'Tanggal Angka', 'Tanggal Romawi' => 'Tanggal Romawi', 'Bulan Angka' => 'Bulan Angka', 'Bulan Romawi' => 'Bulan Romawi', 'Tahun' => 'Tahun', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'digit_14')->dropDownList([ 'No Urut Bulanan' => 'No Urut Bulanan', 'No Urut Tahunan' => 'No Urut Tahunan', 'Kode Klasifikasi Surat' => 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat' => 'Kode Sub Klasifikasi Surat', 'Tanggal Angka' => 'Tanggal Angka', 'Tanggal Romawi' => 'Tanggal Romawi', 'Bulan Angka' => 'Bulan Angka', 'Bulan Romawi' => 'Bulan Romawi', 'Tahun' => 'Tahun', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'digit_15')->dropDownList([ 'No Urut Bulanan' => 'No Urut Bulanan', 'No Urut Tahunan' => 'No Urut Tahunan', 'Kode Klasifikasi Surat' => 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat' => 'Kode Sub Klasifikasi Surat', 'Tanggal Angka' => 'Tanggal Angka', 'Tanggal Romawi' => 'Tanggal Romawi', 'Bulan Angka' => 'Bulan Angka', 'Bulan Romawi' => 'Bulan Romawi', 'Tahun' => 'Tahun', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
