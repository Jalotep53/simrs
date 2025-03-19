<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PasienBayi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pasien-bayi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'umur_ibu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_ayah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'umur_ayah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'berat_badan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'panjang_badan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lingkar_kepala')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'proses_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anakke')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jam_lahir')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penyulit_kehamilan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ketuban')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lingkar_perut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lingkar_dada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penolong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_skl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'g')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'u1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'w1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'n1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'u5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'w5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'n5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'u10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'w10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'n10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resusitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obat_diberikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mikasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mikonium')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
