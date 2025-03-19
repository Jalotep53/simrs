<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\IpsrsDetailHibahSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ipsrs-detail-hibah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_hibah') ?>

    <?= $form->field($model, 'kode_brng') ?>

    <?= $form->field($model, 'kode_sat') ?>

    <?= $form->field($model, 'jumlah') ?>

    <?= $form->field($model, 'h_hibah') ?>

    <?php // echo $form->field($model, 'subtotalhibah') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
