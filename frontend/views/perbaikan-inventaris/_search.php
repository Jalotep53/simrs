<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PerbaikanInventarisSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perbaikan-inventaris-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_permintaan') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'uraian_kegiatan') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'pelaksana') ?>

    <?php // echo $form->field($model, 'biaya') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
