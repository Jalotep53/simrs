<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SkdpBpjsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skdp-bpjs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tahun') ?>

    <?= $form->field($model, 'no_rkm_medis') ?>

    <?= $form->field($model, 'diagnosa') ?>

    <?= $form->field($model, 'terapi') ?>

    <?= $form->field($model, 'alasan1') ?>

    <?php // echo $form->field($model, 'alasan2') ?>

    <?php // echo $form->field($model, 'rtl1') ?>

    <?php // echo $form->field($model, 'rtl2') ?>

    <?php // echo $form->field($model, 'tanggal_datang') ?>

    <?php // echo $form->field($model, 'tanggal_rujukan') ?>

    <?php // echo $form->field($model, 'no_antrian') ?>

    <?php // echo $form->field($model, 'kd_dokter') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
