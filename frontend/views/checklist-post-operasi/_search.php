<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ChecklistPostOperasiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="checklist-post-operasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'sncn') ?>

    <?= $form->field($model, 'tindakan') ?>

    <?= $form->field($model, 'kd_dokter_bedah') ?>

    <?php // echo $form->field($model, 'kd_dokter_anestesi') ?>

    <?php // echo $form->field($model, 'keadaan_umum') ?>

    <?php // echo $form->field($model, 'pemeriksaan_penunjang_rontgen') ?>

    <?php // echo $form->field($model, 'keterangan_pemeriksaan_penunjang_rontgen') ?>

    <?php // echo $form->field($model, 'pemeriksaan_penunjang_ekg') ?>

    <?php // echo $form->field($model, 'keterangan_pemeriksaan_penunjang_ekg') ?>

    <?php // echo $form->field($model, 'pemeriksaan_penunjang_usg') ?>

    <?php // echo $form->field($model, 'keterangan_pemeriksaan_penunjang_usg') ?>

    <?php // echo $form->field($model, 'pemeriksaan_penunjang_ctscan') ?>

    <?php // echo $form->field($model, 'keterangan_pemeriksaan_penunjang_ctscan') ?>

    <?php // echo $form->field($model, 'pemeriksaan_penunjang_mri') ?>

    <?php // echo $form->field($model, 'keterangan_pemeriksaan_penunjang_mri') ?>

    <?php // echo $form->field($model, 'jenis_cairan_infus') ?>

    <?php // echo $form->field($model, 'kateter_urine') ?>

    <?php // echo $form->field($model, 'tanggal_pemasangan_kateter') ?>

    <?php // echo $form->field($model, 'warna_kateter') ?>

    <?php // echo $form->field($model, 'jumlah_kateter') ?>

    <?php // echo $form->field($model, 'area_luka_operasi') ?>

    <?php // echo $form->field($model, 'drain') ?>

    <?php // echo $form->field($model, 'jumlah_drain') ?>

    <?php // echo $form->field($model, 'letak_drain') ?>

    <?php // echo $form->field($model, 'warna_drain') ?>

    <?php // echo $form->field($model, 'jaringan_pa') ?>

    <?php // echo $form->field($model, 'nip_perawat_ok') ?>

    <?php // echo $form->field($model, 'nip_perawat_anestesi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
