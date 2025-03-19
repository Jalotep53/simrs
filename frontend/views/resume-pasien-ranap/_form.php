<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ResumePasienRanap $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="resume-pasien-ranap-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_awal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alasan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluhan_utama')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pemeriksaan_fisik')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jalannya_penyakit')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pemeriksaan_penunjang')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'hasil_laborat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tindakan_dan_operasi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'obat_di_rs')->textarea(['rows' => 6]) ?>

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

    <?= $form->field($model, 'alergi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diet')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lab_belum')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'edukasi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cara_keluar')->dropDownList([ 'Atas Izin Dokter' => 'Atas Izin Dokter', 'Pindah RS' => 'Pindah RS', 'Pulang Atas Permintaan Sendiri' => 'Pulang Atas Permintaan Sendiri', 'Lainnya' => 'Lainnya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ket_keluar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keadaan')->dropDownList([ 'Membaik' => 'Membaik', 'Sembuh' => 'Sembuh', 'Keadaan Khusus' => 'Keadaan Khusus', 'Meninggal' => 'Meninggal', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ket_keadaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dilanjutkan')->dropDownList([ 'Kembali Ke RS' => 'Kembali Ke RS', 'RS Lain' => 'RS Lain', 'Dokter Luar' => 'Dokter Luar', 'Puskesmes' => 'Puskesmes', 'Lainnya' => 'Lainnya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ket_dilanjutkan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kontrol')->textInput() ?>

    <?= $form->field($model, 'obat_pulang')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
