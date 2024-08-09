<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Pegawai $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jk')->dropDownList([ 'Pria' => 'Pria', 'Wanita' => 'Wanita', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jbtn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jnj_jabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_kelompok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_resiko')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_emergency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'departemen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bidang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stts_wp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stts_kerja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npwp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pendidikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gapok')->textInput() ?>

    <?= $form->field($model, 'tmp_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mulai_kerja')->textInput() ?>

    <?= $form->field($model, 'ms_kerja')->dropDownList([ '<1' => '<1', 'PT' => 'PT', 'FT>1' => 'FT>1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'indexins')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekening')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stts_aktif')->dropDownList([ 'AKTIF' => 'AKTIF', 'CUTI' => 'CUTI', 'KELUAR' => 'KELUAR', 'TENAGA LUAR' => 'TENAGA LUAR', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'wajibmasuk')->textInput() ?>

    <?= $form->field($model, 'pengurang')->textInput() ?>

    <?= $form->field($model, 'indek')->textInput() ?>

    <?= $form->field($model, 'mulai_kontrak')->textInput() ?>

    <?= $form->field($model, 'cuti_diambil')->textInput() ?>

    <?= $form->field($model, 'dankes')->textInput() ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
