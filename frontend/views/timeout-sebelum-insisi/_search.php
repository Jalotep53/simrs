<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TimeoutSebelumInsisiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="timeout-sebelum-insisi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'sncn') ?>

    <?= $form->field($model, 'tindakan') ?>

    <?= $form->field($model, 'kd_dokter_bedah') ?>

    <?php // echo $form->field($model, 'kd_dokter_anestesi') ?>

    <?php // echo $form->field($model, 'verbal_identitas') ?>

    <?php // echo $form->field($model, 'verbal_tindakan') ?>

    <?php // echo $form->field($model, 'verbal_area_insisi') ?>

    <?php // echo $form->field($model, 'penandaan_area_operasi') ?>

    <?php // echo $form->field($model, 'lama_operasi') ?>

    <?php // echo $form->field($model, 'penayangan_radiologi') ?>

    <?php // echo $form->field($model, 'penayangan_ctscan') ?>

    <?php // echo $form->field($model, 'penayangan_mri') ?>

    <?php // echo $form->field($model, 'antibiotik_profilaks') ?>

    <?php // echo $form->field($model, 'nama_antibiotik') ?>

    <?php // echo $form->field($model, 'jam_pemberian') ?>

    <?php // echo $form->field($model, 'antisipasi_kehilangan_darah') ?>

    <?php // echo $form->field($model, 'hal_khusus') ?>

    <?php // echo $form->field($model, 'hal_khusus_diperhatikan') ?>

    <?php // echo $form->field($model, 'tanggal_steril') ?>

    <?php // echo $form->field($model, 'petujuk_sterilisasi') ?>

    <?php // echo $form->field($model, 'verifikasi_preoperatif') ?>

    <?php // echo $form->field($model, 'nip_perawat_ok') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
