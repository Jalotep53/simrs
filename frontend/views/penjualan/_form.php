<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Penjualan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penjualan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nota_jual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_jual')->textInput() ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jns_jual')->dropDownList([ 'Jual Bebas' => 'Jual Bebas', 'Karyawan' => 'Karyawan', 'Beli Luar' => 'Beli Luar', 'Rawat Jalan' => 'Rawat Jalan', 'Kelas 1' => 'Kelas 1', 'Kelas 2' => 'Kelas 2', 'Kelas 3' => 'Kelas 3', 'Utama/BPJS' => 'Utama/BPJS', 'VIP' => 'VIP', 'VVIP' => 'VVIP', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ongkir')->textInput() ?>

    <?= $form->field($model, 'ppn')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Belum Dibayar' => 'Belum Dibayar', 'Sudah Dibayar' => 'Sudah Dibayar', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kd_bangsal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_rek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_bayar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
