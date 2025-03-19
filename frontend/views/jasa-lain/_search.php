<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\JasaLainSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jasa-lain-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'thn') ?>

    <?= $form->field($model, 'bln') ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'bsr_jasa') ?>

    <?= $form->field($model, 'ktg') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
