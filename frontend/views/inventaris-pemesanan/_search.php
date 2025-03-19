<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisPemesananSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="inventaris-pemesanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_faktur') ?>

    <?= $form->field($model, 'no_order') ?>

    <?= $form->field($model, 'kode_suplier') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'tgl_pesan') ?>

    <?php // echo $form->field($model, 'tgl_faktur') ?>

    <?php // echo $form->field($model, 'tgl_tempo') ?>

    <?php // echo $form->field($model, 'total1') ?>

    <?php // echo $form->field($model, 'potongan') ?>

    <?php // echo $form->field($model, 'total2') ?>

    <?php // echo $form->field($model, 'ppn') ?>

    <?php // echo $form->field($model, 'meterai') ?>

    <?php // echo $form->field($model, 'tagihan') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'kd_rek_aset') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
