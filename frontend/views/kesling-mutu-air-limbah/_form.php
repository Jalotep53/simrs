<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\KeslingMutuAirLimbah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kesling-mutu-air-limbah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'meteran')->textInput() ?>

    <?= $form->field($model, 'jumlahharian')->textInput() ?>

    <?= $form->field($model, 'ph')->textInput() ?>

    <?= $form->field($model, 'suhu')->textInput() ?>

    <?= $form->field($model, 'tds')->textInput() ?>

    <?= $form->field($model, 'ec')->textInput() ?>

    <?= $form->field($model, 'salt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
