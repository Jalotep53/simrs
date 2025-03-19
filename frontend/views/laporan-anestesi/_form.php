<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\LaporanAnestesi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="laporan-anestesi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mulai')->textInput() ?>

    <?= $form->field($model, 'selesai')->textInput() ?>

    <?= $form->field($model, 'tempat_pemantauan')->dropDownList([ 'OK' => 'OK', 'Cathlab' => 'Cathlab', 'ICU/ICCU' => 'ICU/ICCU', 'Radiologi' => 'Radiologi', 'Endoscopy' => 'Endoscopy', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tindakan_operasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'operator1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asisten_operator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dokter_anestesi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'operator2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'onloop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penata_anestesi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_preop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_postop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_asa')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', 'E' => 'E', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'karena')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'premedikasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ttv_premedikasi_td')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ttv_premedikasi_rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ttv_premedikasi_hr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ttv_premedikasi_spo2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ttv_premedikasi_ekg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ttv_premedikasi_suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ttv_premedikasi_lain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lama_operasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lama_anastesi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keadaan_umum_bb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keadaan_umum_tb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keadaan_umum_alergi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keadaan_umum_malampathy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keadaan_umum_e')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keadaan_umum_v')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keadaan_umum_m')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_anestesi_lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_anestesi_sedasi')->dropDownList([ 'Ringan' => 'Ringan', 'Sedang' => 'Sedang', 'Berat' => 'Berat', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jenis_anestesi_regional')->dropDownList([ 'Spinal' => 'Spinal', 'Epidural' => 'Epidural', 'Combined' => 'Combined', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jenis_anestesi_ga_ett')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jenis_anestesi_ga_ntt')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jenis_anestesi_ga_ema')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jenis_anestesi_ga_bm')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'posisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perdarahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'urine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'komplikasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ekstubasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_pack')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dipindahkan_ke')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serah_terima_pasien')->dropDownList([ 'RR' => 'RR', 'ICU/ICCU' => 'ICU/ICCU', 'NICU/PICU' => 'NICU/PICU', 'ODC' => 'ODC', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip_recovery_room')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
