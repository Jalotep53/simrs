<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPiutangLainlainSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bayar-piutang-lainlain-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tgl_bayar') ?>

    <?= $form->field($model, 'kode_peminjam') ?>

    <?= $form->field($model, 'besar_cicilan') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?= $form->field($model, 'nota_piutang') ?>

    <?php // echo $form->field($model, 'kd_rek') ?>

    <?php // echo $form->field($model, 'nama_bayar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
