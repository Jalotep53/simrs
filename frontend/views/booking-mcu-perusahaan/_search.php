<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BookingMcuPerusahaanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="booking-mcu-perusahaan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tanggal_booking') ?>

    <?= $form->field($model, 'jam_booking') ?>

    <?= $form->field($model, 'no_rkm_medis') ?>

    <?= $form->field($model, 'tanggal_mcu') ?>

    <?= $form->field($model, 'no_mcu') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'kode_perusahaan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
