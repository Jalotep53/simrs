<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingSuratKontrolBpjsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bridging-surat-kontrol-bpjs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_sep') ?>

    <?= $form->field($model, 'tgl_surat') ?>

    <?= $form->field($model, 'no_surat') ?>

    <?= $form->field($model, 'tgl_rencana') ?>

    <?= $form->field($model, 'kd_dokter_bpjs') ?>

    <?php // echo $form->field($model, 'nm_dokter_bpjs') ?>

    <?php // echo $form->field($model, 'kd_poli_bpjs') ?>

    <?php // echo $form->field($model, 'nm_poli_bpjs') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
