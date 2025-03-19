<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPasienKeracunanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-pasien-keracunan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'anamnesis') ?>

    <?= $form->field($model, 'hubungan') ?>

    <?php // echo $form->field($model, 'tempat_kejadian') ?>

    <?php // echo $form->field($model, 'keterangan_tempat_kejadian') ?>

    <?php // echo $form->field($model, 'keluhan') ?>

    <?php // echo $form->field($model, 'riwayat_penyakit_sekarang') ?>

    <?php // echo $form->field($model, 'hamil') ?>

    <?php // echo $form->field($model, 'menyusui') ?>

    <?php // echo $form->field($model, 'penyebab') ?>

    <?php // echo $form->field($model, 'nama_bahan') ?>

    <?php // echo $form->field($model, 'jumlah_bahan') ?>

    <?php // echo $form->field($model, 'tipe_pemaparan') ?>

    <?php // echo $form->field($model, 'keterangan_tipe_pemaparan') ?>

    <?php // echo $form->field($model, 'tipe_kejadian') ?>

    <?php // echo $form->field($model, 'bau_bahan') ?>

    <?php // echo $form->field($model, 'keterangan_bau_bahan') ?>

    <?php // echo $form->field($model, 'pupil') ?>

    <?php // echo $form->field($model, 'keterangan_pupil') ?>

    <?php // echo $form->field($model, 'kesadaran') ?>

    <?php // echo $form->field($model, 'td') ?>

    <?php // echo $form->field($model, 'nadi') ?>

    <?php // echo $form->field($model, 'rr') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'spo') ?>

    <?php // echo $form->field($model, 'urine') ?>

    <?php // echo $form->field($model, 'pengobatan_sebelum_igd') ?>

    <?php // echo $form->field($model, 'diagnosis') ?>

    <?php // echo $form->field($model, 'pemeriksaan_penunjang') ?>

    <?php // echo $form->field($model, 'penatalaksanaan_diberikan') ?>

    <?php // echo $form->field($model, 'tindak_lanjut') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
