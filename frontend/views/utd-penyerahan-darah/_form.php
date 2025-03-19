<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenyerahanDarah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="utd-penyerahan-darah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_penyerahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'dinas')->dropDownList([ 'Pagi' => 'Pagi', 'Siang' => 'Siang', 'Sore' => 'Sore', 'Malam' => 'Malam', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nip_cross')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Belum Dibayar' => 'Belum Dibayar', 'Sudah Dibayar' => 'Sudah Dibayar', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kd_rek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengambil_darah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_pengambil_darah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'besarppn')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
