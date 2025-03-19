<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPemesananNonMedisSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-pemesanan-non-medis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_pemesanan') ?>

    <?= $form->field($model, 'kode_suplier') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'subtotal') ?>

    <?php // echo $form->field($model, 'potongan') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'ppn') ?>

    <?php // echo $form->field($model, 'meterai') ?>

    <?php // echo $form->field($model, 'tagihan') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
