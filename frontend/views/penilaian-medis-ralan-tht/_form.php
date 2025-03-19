<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanTht $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-medis-ralan-tht-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anamnesis')->dropDownList([ 'Autoanamnesis' => 'Autoanamnesis', 'Alloanamnesis' => 'Alloanamnesis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hubungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluhan_utama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rpd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rpo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alergi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'td')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nyeri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_nutrisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kondisi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ket_lokalis')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lab')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'rad')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tes_pendengaran')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'penunjang')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'diagnosis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosisbanding')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'permasalahan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'terapi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tindakan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tatalaksana')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'edukasi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
