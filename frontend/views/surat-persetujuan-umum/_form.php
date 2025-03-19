<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPersetujuanUmum $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-persetujuan-umum-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'pengobatan_kepada')->dropDownList([ 'Suami' => 'Suami', 'Istri' => 'Istri', 'Anak' => 'Anak', 'Ayah' => 'Ayah', 'Ibu' => 'Ibu', 'Saudara' => 'Saudara', 'Keponakan' => 'Keponakan', 'Adik' => 'Adik', 'Kakak' => 'Kakak', 'Orang Tua' => 'Orang Tua', 'Diri Sendiri' => 'Diri Sendiri', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nilai_kepercayaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'umur_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_ktppj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jkpj')->dropDownList([ 'L' => 'L', 'P' => 'P', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'bertindak_atas')->dropDownList([ 'Suami' => 'Suami', 'Istri' => 'Istri', 'Anak' => 'Anak', 'Ayah' => 'Ayah', 'Saudara' => 'Saudara', 'Keponakan' => 'Keponakan', 'Cucu' => 'Cucu', 'Kakek' => 'Kakek', 'Nenek' => 'Nenek', 'Kakak' => 'Kakak', 'Adik' => 'Adik', 'Diri Sendiri' => 'Diri Sendiri', 'Ibu' => 'Ibu', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
