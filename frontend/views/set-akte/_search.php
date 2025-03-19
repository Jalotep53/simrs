<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SetAkteSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="set-akte-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tahun') ?>

    <?= $form->field($model, 'bulan') ?>

    <?= $form->field($model, 'pendapatan_akte') ?>

    <?= $form->field($model, 'persen_rs') ?>

    <?= $form->field($model, 'bagian_rs') ?>

    <?php // echo $form->field($model, 'persen_kry') ?>

    <?php // echo $form->field($model, 'bagian_kry') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
