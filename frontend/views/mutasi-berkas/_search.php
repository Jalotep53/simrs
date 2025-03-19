<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MutasiBerkasSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mutasi-berkas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'dikirim') ?>

    <?= $form->field($model, 'diterima') ?>

    <?= $form->field($model, 'kembali') ?>

    <?php // echo $form->field($model, 'tidakada') ?>

    <?php // echo $form->field($model, 'ranap') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
