<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TampreturpiutangSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tampreturpiutang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nota_piutang') ?>

    <?= $form->field($model, 'kode_brng') ?>

    <?= $form->field($model, 'nama_brng') ?>

    <?= $form->field($model, 'jml_piutang') ?>

    <?= $form->field($model, 'h_piutang') ?>

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
