<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PiutangPasienSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="piutang-pasien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tgl_piutang') ?>

    <?= $form->field($model, 'no_rkm_medis') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'totalpiutang') ?>

    <?php // echo $form->field($model, 'uangmuka') ?>

    <?php // echo $form->field($model, 'sisapiutang') ?>

    <?php // echo $form->field($model, 'tgltempo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
