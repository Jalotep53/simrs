<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PasienCorona $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pasien-corona-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_pengenal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inisial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_masuk')->textInput() ?>

    <?= $form->field($model, 'kode_jk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_jk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'kode_kewarganegaraan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_kewarganegaraan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_penularan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sumber_penularan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_kelurahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_kelurahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_kecamatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_kecamatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_kabupaten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_kabupaten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_propinsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_propinsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_keluar')->textInput() ?>

    <?= $form->field($model, 'kode_statuskeluar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_statuskeluar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lapor')->textInput() ?>

    <?= $form->field($model, 'kode_statusrawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_statusrawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_statusisolasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_statusisolasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notelp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sebab_kematian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_jenis_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_jenis_pasien')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
