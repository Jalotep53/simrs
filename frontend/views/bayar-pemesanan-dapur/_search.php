<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPemesananDapurSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bayar-pemesanan-dapur-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tgl_bayar') ?>

    <?= $form->field($model, 'no_faktur') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'besar_bayar') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'nama_bayar') ?>

    <?php // echo $form->field($model, 'no_bukti') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
