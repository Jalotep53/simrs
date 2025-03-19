<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\EdukasiPasienKeluargaRj $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="edukasi-pasien-keluarga-rj-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bicara')->dropDownList([ 'Normal' => 'Normal', 'Gangguan Bicara' => 'Gangguan Bicara', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_bicara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bahasa_sehari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perlu_penerjemah')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_penerjemah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bahasa_isyarat')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'cara_belajar')->dropDownList([ 'Menulis' => 'Menulis', 'Audio-Visual/Gambar' => 'Audio-Visual/Gambar', 'Diskusi' => 'Diskusi', 'Simulasi' => 'Simulasi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hambatan_belajar')->dropDownList([ 'Tidak Ada' => 'Tidak Ada', 'Takut/Gelisah' => 'Takut/Gelisah', 'Tidak Tertarik' => 'Tidak Tertarik', 'Nyeri Tidak Nyaman' => 'Nyeri Tidak Nyaman', 'Buta Huruf' => 'Buta Huruf', 'Gangguan Kognitif' => 'Gangguan Kognitif', 'Lain-lain' => 'Lain-lain', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_hambatan_belajar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kemampuan_belajar')->dropDownList([ 'Mampu Menerima Informasi' => 'Mampu Menerima Informasi', 'Tidak Mampu Menerima Informasi' => 'Tidak Mampu Menerima Informasi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_kemampuan_belajar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penyakitnya_merupakan')->dropDownList([ 'Ujian/Cobaan' => 'Ujian/Cobaan', 'Kutukan' => 'Kutukan', 'Lain-lain' => 'Lain-lain', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_penyakitnya_merupakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keputusan_memilih_layanan')->dropDownList([ 'Sendiri' => 'Sendiri', 'Keluarga' => 'Keluarga', 'Lain-lain' => 'Lain-lain', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_keputusan_memilih_layanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keyakinan_terhadap_terapi')->dropDownList([ 'Pasrah' => 'Pasrah', 'Yakin Sembuh Jika Kontrol Teratur' => 'Yakin Sembuh Jika Kontrol Teratur', 'Yakin Sembuh Jika Minum Obat Teratur' => 'Yakin Sembuh Jika Minum Obat Teratur', 'Lain-lain' => 'Lain-lain', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_keyakinan_terhadap_terapi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aspek_keyakinan_dipertimbangkan')->dropDownList([ 'Ada' => 'Ada', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_aspek_keyakinan_dipertimbangkan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kesediaan_menerima_informasi')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'topik_edukasi_penyakit')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'topik_edukasi_rencana_tindakan')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'topik_edukasi_pengobatan')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'topik_edukasi_hasil_layanan')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
