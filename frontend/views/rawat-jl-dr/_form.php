<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RawatJlDr $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rawat-jl-dr-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_jenis_prw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_perawatan')->textInput() ?>

    <?= $form->field($model, 'jam_rawat')->textInput() ?>

    <?= $form->field($model, 'material')->textInput() ?>

    <?= $form->field($model, 'bhp')->textInput() ?>

    <?= $form->field($model, 'tarif_tindakandr')->textInput() ?>

    <?= $form->field($model, 'kso')->textInput() ?>

    <?= $form->field($model, 'menejemen')->textInput() ?>

    <?= $form->field($model, 'biaya_rawat')->textInput() ?>

    <?= $form->field($model, 'stts_bayar')->dropDownList([ 'Sudah' => 'Sudah', 'Belum' => 'Belum', 'Suspen' => 'Suspen', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
