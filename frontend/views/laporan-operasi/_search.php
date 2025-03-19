<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\LaporanOperasiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="laporan-operasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'diagnosa_preop') ?>

    <?= $form->field($model, 'diagnosa_postop') ?>

    <?= $form->field($model, 'jaringan_dieksekusi') ?>

    <?php // echo $form->field($model, 'selesaioperasi') ?>

    <?php // echo $form->field($model, 'permintaan_pa') ?>

    <?php // echo $form->field($model, 'laporan_operasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
