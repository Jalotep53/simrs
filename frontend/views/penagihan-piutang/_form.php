<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenagihanPiutang $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penagihan-piutang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_tagihan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'tanggaltempo')->textInput() ?>

    <?= $form->field($model, 'tempo')->textInput() ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip_menyetujui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_rek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Proses Penagihan' => 'Proses Penagihan', 'Sudah Dibayar' => 'Sudah Dibayar', 'Belum Lunas' => 'Belum Lunas', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
