<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PeriksaLab $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="periksa-lab-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_jenis_prw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_periksa')->textInput() ?>

    <?= $form->field($model, 'jam')->textInput() ?>

    <?= $form->field($model, 'dokter_perujuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bagian_rs')->textInput() ?>

    <?= $form->field($model, 'bhp')->textInput() ?>

    <?= $form->field($model, 'tarif_perujuk')->textInput() ?>

    <?= $form->field($model, 'tarif_tindakan_dokter')->textInput() ?>

    <?= $form->field($model, 'tarif_tindakan_petugas')->textInput() ?>

    <?= $form->field($model, 'kso')->textInput() ?>

    <?= $form->field($model, 'menejemen')->textInput() ?>

    <?= $form->field($model, 'biaya')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Ralan' => 'Ralan', 'Ranap' => 'Ranap', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kategori')->dropDownList([ 'PA' => 'PA', 'PK' => 'PK', 'MB' => 'MB', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
