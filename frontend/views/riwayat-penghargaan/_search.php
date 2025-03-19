<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatPenghargaanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="riwayat-penghargaan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'jenis') ?>

    <?= $form->field($model, 'nama_penghargaan') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'instansi') ?>

    <?php // echo $form->field($model, 'pejabat_pemberi') ?>

    <?php // echo $form->field($model, 'berkas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
