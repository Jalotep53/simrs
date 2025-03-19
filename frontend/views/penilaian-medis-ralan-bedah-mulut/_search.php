<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanBedahMulutSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-medis-ralan-bedah-mulut-search">

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

    <?php // echo $form->field($model, 'rpk') ?>

    <?php // echo $form->field($model, 'alergi') ?>

    <?php // echo $form->field($model, 'keadaan') ?>

    <?php // echo $form->field($model, 'kesadaran') ?>

    <?php // echo $form->field($model, 'nyeri') ?>

    <?php // echo $form->field($model, 'td') ?>

    <?php // echo $form->field($model, 'nadi') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'rr') ?>

    <?php // echo $form->field($model, 'bb') ?>

    <?php // echo $form->field($model, 'tb') ?>

    <?php // echo $form->field($model, 'status_nutrisi') ?>

    <?php // echo $form->field($model, 'kulit') ?>

    <?php // echo $form->field($model, 'keterangan_kulit') ?>

    <?php // echo $form->field($model, 'kepala') ?>

    <?php // echo $form->field($model, 'keterangan_kepala') ?>

    <?php // echo $form->field($model, 'mata') ?>

    <?php // echo $form->field($model, 'keterangan_mata') ?>

    <?php // echo $form->field($model, 'leher') ?>

    <?php // echo $form->field($model, 'keterangan_leher') ?>

    <?php // echo $form->field($model, 'kelenjar') ?>

    <?php // echo $form->field($model, 'keterangan_kelenjar') ?>

    <?php // echo $form->field($model, 'dada') ?>

    <?php // echo $form->field($model, 'keterangan_dada') ?>

    <?php // echo $form->field($model, 'perut') ?>

    <?php // echo $form->field($model, 'keterangan_perut') ?>

    <?php // echo $form->field($model, 'ekstremitas') ?>

    <?php // echo $form->field($model, 'keterangan_ekstremitas') ?>

    <?php // echo $form->field($model, 'wajah') ?>

    <?php // echo $form->field($model, 'intra') ?>

    <?php // echo $form->field($model, 'gigigeligi') ?>

    <?php // echo $form->field($model, 'lab') ?>

    <?php // echo $form->field($model, 'rad') ?>

    <?php // echo $form->field($model, 'penunjang') ?>

    <?php // echo $form->field($model, 'diagnosis') ?>

    <?php // echo $form->field($model, 'diagnosis2') ?>

    <?php // echo $form->field($model, 'permasalahan') ?>

    <?php // echo $form->field($model, 'terapi') ?>

    <?php // echo $form->field($model, 'tindakan') ?>

    <?php // echo $form->field($model, 'edukasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
