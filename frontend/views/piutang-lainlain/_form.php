<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PiutangLainlain $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="piutang-lainlain-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nota_piutang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_piutang')->textInput() ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_peminjam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_rek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_bayar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgltempo')->textInput() ?>

    <?= $form->field($model, 'nominal')->textInput() ?>

    <?= $form->field($model, 'sisapiutang')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Sudah Lunas' => 'Sudah Lunas', 'Belum Lunas' => 'Belum Lunas', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
