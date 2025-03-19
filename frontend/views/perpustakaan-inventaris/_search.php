<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanInventarisSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perpustakaan-inventaris-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_inventaris') ?>

    <?= $form->field($model, 'kode_buku') ?>

    <?= $form->field($model, 'asal_buku') ?>

    <?= $form->field($model, 'tgl_pengadaan') ?>

    <?= $form->field($model, 'harga') ?>

    <?php // echo $form->field($model, 'status_buku') ?>

    <?php // echo $form->field($model, 'kd_ruang') ?>

    <?php // echo $form->field($model, 'no_rak') ?>

    <?php // echo $form->field($model, 'no_box') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
