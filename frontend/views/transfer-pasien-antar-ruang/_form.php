<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TransferPasienAntarRuang $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transfer-pasien-antar-ruang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_masuk')->textInput() ?>

    <?= $form->field($model, 'tanggal_pindah')->textInput() ?>

    <?= $form->field($model, 'asal_ruang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ruang_selanjutnya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_utama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_sekunder')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'indikasi_pindah_ruang')->dropDownList([ 'Kondisi Pasien Stabil' => 'Kondisi Pasien Stabil', 'Kondisi Pasien Tidak Ada Perubahan' => 'Kondisi Pasien Tidak Ada Perubahan', 'Kondisi Pasien Memburuk' => 'Kondisi Pasien Memburuk', 'Fasilitas Kurang Memadai' => 'Fasilitas Kurang Memadai', 'Fasilitas Butuh Lebih Baik' => 'Fasilitas Butuh Lebih Baik', 'Tenaga Membutuhkan Yang Lebih Ahli' => 'Tenaga Membutuhkan Yang Lebih Ahli', 'Tenaga Kurang' => 'Tenaga Kurang', 'Lain-lain' => 'Lain-lain', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_indikasi_pindah_ruang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prosedur_yang_sudah_dilakukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obat_yang_telah_diberikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metode_pemindahan_pasien')->dropDownList([ 'Kursi Roda' => 'Kursi Roda', 'Tempat Tidur' => 'Tempat Tidur', 'Brankar' => 'Brankar', 'Jalan Sendiri' => 'Jalan Sendiri', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'peralatan_yang_menyertai')->dropDownList([ 'Oksigen Portable' => 'Oksigen Portable', 'Infus' => 'Infus', 'NGT' => 'NGT', 'Syringe Pump' => 'Syringe Pump', 'Suction' => 'Suction', 'Kateter Urin' => 'Kateter Urin', 'Tidak Ada' => 'Tidak Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_peralatan_yang_menyertai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan_penunjang_yang_dilakukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pasien_keluarga_menyetujui')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nama_menyetujui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hubungan_menyetujui')->dropDownList([ 'Kakak' => 'Kakak', 'Adik' => 'Adik', 'Saudara' => 'Saudara', 'Keluarga' => 'Keluarga', 'Kakek' => 'Kakek', 'Nenek' => 'Nenek', 'Orang Tua' => 'Orang Tua', 'Suami' => 'Suami', 'Istri' => 'Istri', 'Penanggung Jawab' => 'Penanggung Jawab', 'Menantu' => 'Menantu', 'Ipar' => 'Ipar', 'Mertua' => 'Mertua', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keluhan_utama_sebelum_transfer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keadaan_umum_sebelum_transfer')->dropDownList([ 'Compos Mentis' => 'Compos Mentis', 'Gelisah' => 'Gelisah', 'Delirium' => 'Delirium', 'Koma' => 'Koma', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'td_sebelum_transfer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadi_sebelum_transfer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr_sebelum_transfer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu_sebelum_transfer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluhan_utama_sesudah_transfer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keadaan_umum_sesudah_transfer')->dropDownList([ 'Compos Mentis' => 'Compos Mentis', 'Gelisah' => 'Gelisah', 'Delirium' => 'Delirium', 'Koma' => 'Koma', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'td_sesudah_transfer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadi_sesudah_transfer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr_sesudah_transfer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu_sesudah_transfer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip_menyerahkan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip_menerima')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
