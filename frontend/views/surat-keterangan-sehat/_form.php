<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeteranganSehat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-keterangan-sehat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggalsurat')->textInput() ?>

    <?= $form->field($model, 'berat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tinggi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tensi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'butawarna')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keperluan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kesimpulan')->dropDownList([ 'Sehat' => 'Sehat', 'Tidak Sehat' => 'Tidak Sehat', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
