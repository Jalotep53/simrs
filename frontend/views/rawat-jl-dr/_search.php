<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RawatJlDrSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rawat-jl-dr-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'kd_jenis_prw') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'tgl_perawatan') ?>

    <?= $form->field($model, 'jam_rawat') ?>

    <?php // echo $form->field($model, 'material') ?>

    <?php // echo $form->field($model, 'bhp') ?>

    <?php // echo $form->field($model, 'tarif_tindakandr') ?>

    <?php // echo $form->field($model, 'kso') ?>

    <?php // echo $form->field($model, 'menejemen') ?>

    <?php // echo $form->field($model, 'biaya_rawat') ?>

    <?php // echo $form->field($model, 'stts_bayar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
