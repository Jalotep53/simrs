<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningGiziSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skrining-gizi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'skrining_bb') ?>

    <?= $form->field($model, 'skrining_tb') ?>

    <?= $form->field($model, 'alergi') ?>

    <?php // echo $form->field($model, 'parameter_imt') ?>

    <?php // echo $form->field($model, 'skor_imt') ?>

    <?php // echo $form->field($model, 'parameter_bb') ?>

    <?php // echo $form->field($model, 'skor_bb') ?>

    <?php // echo $form->field($model, 'parameter_penyakit') ?>

    <?php // echo $form->field($model, 'skor_penyakit') ?>

    <?php // echo $form->field($model, 'skor_total') ?>

    <?php // echo $form->field($model, 'parameter_total') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
