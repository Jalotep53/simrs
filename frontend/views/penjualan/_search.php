<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenjualanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penjualan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nota_jual') ?>

    <?= $form->field($model, 'tgl_jual') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'no_rkm_medis') ?>

    <?= $form->field($model, 'nm_pasien') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'jns_jual') ?>

    <?php // echo $form->field($model, 'ongkir') ?>

    <?php // echo $form->field($model, 'ppn') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'kd_bangsal') ?>

    <?php // echo $form->field($model, 'kd_rek') ?>

    <?php // echo $form->field($model, 'nama_bayar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
