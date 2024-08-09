<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RegPeriksa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="reg-periksa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_reg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_registrasi')->textInput() ?>

    <?= $form->field($model, 'jam_reg')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_poli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_jawab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'almt_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hubunganpj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'biaya_reg')->textInput() ?>

    <?= $form->field($model, 'stts')->dropDownList([ 'Belum' => 'Belum', 'Sudah' => 'Sudah', 'Batal' => 'Batal', 'Berkas Diterima' => 'Berkas Diterima', 'Dirujuk' => 'Dirujuk', 'Meninggal' => 'Meninggal', 'Dirawat' => 'Dirawat', 'Pulang Paksa' => 'Pulang Paksa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'stts_daftar')->dropDownList([ '-' => '-', 'Lama' => 'Lama', 'Baru' => 'Baru', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status_lanjut')->dropDownList([ 'Ralan' => 'Ralan', 'Ranap' => 'Ranap', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kd_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'umurdaftar')->textInput() ?>

    <?= $form->field($model, 'sttsumur')->dropDownList([ 'Th' => 'Th', 'Bl' => 'Bl', 'Hr' => 'Hr', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status_bayar')->dropDownList([ 'Sudah Bayar' => 'Sudah Bayar', 'Belum Bayar' => 'Belum Bayar', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status_poli')->dropDownList([ 'Lama' => 'Lama', 'Baru' => 'Baru', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
