<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\KeslingMutuAirLimbahSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kesling-mutu-air-limbah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'meteran') ?>

    <?= $form->field($model, 'jumlahharian') ?>

    <?= $form->field($model, 'ph') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'tds') ?>

    <?php // echo $form->field($model, 'ec') ?>

    <?php // echo $form->field($model, 'salt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
