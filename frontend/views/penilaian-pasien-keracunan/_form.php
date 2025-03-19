<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPasienKeracunan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-pasien-keracunan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anamnesis')->dropDownList([ 'Autoanamnesis' => 'Autoanamnesis', 'Alloanamnesis' => 'Alloanamnesis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hubungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_kejadian')->dropDownList([ 'Rumah' => 'Rumah', 'Kantor' => 'Kantor', 'Tempat Kerja' => 'Tempat Kerja', 'Tempat Hiburan' => 'Tempat Hiburan', 'Lain-lain' => 'Lain-lain', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_tempat_kejadian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluhan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_penyakit_sekarang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hamil')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'menyusui')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penyebab')->dropDownList([ 'NAPZA' => 'NAPZA', 'Obat' => 'Obat', 'Obat Tradisional' => 'Obat Tradisional', 'Makanan/Minuman' => 'Makanan/Minuman', 'Suplemen Makanan/Vitamin' => 'Suplemen Makanan/Vitamin', 'Kosmetik' => 'Kosmetik', 'Bahan Kimia' => 'Bahan Kimia', 'Pestisida' => 'Pestisida', 'Gigitan Ular' => 'Gigitan Ular', 'Binatang Selain Ular' => 'Binatang Selain Ular', 'Tumbuhan Beracun' => 'Tumbuhan Beracun', 'Pencemar Lingkungan' => 'Pencemar Lingkungan', 'Gas' => 'Gas', 'Tidak Diketahui' => 'Tidak Diketahui', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nama_bahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_bahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipe_pemaparan')->dropDownList([ 'Mulut' => 'Mulut', 'Mata' => 'Mata', 'Gigitan' => 'Gigitan', 'Injeksi' => 'Injeksi', 'Inhalasi' => 'Inhalasi', 'Sengatan' => 'Sengatan', 'Kulit' => 'Kulit', 'Lain-lain' => 'Lain-lain', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_tipe_pemaparan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipe_kejadian')->dropDownList([ 'Tidak Disengaja' => 'Tidak Disengaja', 'Disengaja' => 'Disengaja', 'Tidak Diketahui' => 'Tidak Diketahui', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'bau_bahan')->dropDownList([ 'Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_bau_bahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pupil')->dropDownList([ 'Normal' => 'Normal', 'Isokor' => 'Isokor', 'Unisokor' => 'Unisokor', 'Miosis' => 'Miosis', 'Midriasis' => 'Midriasis', 'Lainnya' => 'Lainnya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_pupil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kesadaran')->dropDownList([ 'Compos Mentis' => 'Compos Mentis', 'Apatis' => 'Apatis', 'Somnolen' => 'Somnolen', 'Sopor' => 'Sopor', 'Koma' => 'Koma', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'td')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'urine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengobatan_sebelum_igd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan_penunjang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penatalaksanaan_diberikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tindak_lanjut')->dropDownList([ 'Rawat Jalan' => 'Rawat Jalan', 'Rawat Inap' => 'Rawat Inap', 'Dirujuk' => 'Dirujuk', 'Pulang APS' => 'Pulang APS', 'Pulang Sembuh' => 'Pulang Sembuh', 'Meninggal' => 'Meninggal', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
