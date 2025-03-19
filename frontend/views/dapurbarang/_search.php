<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DapurbarangSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dapurbarang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_brng') ?>

    <?= $form->field($model, 'nama_brng') ?>

    <?= $form->field($model, 'kode_sat') ?>

    <?= $form->field($model, 'jenis') ?>

    <?= $form->field($model, 'stok') ?>

    <?php // echo $form->field($model, 'harga') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
