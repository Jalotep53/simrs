<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PemeriksaanRalan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pemeriksaan-ralan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_perawatan')->textInput() ?>

    <?= $form->field($model, 'jam_rawat')->textInput() ?>

    <?= $form->field($model, 'suhu_tubuh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tensi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'respirasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tinggi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'berat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spo2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gcs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kesadaran')->dropDownList([ 'Compos Mentis' => 'Compos Mentis', 'Somnolence' => 'Somnolence', 'Sopor' => 'Sopor', 'Coma' => 'Coma', 'Alert' => 'Alert', 'Confusion' => 'Confusion', 'Voice' => 'Voice', 'Pain' => 'Pain', 'Unresponsive' => 'Unresponsive', 'Apatis' => 'Apatis', 'Delirium' => 'Delirium', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keluhan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alergi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lingkar_perut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rtl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penilaian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instruksi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'evaluasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
