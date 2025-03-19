<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PengeluaranHarianSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pengeluaran-harian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_keluar') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kode_kategori') ?>

    <?= $form->field($model, 'biaya') ?>

    <?= $form->field($model, 'nip') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
