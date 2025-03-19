<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\KonselingFarmasiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="konseling-farmasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'diagnosa') ?>

    <?= $form->field($model, 'obat_pemakaian') ?>

    <?= $form->field($model, 'riwayat_alergi') ?>

    <?php // echo $form->field($model, 'keluhan') ?>

    <?php // echo $form->field($model, 'pernah_datang') ?>

    <?php // echo $form->field($model, 'tindak_lanjut') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
