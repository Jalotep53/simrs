<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Pasien $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jk')->dropDownList([ 'L' => 'L', 'P' => 'P', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tmp_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'nm_ibu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gol_darah')->dropDownList([ 'A' => 'A', 'B' => 'B', 'O' => 'O', 'AB' => 'AB', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stts_nikah')->dropDownList([ 'BELUM MENIKAH' => 'BELUM MENIKAH', 'MENIKAH' => 'MENIKAH', 'JANDA' => 'JANDA', 'DUDHA' => 'DUDHA', 'JOMBLO' => 'JOMBLO', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'agama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_daftar')->textInput() ?>

    <?= $form->field($model, 'no_tlp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'umur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pnd')->dropDownList([ 'TS' => 'TS', 'TK' => 'TK', 'SD' => 'SD', 'SMP' => 'SMP', 'SMA' => 'SMA', 'SLTA/SEDERAJAT' => 'SLTA/SEDERAJAT', 'D1' => 'D1', 'D2' => 'D2', 'D3' => 'D3', 'D4' => 'D4', 'S1' => 'S1', 'S2' => 'S2', 'S3' => 'S3', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keluarga')->dropDownList([ 'AYAH' => 'AYAH', 'IBU' => 'IBU', 'ISTRI' => 'ISTRI', 'SUAMI' => 'SUAMI', 'SAUDARA' => 'SAUDARA', 'ANAK' => 'ANAK', 'DIRI SENDIRI' => 'DIRI SENDIRI', 'LAIN-LAIN' => 'LAIN-LAIN', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'namakeluarga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_peserta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_kel')->textInput() ?>

    <?= $form->field($model, 'kd_kec')->textInput() ?>

    <?= $form->field($model, 'kd_kab')->textInput() ?>

    <?= $form->field($model, 'pekerjaanpj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamatpj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelurahanpj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatanpj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kabupatenpj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perusahaan_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suku_bangsa')->textInput() ?>

    <?= $form->field($model, 'bahasa_pasien')->textInput() ?>

    <?= $form->field($model, 'cacat_fisik')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_prop')->textInput() ?>

    <?= $form->field($model, 'propinsipj')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
