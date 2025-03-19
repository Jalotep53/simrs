<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianFisioterapi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-fisioterapi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'informasi')->dropDownList([ 'Autoanamnesis' => 'Autoanamnesis', 'Alloanamnesis' => 'Alloanamnesis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keluhan_utama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rpd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'td')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nyeri_tekan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nyeri_gerak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nyeri_diam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'palpasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'luas_gerak_sendi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kekuatan_otot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'statis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dinamis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kognitif')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auskultasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alat_bantu')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ket_bantu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prothesa')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ket_pro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deformitas')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ket_deformitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resikojatuh')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ket_resikojatuh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adl')->dropDownList([ 'Mandiri' => 'Mandiri', 'Dibantu' => 'Dibantu', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'lainlain_fungsional')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ket_fisik')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pemeriksaan_musculoskeletal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan_neuromuscular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan_cardiopulmonal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan_integument')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengukuran_musculoskeletal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengukuran_neuromuscular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengukuran_cardiopulmonal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengukuran_integument')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penunjang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosis_fisio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rencana_terapi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
