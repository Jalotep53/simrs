<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AuditPembuanganLimbahSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="audit-pembuangan-limbah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'id_ruang') ?>

    <?= $form->field($model, 'pemisahan_limbah_oleh_penghasil_limbah') ?>

    <?= $form->field($model, 'limbah_infeksius_dimasukkan_kantong_kuning') ?>

    <?= $form->field($model, 'limbah_noninfeksius_dimasukkan_kantong_hitam') ?>

    <?php // echo $form->field($model, 'limbah_tigaperempat_diikat') ?>

    <?php // echo $form->field($model, 'limbah_segera_dibawa_kepembuangan_sementara') ?>

    <?php // echo $form->field($model, 'kotak_sampah_dalam_kondisi_bersih') ?>

    <?php // echo $form->field($model, 'pembersihan_tempat_sampah_dengan_desinfekten') ?>

    <?php // echo $form->field($model, 'pembersihan_penampungan_sementara_dengan_desinfekten') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
