<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanAnak $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-medis-ralan-anak-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anamnesis')->dropDownList([ 'Autoanamnesis' => 'Autoanamnesis', 'Alloanamnesis' => 'Alloanamnesis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hubungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluhan_utama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rpd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rpk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rpo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alergi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keadaan')->dropDownList([ 'Sehat' => 'Sehat', 'Sakit Ringan' => 'Sakit Ringan', 'Sakit Sedang' => 'Sakit Sedang', 'Sakit Berat' => 'Sakit Berat', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'gcs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kesadaran')->dropDownList([ 'Compos Mentis' => 'Compos Mentis', 'Apatis' => 'Apatis', 'Somnolen' => 'Somnolen', 'Sopor' => 'Sopor', 'Koma' => 'Koma', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'td')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kepala')->dropDownList([ 'Normal' => 'Normal', 'Abnormal' => 'Abnormal', 'Tidak Diperiksa' => 'Tidak Diperiksa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'mata')->dropDownList([ 'Normal' => 'Normal', 'Abnormal' => 'Abnormal', 'Tidak Diperiksa' => 'Tidak Diperiksa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'gigi')->dropDownList([ 'Normal' => 'Normal', 'Abnormal' => 'Abnormal', 'Tidak Diperiksa' => 'Tidak Diperiksa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tht')->dropDownList([ 'Normal' => 'Normal', 'Abnormal' => 'Abnormal', 'Tidak Diperiksa' => 'Tidak Diperiksa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'thoraks')->dropDownList([ 'Normal' => 'Normal', 'Abnormal' => 'Abnormal', 'Tidak Diperiksa' => 'Tidak Diperiksa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'abdomen')->dropDownList([ 'Normal' => 'Normal', 'Abnormal' => 'Abnormal', 'Tidak Diperiksa' => 'Tidak Diperiksa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'genital')->dropDownList([ 'Normal' => 'Normal', 'Abnormal' => 'Abnormal', 'Tidak Diperiksa' => 'Tidak Diperiksa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ekstremitas')->dropDownList([ 'Normal' => 'Normal', 'Abnormal' => 'Abnormal', 'Tidak Diperiksa' => 'Tidak Diperiksa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kulit')->dropDownList([ 'Normal' => 'Normal', 'Abnormal' => 'Abnormal', 'Tidak Diperiksa' => 'Tidak Diperiksa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ket_fisik')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ket_lokalis')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'penunjang')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'diagnosis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tata')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'konsul')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
