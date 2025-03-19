<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanPerbaikanInventarisSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="permintaan-perbaikan-inventaris-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_permintaan') ?>

    <?= $form->field($model, 'no_inventaris') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'deskripsi_kerusakan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
