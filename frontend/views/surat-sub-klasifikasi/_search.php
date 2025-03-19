<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AntriapotekSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-sub-klasifikasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd') ?>

    <?= $form->field($model, 'kd_klasifikasi') ?>

    <?= $form->field($model, 'sub_klasifikasi') ?>

    <?= $form->field($model, 'no_bulanan') ?>

    <?= $form->field($model, 'no_tahunan') ?>

    <?php // echo $form->field($model, 'bulan') ?>

    <?php // echo $form->field($model, 'tahun') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
