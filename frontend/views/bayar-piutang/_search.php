<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPiutangSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bayar-piutang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tgl_bayar') ?>

    <?= $form->field($model, 'no_rkm_medis') ?>

    <?= $form->field($model, 'besar_cicilan') ?>

    <?= $form->field($model, 'catatan') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?php // echo $form->field($model, 'kd_rek') ?>

    <?php // echo $form->field($model, 'kd_rek_kontra') ?>

    <?php // echo $form->field($model, 'diskon_piutang') ?>

    <?php // echo $form->field($model, 'kd_rek_diskon_piutang') ?>

    <?php // echo $form->field($model, 'tidak_terbayar') ?>

    <?php // echo $form->field($model, 'kd_rek_tidak_terbayar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
