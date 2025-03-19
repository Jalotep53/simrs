<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ObatRacikanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="obat-racikan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tgl_perawatan') ?>

    <?= $form->field($model, 'jam') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'no_racik') ?>

    <?= $form->field($model, 'nama_racik') ?>

    <?php // echo $form->field($model, 'kd_racik') ?>

    <?php // echo $form->field($model, 'jml_dr') ?>

    <?php // echo $form->field($model, 'aturan_pakai') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
