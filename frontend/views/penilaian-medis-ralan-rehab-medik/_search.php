<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanRehabMedikSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-medis-ralan-rehab-medik-search">

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

    <?php // echo $form->field($model, 'alergi') ?>

    <?php // echo $form->field($model, 'kesadaran') ?>

    <?php // echo $form->field($model, 'nyeri') ?>

    <?php // echo $form->field($model, 'skala_nyeri') ?>

    <?php // echo $form->field($model, 'td') ?>

    <?php // echo $form->field($model, 'nadi') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'rr') ?>

    <?php // echo $form->field($model, 'bb') ?>

    <?php // echo $form->field($model, 'kepala') ?>

    <?php // echo $form->field($model, 'keterangan_kepala') ?>

    <?php // echo $form->field($model, 'thoraks') ?>

    <?php // echo $form->field($model, 'keterangan_thoraks') ?>

    <?php // echo $form->field($model, 'abdomen') ?>

    <?php // echo $form->field($model, 'keterangan_abdomen') ?>

    <?php // echo $form->field($model, 'ekstremitas') ?>

    <?php // echo $form->field($model, 'keterangan_ekstremitas') ?>

    <?php // echo $form->field($model, 'columna') ?>

    <?php // echo $form->field($model, 'keterangan_columna') ?>

    <?php // echo $form->field($model, 'muskulos') ?>

    <?php // echo $form->field($model, 'keterangan_muskulos') ?>

    <?php // echo $form->field($model, 'lainnya') ?>

    <?php // echo $form->field($model, 'resiko_jatuh') ?>

    <?php // echo $form->field($model, 'resiko_nutrisional') ?>

    <?php // echo $form->field($model, 'kebutuhan_fungsional') ?>

    <?php // echo $form->field($model, 'diagnosa_medis') ?>

    <?php // echo $form->field($model, 'diagnosa_fungsi') ?>

    <?php // echo $form->field($model, 'penunjang_lain') ?>

    <?php // echo $form->field($model, 'fisio') ?>

    <?php // echo $form->field($model, 'okupasi') ?>

    <?php // echo $form->field($model, 'wicara') ?>

    <?php // echo $form->field($model, 'akupuntur') ?>

    <?php // echo $form->field($model, 'tatalain') ?>

    <?php // echo $form->field($model, 'frekuensi_terapi') ?>

    <?php // echo $form->field($model, 'fisioterapi') ?>

    <?php // echo $form->field($model, 'terapi_okupasi') ?>

    <?php // echo $form->field($model, 'terapi_wicara') ?>

    <?php // echo $form->field($model, 'terapi_akupuntur') ?>

    <?php // echo $form->field($model, 'terapi_lainnya') ?>

    <?php // echo $form->field($model, 'edukasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
