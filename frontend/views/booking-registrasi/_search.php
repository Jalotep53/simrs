<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BookingRegistrasiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="booking-registrasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tanggal_booking') ?>

    <?= $form->field($model, 'jam_booking') ?>

    <?= $form->field($model, 'no_rkm_medis') ?>

    <?= $form->field($model, 'tanggal_periksa') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?php // echo $form->field($model, 'kd_poli') ?>

    <?php // echo $form->field($model, 'no_reg') ?>

    <?php // echo $form->field($model, 'kd_pj') ?>

    <?php // echo $form->field($model, 'limit_reg') ?>

    <?php // echo $form->field($model, 'waktu_kunjungan') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
