<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanBayarDendaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perpustakaan-bayar-denda-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tgl_denda') ?>

    <?= $form->field($model, 'no_anggota') ?>

    <?= $form->field($model, 'no_inventaris') ?>

    <?= $form->field($model, 'kode_denda') ?>

    <?= $form->field($model, 'besar_denda') ?>

    <?php // echo $form->field($model, 'keterangan_denda') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
