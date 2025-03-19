<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="inventaris-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_inventaris') ?>

    <?= $form->field($model, 'kode_barang') ?>

    <?= $form->field($model, 'asal_barang') ?>

    <?= $form->field($model, 'tgl_pengadaan') ?>

    <?= $form->field($model, 'harga') ?>

    <?php // echo $form->field($model, 'status_barang') ?>

    <?php // echo $form->field($model, 'id_ruang') ?>

    <?php // echo $form->field($model, 'no_rak') ?>

    <?php // echo $form->field($model, 'no_box') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
