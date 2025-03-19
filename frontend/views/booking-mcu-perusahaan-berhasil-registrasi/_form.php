<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BookingMcuPerusahaanBerhasilRegistrasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="booking-mcu-perusahaan-berhasil-registrasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_mcu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
