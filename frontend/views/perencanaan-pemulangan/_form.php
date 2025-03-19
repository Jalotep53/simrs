<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PerencanaanPemulangan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perencanaan-pemulangan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rencana_pulang')->textInput() ?>

    <?= $form->field($model, 'alasan_masuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengaruh_ri_pasien_dan_keluarga')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_pengaruh_ri_pasien_dan_keluarga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengaruh_ri_pekerjaan_sekolah')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_pengaruh_ri_pekerjaan_sekolah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengaruh_ri_keuangan')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_pengaruh_ri_keuangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'antisipasi_masalah_saat_pulang')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_antisipasi_masalah_saat_pulang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bantuan_diperlukan_dalam')->dropDownList([ 'Menyiapkan Makanan' => 'Menyiapkan Makanan', 'Edukasi Kesehatan' => 'Edukasi Kesehatan', 'Makan' => 'Makan', 'Mandi' => 'Mandi', 'Diet' => 'Diet', 'Berpakaian' => 'Berpakaian', 'Menyiapkan Obat' => 'Menyiapkan Obat', 'Transportasi' => 'Transportasi', 'Minum Obat' => 'Minum Obat', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_bantuan_diperlukan_dalam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adakah_yang_membantu_keperluan')->dropDownList([ 'Tidak' => 'Tidak', 'Ada' => 'Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_adakah_yang_membantu_keperluan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pasien_tinggal_sendiri')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_pasien_tinggal_sendiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pasien_menggunakan_peralatan_medis')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_pasien_menggunakan_peralatan_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pasien_memerlukan_alat_bantu')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_pasien_memerlukan_alat_bantu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'memerlukan_perawatan_khusus')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_memerlukan_perawatan_khusus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bermasalah_memenuhi_kebutuhan')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_bermasalah_memenuhi_kebutuhan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'memiliki_nyeri_kronis')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_memiliki_nyeri_kronis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'memerlukan_edukasi_kesehatan')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_memerlukan_edukasi_kesehatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'memerlukan_keterampilkan_khusus')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_memerlukan_keterampilkan_khusus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pasien_keluarga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
