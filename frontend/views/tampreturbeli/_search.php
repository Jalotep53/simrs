<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TampreturbeliSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tampreturbeli-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_faktur') ?>

    <?= $form->field($model, 'kode_brng') ?>

    <?= $form->field($model, 'nama_brng') ?>

    <?= $form->field($model, 'satuan') ?>

    <?= $form->field($model, 'h_beli') ?>

    <?php // echo $form->field($model, 'jml_beli') ?>

    <?php // echo $form->field($model, 'h_retur') ?>

    <?php // echo $form->field($model, 'jml_retur') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'no_batch') ?>

    <?php // echo $form->field($model, 'jml_retur2') ?>

    <?php // echo $form->field($model, 'kadaluarsa') ?>

    <?php // echo $form->field($model, 'petugas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
