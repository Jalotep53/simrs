<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BookingMcuPerusahaan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="booking-mcu-perusahaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal_booking')->textInput() ?>

    <?= $form->field($model, 'jam_booking')->textInput() ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_mcu')->textInput() ?>

    <?= $form->field($model, 'no_mcu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Terdaftar' => 'Terdaftar', 'Menunggu Hasil' => 'Menunggu Hasil', 'Selesai' => 'Selesai', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kode_perusahaan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
