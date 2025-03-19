<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanNeurologi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-medis-ralan-neurologi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anamnesis')->dropDownList([ 'Autoanamnesis' => 'Autoanamnesis', 'Alloanamnesis' => 'Alloanamnesis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hubungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluhan_utama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rpd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rpo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alergi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kesadaran')->dropDownList([ 'Compos Mentis' => 'Compos Mentis', 'Apatis' => 'Apatis', 'Delirum' => 'Delirum', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Skor < 2' => 'Skor < 2', 'Skor >= 2' => 'Skor >= 2', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'td')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nyeri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gcs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kepala')->dropDownList([ 'Normal' => 'Normal', 'Abnormal' => 'Abnormal', 'Tidak Diperiksa' => 'Tidak Diperiksa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_kepala')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'thoraks')->dropDownList([ 'Normal' => 'Normal', 'Abnormal' => 'Abnormal', 'Tidak Diperiksa' => 'Tidak Diperiksa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_thoraks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'abdomen')->dropDownList([ 'Normal' => 'Normal', 'Abnormal' => 'Abnormal', 'Tidak Diperiksa' => 'Tidak Diperiksa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_abdomen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ekstremitas')->dropDownList([ 'Normal' => 'Normal', 'Abnormal' => 'Abnormal', 'Tidak Diperiksa' => 'Tidak Diperiksa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_ekstremitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'columna')->dropDownList([ 'Normal' => 'Normal', 'Abnormal' => 'Abnormal', 'Tidak Diperiksa' => 'Tidak Diperiksa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_columna')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'muskulos')->dropDownList([ 'Normal' => 'Normal', 'Abnormal' => 'Abnormal', 'Tidak Diperiksa' => 'Tidak Diperiksa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_muskulos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lainnya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penunjanglain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosis2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'permasalahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'terapi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edukasi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
