<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningRawatJalanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skrining-rawat-jalan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'jam') ?>

    <?= $form->field($model, 'no_rkm_medis') ?>

    <?= $form->field($model, 'geriatri') ?>

    <?= $form->field($model, 'kesadaran') ?>

    <?php // echo $form->field($model, 'pernapasan') ?>

    <?php // echo $form->field($model, 'nyeri_dada') ?>

    <?php // echo $form->field($model, 'skala_nyeri') ?>

    <?php // echo $form->field($model, 'keputusan') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
