<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PelayananInformasiObatSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pelayanan-informasi-obat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_permintaan') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'metode') ?>

    <?= $form->field($model, 'penanya') ?>

    <?php // echo $form->field($model, 'status_penanya') ?>

    <?php // echo $form->field($model, 'no_telp_penanya') ?>

    <?php // echo $form->field($model, 'jenis_pertanyaan') ?>

    <?php // echo $form->field($model, 'keterangan_jenis_pertanyaan') ?>

    <?php // echo $form->field($model, 'uraian_pertanyaan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
