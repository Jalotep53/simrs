<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPernyataanPasienUmum $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-pernyataan-pasien-umum-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'nama_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_ktppj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_lahirpj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lahirpj')->textInput() ?>

    <?= $form->field($model, 'jkpj')->dropDownList([ 'L' => 'L', 'P' => 'P', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alamatpj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hubungan')->dropDownList([ 'Suami' => 'Suami', 'Istri' => 'Istri', 'Anak' => 'Anak', 'Ayah' => 'Ayah', 'Ibu' => 'Ibu', 'Saudara' => 'Saudara', 'Keponakan' => 'Keponakan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
