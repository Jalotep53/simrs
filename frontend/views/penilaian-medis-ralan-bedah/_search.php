<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanBedahSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-medis-ralan-bedah-search">

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

    <?php // echo $form->field($model, 'kesadaran') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'td') ?>

    <?php // echo $form->field($model, 'nadi') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'rr') ?>

    <?php // echo $form->field($model, 'bb') ?>

    <?php // echo $form->field($model, 'nyeri') ?>

    <?php // echo $form->field($model, 'gcs') ?>

    <?php // echo $form->field($model, 'kepala') ?>

    <?php // echo $form->field($model, 'thoraks') ?>

    <?php // echo $form->field($model, 'abdomen') ?>

    <?php // echo $form->field($model, 'ekstremitas') ?>

    <?php // echo $form->field($model, 'genetalia') ?>

    <?php // echo $form->field($model, 'columna') ?>

    <?php // echo $form->field($model, 'muskulos') ?>

    <?php // echo $form->field($model, 'lainnya') ?>

    <?php // echo $form->field($model, 'ket_lokalis') ?>

    <?php // echo $form->field($model, 'lab') ?>

    <?php // echo $form->field($model, 'rad') ?>

    <?php // echo $form->field($model, 'pemeriksaan') ?>

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
