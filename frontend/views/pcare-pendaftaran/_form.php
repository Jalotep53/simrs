<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PcarePendaftaran $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pcare-pendaftaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglDaftar')->textInput() ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdProviderPeserta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noKartu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdPoli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmPoli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluhan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kunjSakit')->dropDownList([ 'Kunjungan Sakit' => 'Kunjungan Sakit', 'Kunjungan Sehat' => 'Kunjungan Sehat', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sistole')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diastole')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'beratBadan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tinggiBadan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'respRate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lingkar_perut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'heartRate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rujukBalik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdTkp')->dropDownList([ '10 Rawat Jalan' => '10 Rawat Jalan', '20 Rawat Inap' => '20 Rawat Inap', '50 Promotif Preventif' => '50 Promotif Preventif', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'noUrut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Terkirim' => 'Terkirim', 'Gagal' => 'Gagal', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
