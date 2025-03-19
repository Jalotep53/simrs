<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPengeluaranObatBhpSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="detail-pengeluaran-obat-bhp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_keluar') ?>

    <?= $form->field($model, 'kode_brng') ?>

    <?= $form->field($model, 'kode_sat') ?>

    <?= $form->field($model, 'no_batch') ?>

    <?= $form->field($model, 'jumlah') ?>

    <?php // echo $form->field($model, 'harga_beli') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'no_faktur') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
