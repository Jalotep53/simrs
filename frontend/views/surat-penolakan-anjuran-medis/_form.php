<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPenolakanAnjuranMedis $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-penolakan-anjuran-medis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'hubungan')->dropDownList([ 'Suami' => 'Suami', 'Istri' => 'Istri', 'Anak' => 'Anak', 'Ayah' => 'Ayah', 'Ibu' => 'Ibu', 'Saudara' => 'Saudara', 'Keponakan' => 'Keponakan', 'Adik' => 'Adik', 'Kakak' => 'Kakak', 'Orang Tua' => 'Orang Tua', 'Diri Sendiri' => 'Diri Sendiri', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nama_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'umur_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_ktppj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jkpj')->dropDownList([ 'L' => 'L', 'P' => 'P', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_penolakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alasan_penolakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'informasi_risiko_penolakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
