<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PotonganSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="potongan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tahun') ?>

    <?= $form->field($model, 'bulan') ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'bpjs') ?>

    <?= $form->field($model, 'jamsostek') ?>

    <?php // echo $form->field($model, 'dansos') ?>

    <?php // echo $form->field($model, 'simwajib') ?>

    <?php // echo $form->field($model, 'angkop') ?>

    <?php // echo $form->field($model, 'angla') ?>

    <?php // echo $form->field($model, 'telpri') ?>

    <?php // echo $form->field($model, 'pajak') ?>

    <?php // echo $form->field($model, 'pribadi') ?>

    <?php // echo $form->field($model, 'lain') ?>

    <?php // echo $form->field($model, 'ktg') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
