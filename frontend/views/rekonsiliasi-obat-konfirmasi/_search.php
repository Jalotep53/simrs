<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RekonsiliasiObatKonfirmasiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rekonsiliasi-obat-konfirmasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rekonsiliasi') ?>

    <?= $form->field($model, 'diterima_farmasi') ?>

    <?= $form->field($model, 'dikonfirmasi_apoteker') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'diserahkan_pasien') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
