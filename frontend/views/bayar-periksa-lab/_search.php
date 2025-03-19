<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPeriksaLabSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bayar-periksa-lab-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_bayar') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'kd_jenis_prw') ?>

    <?= $form->field($model, 'tgl_periksa') ?>

    <?= $form->field($model, 'jam') ?>

    <?php // echo $form->field($model, 'tarif_tindakan_dokter') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
