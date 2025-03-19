<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DataKlasifikasiPasienRanapSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-klasifikasi-pasien-ranap-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'Minimal') ?>

    <?= $form->field($model, 'Partial') ?>

    <?= $form->field($model, 'Total') ?>

    <?php // echo $form->field($model, 'kd_kamar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
