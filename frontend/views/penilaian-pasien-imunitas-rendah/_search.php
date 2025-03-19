<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPasienImunitasRendahSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-pasien-imunitas-rendah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'anamnesis') ?>

    <?= $form->field($model, 'hubungan') ?>

    <?php // echo $form->field($model, 'pasien_mengetahui_kondisi_penyakitnya') ?>

    <?php // echo $form->field($model, 'kebutuhan_ruang_perawatan') ?>

    <?php // echo $form->field($model, 'riwayat_penyakit_keluhan') ?>

    <?php // echo $form->field($model, 'riwayat_penyakit_keluarga') ?>

    <?php // echo $form->field($model, 'riwayat_alergi') ?>

    <?php // echo $form->field($model, 'riwayat_vaksinasi') ?>

    <?php // echo $form->field($model, 'riwayat_pengobatan') ?>

    <?php // echo $form->field($model, 'diagnosa_utama') ?>

    <?php // echo $form->field($model, 'diagnosa_tambahan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
