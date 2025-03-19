<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenyerahanDarahDetailSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="utd-penyerahan-darah-detail-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_penyerahan') ?>

    <?= $form->field($model, 'no_kantong') ?>

    <?= $form->field($model, 'jasa_sarana') ?>

    <?= $form->field($model, 'paket_bhp') ?>

    <?= $form->field($model, 'kso') ?>

    <?php // echo $form->field($model, 'manajemen') ?>

    <?php // echo $form->field($model, 'total') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
