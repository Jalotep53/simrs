<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SetpenjualanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="setpenjualan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ralan') ?>

    <?= $form->field($model, 'kelas1') ?>

    <?= $form->field($model, 'kelas2') ?>

    <?= $form->field($model, 'kelas3') ?>

    <?= $form->field($model, 'utama') ?>

    <?php // echo $form->field($model, 'vip') ?>

    <?php // echo $form->field($model, 'vvip') ?>

    <?php // echo $form->field($model, 'beliluar') ?>

    <?php // echo $form->field($model, 'jualbebas') ?>

    <?php // echo $form->field($model, 'karyawan') ?>

    <?php // echo $form->field($model, 'kdjns') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
