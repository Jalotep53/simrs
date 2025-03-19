<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsPeristiwaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="k3rs-peristiwa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_k3rs') ?>

    <?= $form->field($model, 'tgl_insiden') ?>

    <?= $form->field($model, 'waktu_insiden') ?>

    <?= $form->field($model, 'kode_pekerjaan') ?>

    <?= $form->field($model, 'tgl_pelaporan') ?>

    <?php // echo $form->field($model, 'waktu_pelaporan') ?>

    <?php // echo $form->field($model, 'kode_lokasi') ?>

    <?php // echo $form->field($model, 'kronologi_kejadian') ?>

    <?php // echo $form->field($model, 'kode_penyebab') ?>

    <?php // echo $form->field($model, 'nik') ?>

    <?php // echo $form->field($model, 'kategori_cidera') ?>

    <?php // echo $form->field($model, 'kode_cidera') ?>

    <?php // echo $form->field($model, 'kode_luka') ?>

    <?php // echo $form->field($model, 'kode_bagian') ?>

    <?php // echo $form->field($model, 'lt') ?>

    <?php // echo $form->field($model, 'penyebab_langsung_kondisi') ?>

    <?php // echo $form->field($model, 'penyebab_langsung_tindakan') ?>

    <?php // echo $form->field($model, 'penyebab_tidak_langsung_pribadi') ?>

    <?php // echo $form->field($model, 'penyebab_tidak_langsung_pekerjaan') ?>

    <?php // echo $form->field($model, 'barang_bukti') ?>

    <?php // echo $form->field($model, 'kode_dampak') ?>

    <?php // echo $form->field($model, 'nik_pelapor') ?>

    <?php // echo $form->field($model, 'perbaikan_jenis_tindakan') ?>

    <?php // echo $form->field($model, 'perbaikan_rencana_tindakan') ?>

    <?php // echo $form->field($model, 'perbaikan_target') ?>

    <?php // echo $form->field($model, 'perbaikan_wewenang') ?>

    <?php // echo $form->field($model, 'nik_timk3') ?>

    <?php // echo $form->field($model, 'catatan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
