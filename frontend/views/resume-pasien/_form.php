<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ResumePasien $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="resume-pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluhan_utama')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jalannya_penyakit')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pemeriksaan_penunjang')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'hasil_laborat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'diagnosa_utama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_diagnosa_utama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_sekunder')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_diagnosa_sekunder')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_sekunder2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_diagnosa_sekunder2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_sekunder3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_diagnosa_sekunder3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_sekunder4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_diagnosa_sekunder4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prosedur_utama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_prosedur_utama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prosedur_sekunder')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_prosedur_sekunder')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prosedur_sekunder2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_prosedur_sekunder2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prosedur_sekunder3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_prosedur_sekunder3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kondisi_pulang')->dropDownList([ 'Hidup' => 'Hidup', 'Meninggal' => 'Meninggal', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'obat_pulang')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
