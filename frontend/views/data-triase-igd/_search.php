<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DataTriaseIgdSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-triase-igd-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tgl_kunjungan') ?>

    <?= $form->field($model, 'cara_masuk') ?>

    <?= $form->field($model, 'alat_transportasi') ?>

    <?= $form->field($model, 'alasan_kedatangan') ?>

    <?php // echo $form->field($model, 'keterangan_kedatangan') ?>

    <?php // echo $form->field($model, 'kode_kasus') ?>

    <?php // echo $form->field($model, 'tekanan_darah') ?>

    <?php // echo $form->field($model, 'nadi') ?>

    <?php // echo $form->field($model, 'pernapasan') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'saturasi_o2') ?>

    <?php // echo $form->field($model, 'nyeri') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
