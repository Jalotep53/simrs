<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPreOperasiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-pre-operasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'ringkasan_klinik') ?>

    <?= $form->field($model, 'pemeriksaan_fisik') ?>

    <?php // echo $form->field($model, 'pemeriksaan_diagnostik') ?>

    <?php // echo $form->field($model, 'diagnosa_pre_operasi') ?>

    <?php // echo $form->field($model, 'rencana_tindakan_bedah') ?>

    <?php // echo $form->field($model, 'hal_hal_yang_perludi_persiapkan') ?>

    <?php // echo $form->field($model, 'terapi_pre_operasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
