<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PersetujuanPenundaanPelayanan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="persetujuan-penundaan-pelayanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'nama_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'umur_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_ktppj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamatpj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telppj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hubungan')->dropDownList([ 'Suami' => 'Suami', 'Istri' => 'Istri', 'Anak' => 'Anak', 'Ayah' => 'Ayah', 'Ibu' => 'Ibu', 'Saudara' => 'Saudara', 'Keponakan' => 'Keponakan', 'Diri Sendiri' => 'Diri Sendiri', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ruang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dokter_pengirim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pelayanan_dilakukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ditunda_karena')->dropDownList([ 'Kerusakan Alat' => 'Kerusakan Alat', 'Kondisi Umum Pasien' => 'Kondisi Umum Pasien', 'Penundaan Penjadwalan' => 'Penundaan Penjadwalan', 'Pemadaman Instalasi Listrik' => 'Pemadaman Instalasi Listrik', 'Lain-lain' => 'Lain-lain', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_ditunda')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alternatif_diberikan')->dropDownList([ 'Dijadwalkan Ulang' => 'Dijadwalkan Ulang', 'Dirujuk Ke Layanan Kesehatan Lain' => 'Dirujuk Ke Layanan Kesehatan Lain', 'Dikembalikan Kepada Dokter Pengirim' => 'Dikembalikan Kepada Dokter Pengirim', 'Lain-lain' => 'Lain-lain', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_alternatif_diberikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
