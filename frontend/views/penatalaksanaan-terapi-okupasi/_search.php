<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenatalaksanaanTerapiOkupasiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penatalaksanaan-terapi-okupasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'keluhan_utama') ?>

    <?= $form->field($model, 'rpd') ?>

    <?php // echo $form->field($model, 'rps') ?>

    <?php // echo $form->field($model, 'anamnesa_general') ?>

    <?php // echo $form->field($model, 'tanda_vital') ?>

    <?php // echo $form->field($model, 'pemeriksaan_penunjang') ?>

    <?php // echo $form->field($model, 'spesialisasi') ?>

    <?php // echo $form->field($model, 'keterangan_spesialisasi') ?>

    <?php // echo $form->field($model, 'pemeriksaan_okupasi_terapi') ?>

    <?php // echo $form->field($model, 'aset') ?>

    <?php // echo $form->field($model, 'limitasi') ?>

    <?php // echo $form->field($model, 'diagnosa_terapi_okupasi') ?>

    <?php // echo $form->field($model, 'rencana_intervensi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
