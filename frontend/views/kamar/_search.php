<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\KamarSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kamar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_kamar') ?>

    <?= $form->field($model, 'kd_bangsal') ?>

    <?= $form->field($model, 'trf_kamar') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'kelas') ?>

    <?php // echo $form->field($model, 'statusdata') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
