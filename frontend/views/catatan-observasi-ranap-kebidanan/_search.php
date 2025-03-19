<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanObservasiRanapKebidananSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="catatan-observasi-ranap-kebidanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tgl_perawatan') ?>

    <?= $form->field($model, 'jam_rawat') ?>

    <?= $form->field($model, 'gcs') ?>

    <?= $form->field($model, 'td') ?>

    <?php // echo $form->field($model, 'hr') ?>

    <?php // echo $form->field($model, 'rr') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'spo2') ?>

    <?php // echo $form->field($model, 'kontraksi') ?>

    <?php // echo $form->field($model, 'bjj') ?>

    <?php // echo $form->field($model, 'ppv') ?>

    <?php // echo $form->field($model, 'vt') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
