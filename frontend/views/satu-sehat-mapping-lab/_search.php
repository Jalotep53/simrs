<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingLabSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="satu-sehat-mapping-lab-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_template') ?>

    <?= $form->field($model, 'code') ?>

    <?= $form->field($model, 'system') ?>

    <?= $form->field($model, 'display') ?>

    <?= $form->field($model, 'sampel_code') ?>

    <?php // echo $form->field($model, 'sampel_system') ?>

    <?php // echo $form->field($model, 'sampel_display') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
