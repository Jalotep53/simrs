<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanObservasiChbpSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="catatan-observasi-chbp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tgl_perawatan') ?>

    <?= $form->field($model, 'jam_rawat') ?>

    <?= $form->field($model, 'td') ?>

    <?= $form->field($model, 'hr') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'djj') ?>

    <?php // echo $form->field($model, 'his') ?>

    <?php // echo $form->field($model, 'ppv') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
