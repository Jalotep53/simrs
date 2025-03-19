<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DetailhibahObatBhpSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="detailhibah-obat-bhp-search">

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

    <?php // echo $form->field($model, 'h_diakui') ?>

    <?php // echo $form->field($model, 'subtotaldiakui') ?>

    <?php // echo $form->field($model, 'no_batch') ?>

    <?php // echo $form->field($model, 'jumlah2') ?>

    <?php // echo $form->field($model, 'kadaluarsa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
