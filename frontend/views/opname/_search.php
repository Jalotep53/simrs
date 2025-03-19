<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\OpnameSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="opname-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_brng') ?>

    <?= $form->field($model, 'h_beli') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'stok') ?>

    <?= $form->field($model, 'real') ?>

    <?php // echo $form->field($model, 'selisih') ?>

    <?php // echo $form->field($model, 'nomihilang') ?>

    <?php // echo $form->field($model, 'lebih') ?>

    <?php // echo $form->field($model, 'nomilebih') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'kd_bangsal') ?>

    <?php // echo $form->field($model, 'no_batch') ?>

    <?php // echo $form->field($model, 'no_faktur') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
