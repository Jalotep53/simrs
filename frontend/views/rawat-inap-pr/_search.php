<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RawatInapPrSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rawat-inap-pr-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'kd_jenis_prw') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'tgl_perawatan') ?>

    <?= $form->field($model, 'jam_rawat') ?>

    <?php // echo $form->field($model, 'material') ?>

    <?php // echo $form->field($model, 'bhp') ?>

    <?php // echo $form->field($model, 'tarif_tindakanpr') ?>

    <?php // echo $form->field($model, 'kso') ?>

    <?php // echo $form->field($model, 'menejemen') ?>

    <?php // echo $form->field($model, 'biaya_rawat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
