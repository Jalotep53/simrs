<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanBedahMulut $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-medis-ralan-bedah-mulut-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anamnesis')->dropDownList([ 'Autoanamnesis' => 'Autoanamnesis', 'Alloanamnesis' => 'Alloanamnesis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hubungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluhan_utama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rpk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alergi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keadaan')->dropDownList([ 'Baik' => 'Baik', 'Sedang' => 'Sedang', 'Lemah' => 'Lemah', 'Buruk' => 'Buruk', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kesadaran')->dropDownList([ 'Compos Mentis' => 'Compos Mentis', 'Apatis' => 'Apatis', 'Somnolen' => 'Somnolen', 'Sopor' => 'Sopor', 'Koma' => 'Koma', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nyeri')->dropDownList([ 'Tidak Nyeri' => 'Tidak Nyeri', 'Nyeri Ringan' => 'Nyeri Ringan', 'Nyeri Sedang' => 'Nyeri Sedang', 'Nyeri Berat' => 'Nyeri Berat', 'Nyeri Sangat Berat' => 'Nyeri Sangat Berat', 'Nyeri Tak Tertahankan' => 'Nyeri Tak Tertahankan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'td')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_nutrisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kulit')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_kulit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kepala')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_kepala')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mata')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_mata')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'leher')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_leher')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelenjar')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_kelenjar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dada')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_dada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perut')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_perut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ekstremitas')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_ekstremitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wajah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gigigeligi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penunjang')->textInput(['maxlength' => true]) ?>

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
