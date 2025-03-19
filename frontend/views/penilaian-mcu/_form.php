<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMcu $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-mcu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'informasi')->dropDownList([ 'Autoanamnesis' => 'Autoanamnesis', 'Alloanamnesis' => 'Alloanamnesis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'rps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rpk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rpd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alergi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keadaan')->dropDownList([ 'Baik' => 'Baik', 'Tidak Baik' => 'Tidak Baik', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kesadaran')->dropDownList([ 'Composmentis' => 'Composmentis', 'Apatis' => 'Apatis', 'Somnolen' => 'Somnolen', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'td')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'submandibula')->dropDownList([ 'Tidak Membesar' => 'Tidak Membesar', 'Membesar' => 'Membesar', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'axilla')->dropDownList([ 'Tidak Membesar' => 'Tidak Membesar', 'Membesar' => 'Membesar', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'supraklavikula')->dropDownList([ 'Tidak Membesar' => 'Tidak Membesar', 'Membesar' => 'Membesar', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'leher')->dropDownList([ 'Tidak Membesar' => 'Tidak Membesar', 'Membesar' => 'Membesar', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'inguinal')->dropDownList([ 'Tidak Membesar' => 'Tidak Membesar', 'Membesar' => 'Membesar', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'oedema')->dropDownList([ 'Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sinus_frontalis')->dropDownList([ 'Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sinus_maxilaris')->dropDownList([ 'Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'palpebra')->dropDownList([ 'Normal' => 'Normal', 'Oedem' => 'Oedem', 'Ptosis' => 'Ptosis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sklera')->dropDownList([ 'Normal' => 'Normal', 'Ikterik' => 'Ikterik', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'cornea')->dropDownList([ 'Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'buta_warna')->dropDownList([ 'Normal' => 'Normal', 'Buta Warna Partial' => 'Buta Warna Partial', 'Buta Warna Total' => 'Buta Warna Total', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'konjungtiva')->dropDownList([ 'Normal' => 'Normal', 'Anemis' => 'Anemis', 'Hiperemis' => 'Hiperemis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'lensa')->dropDownList([ 'Jernih' => 'Jernih', 'Keruh' => 'Keruh', 'Kacamata' => 'Kacamata', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pupil')->dropDownList([ 'Isokor' => 'Isokor', 'Anisokor' => 'Anisokor', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'lubang_telinga')->dropDownList([ 'Lapang' => 'Lapang', 'Sempit' => 'Sempit', 'Serumen Prop' => 'Serumen Prop', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'daun_telinga')->dropDownList([ 'Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'selaput_pendengaran')->dropDownList([ 'Intak' => 'Intak', 'Tidak Intak' => 'Tidak Intak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'proc_mastoideus')->dropDownList([ 'Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'septum_nasi')->dropDownList([ 'Normal' => 'Normal', 'Deviasi' => 'Deviasi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'lubang_hidung')->dropDownList([ 'Lapang' => 'Lapang', 'Rhinore' => 'Rhinore', 'Epistaksis' => 'Epistaksis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'bibir')->dropDownList([ 'Lembab' => 'Lembab', 'Kering' => 'Kering', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'caries')->dropDownList([ 'Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'lidah')->dropDownList([ 'Bersih' => 'Bersih', 'Kotor' => 'Kotor', 'Tremor' => 'Tremor', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'faring')->dropDownList([ 'Normal' => 'Normal', 'Hiperemis' => 'Hiperemis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tonsil')->dropDownList([ 'T1-T1' => 'T1-T1', 'T2-T2' => 'T2-T2', 'T3-T3' => 'T3-T3', 'T4-T4' => 'T4-T4', 'T0-T0' => 'T0-T0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kelenjar_limfe')->dropDownList([ 'Tidak Membesar' => 'Tidak Membesar', 'Membesar' => 'Membesar', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kelenjar_gondok')->dropDownList([ 'Tidak Membesar' => 'Tidak Membesar', 'Membesar' => 'Membesar', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'gerakan_dada')->dropDownList([ 'Simetris' => 'Simetris', 'Tidak Simetris' => 'Tidak Simetris', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'vocal_femitus')->dropDownList([ 'Sama' => 'Sama', 'Tidak Sama' => 'Tidak Sama', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'perkusi_dada')->dropDownList([ 'Sonor' => 'Sonor', 'Pekak' => 'Pekak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'bunyi_napas')->dropDownList([ 'Vesikuler' => 'Vesikuler', 'Bronkhial' => 'Bronkhial', 'Trakeal' => 'Trakeal', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'bunyi_tambahan')->dropDownList([ 'Tidak Ada' => 'Tidak Ada', 'Wheezing' => 'Wheezing', 'Tronkhi' => 'Tronkhi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ictus_cordis')->dropDownList([ 'Tidak Terlihat' => 'Tidak Terlihat', 'Terlihat' => 'Terlihat', 'Teraba' => 'Teraba', 'Tidak Teraba' => 'Tidak Teraba', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'bunyi_jantung')->dropDownList([ 'Reguler' => 'Reguler', 'Irreguler' => 'Irreguler', 'Korotkoff I, II' => 'Korotkoff I, II', 'Gallop' => 'Gallop', 'Lain-lain' => 'Lain-lain', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'batas')->dropDownList([ 'Normal' => 'Normal', 'Melebar' => 'Melebar', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'inspeksi')->dropDownList([ 'Datar' => 'Datar', 'Cembung' => 'Cembung', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'palpasi')->dropDownList([ 'Supel' => 'Supel', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hepar')->dropDownList([ 'Tidak Membesar' => 'Tidak Membesar', 'Membesar' => 'Membesar', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'perkusi_abdomen')->dropDownList([ 'Timpani' => 'Timpani', 'Hipertimpani' => 'Hipertimpani', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'auskultasi')->dropDownList([ 'Normal' => 'Normal', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'limpa')->dropDownList([ 'Tidak Membesar' => 'Tidak Membesar', 'Membesar' => 'Membesar', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'costovertebral')->dropDownList([ 'Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kondisi_kulit')->dropDownList([ 'Normal' => 'Normal', 'Tato' => 'Tato', 'Penyakit Kulit' => 'Penyakit Kulit', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ekstrimitas_atas')->dropDownList([ 'Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ekstrimitas_atas_ket')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ekstrimitas_bawah')->dropDownList([ 'Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ekstrimitas_bawah_ket')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'laborat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'radiologi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ekg')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'spirometri')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'audiometri')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'treadmill')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lainlain')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'merokok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alkohol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kesimpulan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'anjuran')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
