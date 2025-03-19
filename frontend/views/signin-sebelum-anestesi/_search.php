<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SigninSebelumAnestesiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="signin-sebelum-anestesi-search">

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

    <?php // echo $form->field($model, 'identitas') ?>

    <?php // echo $form->field($model, 'penandaan_area_operasi') ?>

    <?php // echo $form->field($model, 'alergi') ?>

    <?php // echo $form->field($model, 'resiko_aspirasi') ?>

    <?php // echo $form->field($model, 'resiko_aspirasi_rencana_antisipasi') ?>

    <?php // echo $form->field($model, 'resiko_kehilangan_darah') ?>

    <?php // echo $form->field($model, 'resiko_kehilangan_darah_line') ?>

    <?php // echo $form->field($model, 'resiko_kehilangan_darah_rencana_antisipasi') ?>

    <?php // echo $form->field($model, 'kesiapan_alat_obat_anestesi') ?>

    <?php // echo $form->field($model, 'kesiapan_alat_obat_anestesi_rencana_antisipasi') ?>

    <?php // echo $form->field($model, 'nip_perawat_ok') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
