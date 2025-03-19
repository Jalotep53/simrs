<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanRehabMedik $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-medis-ralan-rehab-medik-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anamnesis')->dropDownList([ 'Autoanamnesis' => 'Autoanamnesis', 'Alloanamnesis' => 'Alloanamnesis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hubungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluhan_utama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rpd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alergi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kesadaran')->dropDownList([ 'Compos Mentis' => 'Compos Mentis', 'Apatis' => 'Apatis', 'Delirum' => 'Delirum', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nyeri')->dropDownList([ 'Tidak Nyeri' => 'Tidak Nyeri', 'Nyeri Sedang' => 'Nyeri Sedang', 'Nyeri Sangat Hebat' => 'Nyeri Sangat Hebat', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skala_nyeri')->dropDownList([ '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'td')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bb')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'resiko_jatuh')->dropDownList([ 'Tidak Berisiko' => 'Tidak Berisiko', 'Berisiko Sedang' => 'Berisiko Sedang', 'Berisiko Tinggi' => 'Berisiko Tinggi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'resiko_nutrisional')->dropDownList([ 'Tidak Berisiko Malnutrisi' => 'Tidak Berisiko Malnutrisi', 'Berisiko Malnutrisi' => 'Berisiko Malnutrisi', 'Malnutrisi' => 'Malnutrisi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kebutuhan_fungsional')->dropDownList([ 'Tidak Perlu Bantuan' => 'Tidak Perlu Bantuan', 'Perlu Bantuan' => 'Perlu Bantuan', 'Perlu Bantuan Total' => 'Perlu Bantuan Total', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'diagnosa_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_fungsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penunjang_lain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'okupasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wicara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'akupuntur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tatalain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'frekuensi_terapi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisioterapi')->textInput() ?>

    <?= $form->field($model, 'terapi_okupasi')->textInput() ?>

    <?= $form->field($model, 'terapi_wicara')->textInput() ?>

    <?= $form->field($model, 'terapi_akupuntur')->textInput() ?>

    <?= $form->field($model, 'terapi_lainnya')->textInput() ?>

    <?= $form->field($model, 'edukasi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
