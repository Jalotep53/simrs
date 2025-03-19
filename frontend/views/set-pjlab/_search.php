<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SetPjlabSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="set-pjlab-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_dokterlab') ?>

    <?= $form->field($model, 'kd_dokterrad') ?>

    <?= $form->field($model, 'kd_dokterhemodialisa') ?>

    <?= $form->field($model, 'kd_dokterutd') ?>

    <?= $form->field($model, 'kd_dokterlabpa') ?>

    <?php // echo $form->field($model, 'kd_dokterlabmb') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
