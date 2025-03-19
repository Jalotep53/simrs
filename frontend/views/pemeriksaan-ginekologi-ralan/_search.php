<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PemeriksaanGinekologiRalanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pemeriksaan-ginekologi-ralan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tgl_perawatan') ?>

    <?= $form->field($model, 'jam_rawat') ?>

    <?= $form->field($model, 'inspeksi') ?>

    <?= $form->field($model, 'inspeksi_vulva') ?>

    <?php // echo $form->field($model, 'inspekulo_gine') ?>

    <?php // echo $form->field($model, 'fluxus_gine') ?>

    <?php // echo $form->field($model, 'fluor_gine') ?>

    <?php // echo $form->field($model, 'vulva_inspekulo') ?>

    <?php // echo $form->field($model, 'portio_inspekulo') ?>

    <?php // echo $form->field($model, 'sondage') ?>

    <?php // echo $form->field($model, 'portio_dalam') ?>

    <?php // echo $form->field($model, 'bentuk') ?>

    <?php // echo $form->field($model, 'cavum_uteri') ?>

    <?php // echo $form->field($model, 'mobilitas') ?>

    <?php // echo $form->field($model, 'ukuran') ?>

    <?php // echo $form->field($model, 'nyeri_tekan') ?>

    <?php // echo $form->field($model, 'adnexa_kanan') ?>

    <?php // echo $form->field($model, 'adnexa_kiri') ?>

    <?php // echo $form->field($model, 'cavum_douglas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
