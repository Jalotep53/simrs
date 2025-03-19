<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianLevelKecemasanRanapAnak $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-level-kecemasan-ranap-anak-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'cemas')->textInput() ?>

    <?= $form->field($model, 'firasat_buruk')->textInput() ?>

    <?= $form->field($model, 'takut_pikiran_sendiri')->textInput() ?>

    <?= $form->field($model, 'mudah_tersinggung')->textInput() ?>

    <?= $form->field($model, 'merasa_tegang')->textInput() ?>

    <?= $form->field($model, 'lesu')->textInput() ?>

    <?= $form->field($model, 'tak_bisa_istirahat_tenang')->textInput() ?>

    <?= $form->field($model, 'mudah_terkejut')->textInput() ?>

    <?= $form->field($model, 'mudah_menangis')->textInput() ?>

    <?= $form->field($model, 'gemetar')->textInput() ?>

    <?= $form->field($model, 'gelisah')->textInput() ?>

    <?= $form->field($model, 'takut_pada_gelap')->textInput() ?>

    <?= $form->field($model, 'takut_pada_orangasing')->textInput() ?>

    <?= $form->field($model, 'takut_pada_kerumunan_banyak_orang')->textInput() ?>

    <?= $form->field($model, 'takut_pada_binatang_besar')->textInput() ?>

    <?= $form->field($model, 'takut_pada_keramaian_lalu_lintas')->textInput() ?>

    <?= $form->field($model, 'takut_ditinggal_sendiri')->textInput() ?>

    <?= $form->field($model, 'sulit_tidur')->textInput() ?>

    <?= $form->field($model, 'terbangun_malam_hari')->textInput() ?>

    <?= $form->field($model, 'tidur_tidak_nyeyak')->textInput() ?>

    <?= $form->field($model, 'mimpi_buruk')->textInput() ?>

    <?= $form->field($model, 'bangun_dengan_lesu')->textInput() ?>

    <?= $form->field($model, 'banyak_mengalami_mimpi')->textInput() ?>

    <?= $form->field($model, 'mimpi_menakutkan')->textInput() ?>

    <?= $form->field($model, 'sulit_konsentrasi')->textInput() ?>

    <?= $form->field($model, 'daya_ingat_buruk')->textInput() ?>

    <?= $form->field($model, 'hilangnya_minat')->textInput() ?>

    <?= $form->field($model, 'berkurangnya_kesenangan_pada_hobi')->textInput() ?>

    <?= $form->field($model, 'sedih')->textInput() ?>

    <?= $form->field($model, 'bangun_dini_hari')->textInput() ?>

    <?= $form->field($model, 'perasaan_berubah')->textInput() ?>

    <?= $form->field($model, 'sakit_nyeri_di_otot')->textInput() ?>

    <?= $form->field($model, 'kaku')->textInput() ?>

    <?= $form->field($model, 'kedutan_otot')->textInput() ?>

    <?= $form->field($model, 'gigi_gemerutuk')->textInput() ?>

    <?= $form->field($model, 'suara_tidak_stabil')->textInput() ?>

    <?= $form->field($model, 'tinnitus')->textInput() ?>

    <?= $form->field($model, 'penglihatan_kabur')->textInput() ?>

    <?= $form->field($model, 'muka_merah_gejala_somatic')->textInput() ?>

    <?= $form->field($model, 'merasa_lemah')->textInput() ?>

    <?= $form->field($model, 'perasaan_ditusuk')->textInput() ?>

    <?= $form->field($model, 'takhikardia')->textInput() ?>

    <?= $form->field($model, 'berdebar')->textInput() ?>

    <?= $form->field($model, 'nyeri_di_dada')->textInput() ?>

    <?= $form->field($model, 'denyut_nadi_mengeras')->textInput() ?>

    <?= $form->field($model, 'perasaan_lesu')->textInput() ?>

    <?= $form->field($model, 'detak_jantung_menghilang')->textInput() ?>

    <?= $form->field($model, 'merasa_tertekan')->textInput() ?>

    <?= $form->field($model, 'perasaan_tercekik')->textInput() ?>

    <?= $form->field($model, 'sering_menarik_napas')->textInput() ?>

    <?= $form->field($model, 'napas_pendek')->textInput() ?>

    <?= $form->field($model, 'bulu_berdiri')->textInput() ?>

    <?= $form->field($model, 'sulit_menelan')->textInput() ?>

    <?= $form->field($model, 'perut_melilit')->textInput() ?>

    <?= $form->field($model, 'ganguan_pencernaan')->textInput() ?>

    <?= $form->field($model, 'rasa_kembung')->textInput() ?>

    <?= $form->field($model, 'nyeri_makan')->textInput() ?>

    <?= $form->field($model, 'terbakar_perut')->textInput() ?>

    <?= $form->field($model, 'sukar_bab')->textInput() ?>

    <?= $form->field($model, 'muntah')->textInput() ?>

    <?= $form->field($model, 'bab_lembek')->textInput() ?>

    <?= $form->field($model, 'kehilangan_bb')->textInput() ?>

    <?= $form->field($model, 'mual')->textInput() ?>

    <?= $form->field($model, 'sering_bak')->textInput() ?>

    <?= $form->field($model, 'tidak_bisa_menahan_kencing')->textInput() ?>

    <?= $form->field($model, 'menjadi_dingin')->textInput() ?>

    <?= $form->field($model, 'manorrhagia')->textInput() ?>

    <?= $form->field($model, 'amenorrhoea')->textInput() ?>

    <?= $form->field($model, 'ejakulasi_praecocks')->textInput() ?>

    <?= $form->field($model, 'ereksi_hilang')->textInput() ?>

    <?= $form->field($model, 'impotensi')->textInput() ?>

    <?= $form->field($model, 'mulut_kering')->textInput() ?>

    <?= $form->field($model, 'muka_merah_gejala_otonom')->textInput() ?>

    <?= $form->field($model, 'mudah_berkeringat')->textInput() ?>

    <?= $form->field($model, 'bulu_berdiri_gejala_otonom')->textInput() ?>

    <?= $form->field($model, 'sakit_kepala')->textInput() ?>

    <?= $form->field($model, 'gelisah_wawancara')->textInput() ?>

    <?= $form->field($model, 'napas_pendek_wawancara')->textInput() ?>

    <?= $form->field($model, 'jari_gemetar')->textInput() ?>

    <?= $form->field($model, 'kerut_kening')->textInput() ?>

    <?= $form->field($model, 'muka_tegang')->textInput() ?>

    <?= $form->field($model, 'tonus_meningkat')->textInput() ?>

    <?= $form->field($model, 'tidak_tenang')->textInput() ?>

    <?= $form->field($model, 'muka_merah_wawancara')->textInput() ?>

    <?= $form->field($model, 'total_skor')->textInput() ?>

    <?= $form->field($model, 'keterangan_skor')->dropDownList([ 'Tidak Mengalami Kecemasan' => 'Tidak Mengalami Kecemasan', 'Kecemasan Ringan' => 'Kecemasan Ringan', 'Kecemasan Sedang' => 'Kecemasan Sedang', 'Kecemasan Berat' => 'Kecemasan Berat', 'Kecemasan Sangat Berat' => 'Kecemasan Sangat Berat', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
