<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingSuratPriBpjsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bridging-surat-pri-bpjs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'no_kartu') ?>

    <?= $form->field($model, 'tgl_surat') ?>

    <?= $form->field($model, 'no_surat') ?>

    <?= $form->field($model, 'tgl_rencana') ?>

    <?php // echo $form->field($model, 'kd_dokter_bpjs') ?>

    <?php // echo $form->field($model, 'nm_dokter_bpjs') ?>

    <?php // echo $form->field($model, 'kd_poli_bpjs') ?>

    <?php // echo $form->field($model, 'nm_poli_bpjs') ?>

    <?php // echo $form->field($model, 'diagnosa') ?>

    <?php // echo $form->field($model, 'no_sep') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
