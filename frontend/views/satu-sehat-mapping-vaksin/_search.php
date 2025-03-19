<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingVaksinSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="satu-sehat-mapping-vaksin-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_brng') ?>

    <?= $form->field($model, 'vaksin_code') ?>

    <?= $form->field($model, 'vaksin_system') ?>

    <?= $form->field($model, 'vaksin_display') ?>

    <?= $form->field($model, 'route_code') ?>

    <?php // echo $form->field($model, 'route_system') ?>

    <?php // echo $form->field($model, 'route_display') ?>

    <?php // echo $form->field($model, 'dose_quantity_code') ?>

    <?php // echo $form->field($model, 'dose_quantity_system') ?>

    <?php // echo $form->field($model, 'dose_quantity_unit') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
