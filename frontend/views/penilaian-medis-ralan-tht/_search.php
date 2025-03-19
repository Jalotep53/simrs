<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanThtSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-medis-ralan-tht-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'anamnesis') ?>

    <?= $form->field($model, 'hubungan') ?>

    <?php // echo $form->field($model, 'keluhan_utama') ?>

    <?php // echo $form->field($model, 'rps') ?>

    <?php // echo $form->field($model, 'rpd') ?>

    <?php // echo $form->field($model, 'rpo') ?>

    <?php // echo $form->field($model, 'alergi') ?>

    <?php // echo $form->field($model, 'td') ?>

    <?php // echo $form->field($model, 'nadi') ?>

    <?php // echo $form->field($model, 'rr') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'bb') ?>

    <?php // echo $form->field($model, 'tb') ?>

    <?php // echo $form->field($model, 'nyeri') ?>

    <?php // echo $form->field($model, 'status_nutrisi') ?>

    <?php // echo $form->field($model, 'kondisi') ?>

    <?php // echo $form->field($model, 'ket_lokalis') ?>

    <?php // echo $form->field($model, 'lab') ?>

    <?php // echo $form->field($model, 'rad') ?>

    <?php // echo $form->field($model, 'tes_pendengaran') ?>

    <?php // echo $form->field($model, 'penunjang') ?>

    <?php // echo $form->field($model, 'diagnosis') ?>

    <?php // echo $form->field($model, 'diagnosisbanding') ?>

    <?php // echo $form->field($model, 'permasalahan') ?>

    <?php // echo $form->field($model, 'terapi') ?>

    <?php // echo $form->field($model, 'tindakan') ?>

    <?php // echo $form->field($model, 'tatalaksana') ?>

    <?php // echo $form->field($model, 'edukasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
