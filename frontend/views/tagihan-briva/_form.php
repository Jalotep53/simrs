<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TagihanBriva $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tagihan-briva-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jk')->dropDownList([ 'L' => 'L', 'P' => 'P', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'tgl_registrasi')->textInput() ?>

    <?= $form->field($model, 'no_tagihan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'besar_bayar')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_tagihan')->dropDownList([ 'Ranap' => 'Ranap', 'Ralan' => 'Ralan', 'Jual Bebas' => 'Jual Bebas', 'Deposit' => 'Deposit', 'Bayar Piutang' => 'Bayar Piutang', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tgl_closing')->textInput() ?>

    <?= $form->field($model, 'status_bayar')->dropDownList([ 'Sudah' => 'Sudah', 'Pending' => 'Pending', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kasir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diupdatebank')->textInput() ?>

    <?= $form->field($model, 'referensi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
