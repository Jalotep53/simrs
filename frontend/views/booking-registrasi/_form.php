<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BookingRegistrasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="booking-registrasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal_booking')->textInput() ?>

    <?= $form->field($model, 'jam_booking')->textInput() ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_periksa')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_poli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_reg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'limit_reg')->textInput() ?>

    <?= $form->field($model, 'waktu_kunjungan')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Terdaftar' => 'Terdaftar', 'Belum' => 'Belum', 'Batal' => 'Batal', 'Dokter Berhalangan' => 'Dokter Berhalangan', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
