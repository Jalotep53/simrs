<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TokoBayarPiutangSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="toko-bayar-piutang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tgl_bayar') ?>

    <?= $form->field($model, 'no_member') ?>

    <?= $form->field($model, 'besar_cicilan') ?>

    <?= $form->field($model, 'catatan') ?>

    <?= $form->field($model, 'nota_piutang') ?>

    <?php // echo $form->field($model, 'kd_rek') ?>

    <?php // echo $form->field($model, 'kd_rek_kontra') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
