<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianLevelKecemasanRanapAnakSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-level-kecemasan-ranap-anak-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'cemas') ?>

    <?= $form->field($model, 'firasat_buruk') ?>

    <?= $form->field($model, 'takut_pikiran_sendiri') ?>

    <?php // echo $form->field($model, 'mudah_tersinggung') ?>

    <?php // echo $form->field($model, 'merasa_tegang') ?>

    <?php // echo $form->field($model, 'lesu') ?>

    <?php // echo $form->field($model, 'tak_bisa_istirahat_tenang') ?>

    <?php // echo $form->field($model, 'mudah_terkejut') ?>

    <?php // echo $form->field($model, 'mudah_menangis') ?>

    <?php // echo $form->field($model, 'gemetar') ?>

    <?php // echo $form->field($model, 'gelisah') ?>

    <?php // echo $form->field($model, 'takut_pada_gelap') ?>

    <?php // echo $form->field($model, 'takut_pada_orangasing') ?>

    <?php // echo $form->field($model, 'takut_pada_kerumunan_banyak_orang') ?>

    <?php // echo $form->field($model, 'takut_pada_binatang_besar') ?>

    <?php // echo $form->field($model, 'takut_pada_keramaian_lalu_lintas') ?>

    <?php // echo $form->field($model, 'takut_ditinggal_sendiri') ?>

    <?php // echo $form->field($model, 'sulit_tidur') ?>

    <?php // echo $form->field($model, 'terbangun_malam_hari') ?>

    <?php // echo $form->field($model, 'tidur_tidak_nyeyak') ?>

    <?php // echo $form->field($model, 'mimpi_buruk') ?>

    <?php // echo $form->field($model, 'bangun_dengan_lesu') ?>

    <?php // echo $form->field($model, 'banyak_mengalami_mimpi') ?>

    <?php // echo $form->field($model, 'mimpi_menakutkan') ?>

    <?php // echo $form->field($model, 'sulit_konsentrasi') ?>

    <?php // echo $form->field($model, 'daya_ingat_buruk') ?>

    <?php // echo $form->field($model, 'hilangnya_minat') ?>

    <?php // echo $form->field($model, 'berkurangnya_kesenangan_pada_hobi') ?>

    <?php // echo $form->field($model, 'sedih') ?>

    <?php // echo $form->field($model, 'bangun_dini_hari') ?>

    <?php // echo $form->field($model, 'perasaan_berubah') ?>

    <?php // echo $form->field($model, 'sakit_nyeri_di_otot') ?>

    <?php // echo $form->field($model, 'kaku') ?>

    <?php // echo $form->field($model, 'kedutan_otot') ?>

    <?php // echo $form->field($model, 'gigi_gemerutuk') ?>

    <?php // echo $form->field($model, 'suara_tidak_stabil') ?>

    <?php // echo $form->field($model, 'tinnitus') ?>

    <?php // echo $form->field($model, 'penglihatan_kabur') ?>

    <?php // echo $form->field($model, 'muka_merah_gejala_somatic') ?>

    <?php // echo $form->field($model, 'merasa_lemah') ?>

    <?php // echo $form->field($model, 'perasaan_ditusuk') ?>

    <?php // echo $form->field($model, 'takhikardia') ?>

    <?php // echo $form->field($model, 'berdebar') ?>

    <?php // echo $form->field($model, 'nyeri_di_dada') ?>

    <?php // echo $form->field($model, 'denyut_nadi_mengeras') ?>

    <?php // echo $form->field($model, 'perasaan_lesu') ?>

    <?php // echo $form->field($model, 'detak_jantung_menghilang') ?>

    <?php // echo $form->field($model, 'merasa_tertekan') ?>

    <?php // echo $form->field($model, 'perasaan_tercekik') ?>

    <?php // echo $form->field($model, 'sering_menarik_napas') ?>

    <?php // echo $form->field($model, 'napas_pendek') ?>

    <?php // echo $form->field($model, 'bulu_berdiri') ?>

    <?php // echo $form->field($model, 'sulit_menelan') ?>

    <?php // echo $form->field($model, 'perut_melilit') ?>

    <?php // echo $form->field($model, 'ganguan_pencernaan') ?>

    <?php // echo $form->field($model, 'rasa_kembung') ?>

    <?php // echo $form->field($model, 'nyeri_makan') ?>

    <?php // echo $form->field($model, 'terbakar_perut') ?>

    <?php // echo $form->field($model, 'sukar_bab') ?>

    <?php // echo $form->field($model, 'muntah') ?>

    <?php // echo $form->field($model, 'bab_lembek') ?>

    <?php // echo $form->field($model, 'kehilangan_bb') ?>

    <?php // echo $form->field($model, 'mual') ?>

    <?php // echo $form->field($model, 'sering_bak') ?>

    <?php // echo $form->field($model, 'tidak_bisa_menahan_kencing') ?>

    <?php // echo $form->field($model, 'menjadi_dingin') ?>

    <?php // echo $form->field($model, 'manorrhagia') ?>

    <?php // echo $form->field($model, 'amenorrhoea') ?>

    <?php // echo $form->field($model, 'ejakulasi_praecocks') ?>

    <?php // echo $form->field($model, 'ereksi_hilang') ?>

    <?php // echo $form->field($model, 'impotensi') ?>

    <?php // echo $form->field($model, 'mulut_kering') ?>

    <?php // echo $form->field($model, 'muka_merah_gejala_otonom') ?>

    <?php // echo $form->field($model, 'mudah_berkeringat') ?>

    <?php // echo $form->field($model, 'bulu_berdiri_gejala_otonom') ?>

    <?php // echo $form->field($model, 'sakit_kepala') ?>

    <?php // echo $form->field($model, 'gelisah_wawancara') ?>

    <?php // echo $form->field($model, 'napas_pendek_wawancara') ?>

    <?php // echo $form->field($model, 'jari_gemetar') ?>

    <?php // echo $form->field($model, 'kerut_kening') ?>

    <?php // echo $form->field($model, 'muka_tegang') ?>

    <?php // echo $form->field($model, 'tonus_meningkat') ?>

    <?php // echo $form->field($model, 'tidak_tenang') ?>

    <?php // echo $form->field($model, 'muka_merah_wawancara') ?>

    <?php // echo $form->field($model, 'total_skor') ?>

    <?php // echo $form->field($model, 'keterangan_skor') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
