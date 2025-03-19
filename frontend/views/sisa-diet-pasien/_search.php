<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SisaDietPasienSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sisa-diet-pasien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'kd_kamar') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'waktu') ?>

    <?= $form->field($model, 'karbohidrat') ?>

    <?php // echo $form->field($model, 'hewani') ?>

    <?php // echo $form->field($model, 'nabati') ?>

    <?php // echo $form->field($model, 'sayur') ?>

    <?php // echo $form->field($model, 'buah') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
