<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratSkbnSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-skbn-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_surat') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggalsurat') ?>

    <?= $form->field($model, 'kategori') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?php // echo $form->field($model, 'keperluan') ?>

    <?php // echo $form->field($model, 'opiat') ?>

    <?php // echo $form->field($model, 'ganja') ?>

    <?php // echo $form->field($model, 'amphetamin') ?>

    <?php // echo $form->field($model, 'methamphetamin') ?>

    <?php // echo $form->field($model, 'benzodiazepin') ?>

    <?php // echo $form->field($model, 'cocain') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
