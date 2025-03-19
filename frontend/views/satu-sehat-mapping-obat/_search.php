<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingObatSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="satu-sehat-mapping-obat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_brng') ?>

    <?= $form->field($model, 'obat_code') ?>

    <?= $form->field($model, 'obat_system') ?>

    <?= $form->field($model, 'obat_display') ?>

    <?= $form->field($model, 'form_code') ?>

    <?php // echo $form->field($model, 'form_system') ?>

    <?php // echo $form->field($model, 'form_display') ?>

    <?php // echo $form->field($model, 'numerator_code') ?>

    <?php // echo $form->field($model, 'numerator_system') ?>

    <?php // echo $form->field($model, 'denominator_code') ?>

    <?php // echo $form->field($model, 'denominator_system') ?>

    <?php // echo $form->field($model, 'route_code') ?>

    <?php // echo $form->field($model, 'route_system') ?>

    <?php // echo $form->field($model, 'route_display') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
