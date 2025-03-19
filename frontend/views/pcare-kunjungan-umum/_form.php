<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PcareKunjunganUmum $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pcare-kunjungan-umum-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noKunjungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglDaftar')->textInput() ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noKartu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdPoli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmPoli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluhan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdSadar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmSadar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sistole')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diastole')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'beratBadan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tinggiBadan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'respRate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'heartRate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lingkarPerut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'terapi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdStatusPulang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmStatusPulang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglPulang')->textInput() ?>

    <?= $form->field($model, 'kdDokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmDokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdDiag1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmDiag1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdDiag2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmDiag2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdDiag3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmDiag3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Terkirim' => 'Terkirim', 'Gagal' => 'Gagal', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'KdAlergiMakanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NmAlergiMakanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KdAlergiUdara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NmAlergiUdara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KdAlergiObat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NmAlergiObat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KdPrognosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NmPrognosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'terapi_non_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bmhp')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
