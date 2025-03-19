<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianFisioterapiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-fisioterapi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'informasi') ?>

    <?= $form->field($model, 'keluhan_utama') ?>

    <?= $form->field($model, 'rps') ?>

    <?php // echo $form->field($model, 'rpd') ?>

    <?php // echo $form->field($model, 'td') ?>

    <?php // echo $form->field($model, 'hr') ?>

    <?php // echo $form->field($model, 'rr') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'nyeri_tekan') ?>

    <?php // echo $form->field($model, 'nyeri_gerak') ?>

    <?php // echo $form->field($model, 'nyeri_diam') ?>

    <?php // echo $form->field($model, 'palpasi') ?>

    <?php // echo $form->field($model, 'luas_gerak_sendi') ?>

    <?php // echo $form->field($model, 'kekuatan_otot') ?>

    <?php // echo $form->field($model, 'statis') ?>

    <?php // echo $form->field($model, 'dinamis') ?>

    <?php // echo $form->field($model, 'kognitif') ?>

    <?php // echo $form->field($model, 'auskultasi') ?>

    <?php // echo $form->field($model, 'alat_bantu') ?>

    <?php // echo $form->field($model, 'ket_bantu') ?>

    <?php // echo $form->field($model, 'prothesa') ?>

    <?php // echo $form->field($model, 'ket_pro') ?>

    <?php // echo $form->field($model, 'deformitas') ?>

    <?php // echo $form->field($model, 'ket_deformitas') ?>

    <?php // echo $form->field($model, 'resikojatuh') ?>

    <?php // echo $form->field($model, 'ket_resikojatuh') ?>

    <?php // echo $form->field($model, 'adl') ?>

    <?php // echo $form->field($model, 'lainlain_fungsional') ?>

    <?php // echo $form->field($model, 'ket_fisik') ?>

    <?php // echo $form->field($model, 'pemeriksaan_musculoskeletal') ?>

    <?php // echo $form->field($model, 'pemeriksaan_neuromuscular') ?>

    <?php // echo $form->field($model, 'pemeriksaan_cardiopulmonal') ?>

    <?php // echo $form->field($model, 'pemeriksaan_integument') ?>

    <?php // echo $form->field($model, 'pengukuran_musculoskeletal') ?>

    <?php // echo $form->field($model, 'pengukuran_neuromuscular') ?>

    <?php // echo $form->field($model, 'pengukuran_cardiopulmonal') ?>

    <?php // echo $form->field($model, 'pengukuran_integument') ?>

    <?php // echo $form->field($model, 'penunjang') ?>

    <?php // echo $form->field($model, 'diagnosis_fisio') ?>

    <?php // echo $form->field($model, 'rencana_terapi') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
