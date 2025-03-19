<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ResumePasienSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="resume-pasien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'keluhan_utama') ?>

    <?= $form->field($model, 'jalannya_penyakit') ?>

    <?= $form->field($model, 'pemeriksaan_penunjang') ?>

    <?php // echo $form->field($model, 'hasil_laborat') ?>

    <?php // echo $form->field($model, 'diagnosa_utama') ?>

    <?php // echo $form->field($model, 'kd_diagnosa_utama') ?>

    <?php // echo $form->field($model, 'diagnosa_sekunder') ?>

    <?php // echo $form->field($model, 'kd_diagnosa_sekunder') ?>

    <?php // echo $form->field($model, 'diagnosa_sekunder2') ?>

    <?php // echo $form->field($model, 'kd_diagnosa_sekunder2') ?>

    <?php // echo $form->field($model, 'diagnosa_sekunder3') ?>

    <?php // echo $form->field($model, 'kd_diagnosa_sekunder3') ?>

    <?php // echo $form->field($model, 'diagnosa_sekunder4') ?>

    <?php // echo $form->field($model, 'kd_diagnosa_sekunder4') ?>

    <?php // echo $form->field($model, 'prosedur_utama') ?>

    <?php // echo $form->field($model, 'kd_prosedur_utama') ?>

    <?php // echo $form->field($model, 'prosedur_sekunder') ?>

    <?php // echo $form->field($model, 'kd_prosedur_sekunder') ?>

    <?php // echo $form->field($model, 'prosedur_sekunder2') ?>

    <?php // echo $form->field($model, 'kd_prosedur_sekunder2') ?>

    <?php // echo $form->field($model, 'prosedur_sekunder3') ?>

    <?php // echo $form->field($model, 'kd_prosedur_sekunder3') ?>

    <?php // echo $form->field($model, 'kondisi_pulang') ?>

    <?php // echo $form->field($model, 'obat_pulang') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
