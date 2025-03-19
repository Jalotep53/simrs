<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PengajuanBiayaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pengajuan-biaya-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_pengajuan') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'urgensi') ?>

    <?= $form->field($model, 'uraian_latar_belakang') ?>

    <?php // echo $form->field($model, 'tujuan_pengajuan') ?>

    <?php // echo $form->field($model, 'target_sasaran') ?>

    <?php // echo $form->field($model, 'lokasi_kegiatan') ?>

    <?php // echo $form->field($model, 'jumlah') ?>

    <?php // echo $form->field($model, 'harga') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'nik_pj') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
