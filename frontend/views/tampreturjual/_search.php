<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TampreturjualSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tampreturjual-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nota_jual') ?>

    <?= $form->field($model, 'kode_brng') ?>

    <?= $form->field($model, 'nama_brng') ?>

    <?= $form->field($model, 'jml_jual') ?>

    <?= $form->field($model, 'h_jual') ?>

    <?php // echo $form->field($model, 'jml_retur') ?>

    <?php // echo $form->field($model, 'h_retur') ?>

    <?php // echo $form->field($model, 'satuan') ?>

    <?php // echo $form->field($model, 'subtotal') ?>

    <?php // echo $form->field($model, 'no_batch') ?>

    <?php // echo $form->field($model, 'petugas') ?>

    <?php // echo $form->field($model, 'no_faktur') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
