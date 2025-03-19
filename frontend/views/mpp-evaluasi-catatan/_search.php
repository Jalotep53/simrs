<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MppEvaluasiCatatanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mpp-evaluasi-catatan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tgl_implementasi') ?>

    <?= $form->field($model, 'masalah') ?>

    <?= $form->field($model, 'tinjut') ?>

    <?= $form->field($model, 'evaluasi') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
