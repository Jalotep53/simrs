<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PiutangLainlainSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="piutang-lainlain-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nota_piutang') ?>

    <?= $form->field($model, 'tgl_piutang') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'kode_peminjam') ?>

    <?= $form->field($model, 'kd_rek') ?>

    <?php // echo $form->field($model, 'nama_bayar') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'tgltempo') ?>

    <?php // echo $form->field($model, 'nominal') ?>

    <?php // echo $form->field($model, 'sisapiutang') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
