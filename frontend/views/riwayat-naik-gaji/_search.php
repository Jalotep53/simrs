<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatNaikGajiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="riwayat-naik-gaji-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pangkatjabatan') ?>

    <?= $form->field($model, 'gapok') ?>

    <?= $form->field($model, 'tmt_berkala') ?>

    <?= $form->field($model, 'tmt_berkala_yad') ?>

    <?php // echo $form->field($model, 'no_sk') ?>

    <?php // echo $form->field($model, 'tgl_sk') ?>

    <?php // echo $form->field($model, 'masa_kerja') ?>

    <?php // echo $form->field($model, 'bulan_kerja') ?>

    <?php // echo $form->field($model, 'berkas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
