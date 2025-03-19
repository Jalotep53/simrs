<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SignoutSebelumMenutupLukaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="signout-sebelum-menutup-luka-search">

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

    <?php // echo $form->field($model, 'verbal_tindakan') ?>

    <?php // echo $form->field($model, 'verbal_kelengkapan_kasa') ?>

    <?php // echo $form->field($model, 'verbal_instrumen') ?>

    <?php // echo $form->field($model, 'verbal_alat_tajam') ?>

    <?php // echo $form->field($model, 'kelengkapan_specimen_label') ?>

    <?php // echo $form->field($model, 'kelengkapan_specimen_formulir') ?>

    <?php // echo $form->field($model, 'peninjauan_kegiatan_dokter_bedah') ?>

    <?php // echo $form->field($model, 'peninjauan_kegiatan_dokter_anestesi') ?>

    <?php // echo $form->field($model, 'peninjauan_kegiatan_perawat_kamar_ok') ?>

    <?php // echo $form->field($model, 'perhatian_utama_fase_pemulihan') ?>

    <?php // echo $form->field($model, 'nip_perawat_ok') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
