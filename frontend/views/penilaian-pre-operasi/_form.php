<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPreOperasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-pre-operasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ringkasan_klinik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan_fisik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan_diagnostik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_pre_operasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rencana_tindakan_bedah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hal_hal_yang_perludi_persiapkan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'terapi_pre_operasi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
