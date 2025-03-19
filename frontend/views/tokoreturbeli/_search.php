<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TokoreturbeliSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tokoreturbeli-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_retur_beli') ?>

    <?= $form->field($model, 'tgl_retur') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'kode_suplier') ?>

    <?= $form->field($model, 'catatan') ?>

    <?php // echo $form->field($model, 'total') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
