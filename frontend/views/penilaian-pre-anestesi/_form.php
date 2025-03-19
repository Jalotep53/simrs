<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPreAnestesi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-pre-anestesi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_operasi')->textInput() ?>

    <?= $form->field($model, 'diagnosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rencana_tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'td')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'io2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pernapasan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_cardiovasculer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_paru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_abdomen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_extrimitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_endokrin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_ginjal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_obatobatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_laborat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisik_penunjang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_penyakit_alergiobat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_penyakit_alergilainnya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_penyakit_terapi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_kebiasaan_merokok')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'riwayat_kebiasaan_ket_merokok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_kebiasaan_alkohol')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'riwayat_kebiasaan_ket_alkohol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_kebiasaan_obat')->dropDownList([ '-' => '-', 'Obat Obatan' => 'Obat Obatan', 'Vitamin' => 'Vitamin', 'Jamu Jamuan' => 'Jamu Jamuan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'riwayat_kebiasaan_ket_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_medis_cardiovasculer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_medis_respiratory')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_medis_endocrine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_medis_lainnya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asa')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', 'E' => 'E', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'puasa')->textInput() ?>

    <?= $form->field($model, 'rencana_anestesi')->dropDownList([ 'GA' => 'GA', 'RA Spinal' => 'RA Spinal', 'RA Epidural' => 'RA Epidural', 'RA Combined' => 'RA Combined', 'Blok Syaraf' => 'Blok Syaraf', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'rencana_perawatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catatan_khusus')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
