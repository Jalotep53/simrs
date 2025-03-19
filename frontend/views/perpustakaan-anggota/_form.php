<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanAnggota $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perpustakaan-anggota-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_anggota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_anggota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tmp_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'j_kel')->dropDownList([ 'L' => 'L', 'P' => 'P', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_gabung')->textInput() ?>

    <?= $form->field($model, 'masa_berlaku')->textInput() ?>

    <?= $form->field($model, 'jenis_anggota')->dropDownList([ 'Pasien' => 'Pasien', 'Pegawai' => 'Pegawai', 'Umum' => 'Umum', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nomer_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
