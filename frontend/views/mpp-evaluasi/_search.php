<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MppEvaluasiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mpp-evaluasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'kd_konsulan') ?>

    <?= $form->field($model, 'diagnosis') ?>

    <?php // echo $form->field($model, 'kelompok') ?>

    <?php // echo $form->field($model, 'assesmen') ?>

    <?php // echo $form->field($model, 'identifikasi') ?>

    <?php // echo $form->field($model, 'rencana') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
