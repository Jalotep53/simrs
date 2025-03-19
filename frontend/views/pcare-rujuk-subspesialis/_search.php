<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PcareRujukSubspesialisSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pcare-rujuk-subspesialis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'noKunjungan') ?>

    <?= $form->field($model, 'tglDaftar') ?>

    <?= $form->field($model, 'no_rkm_medis') ?>

    <?= $form->field($model, 'nm_pasien') ?>

    <?php // echo $form->field($model, 'noKartu') ?>

    <?php // echo $form->field($model, 'kdPoli') ?>

    <?php // echo $form->field($model, 'nmPoli') ?>

    <?php // echo $form->field($model, 'keluhan') ?>

    <?php // echo $form->field($model, 'kdSadar') ?>

    <?php // echo $form->field($model, 'nmSadar') ?>

    <?php // echo $form->field($model, 'sistole') ?>

    <?php // echo $form->field($model, 'diastole') ?>

    <?php // echo $form->field($model, 'beratBadan') ?>

    <?php // echo $form->field($model, 'tinggiBadan') ?>

    <?php // echo $form->field($model, 'respRate') ?>

    <?php // echo $form->field($model, 'heartRate') ?>

    <?php // echo $form->field($model, 'lingkarPerut') ?>

    <?php // echo $form->field($model, 'terapi') ?>

    <?php // echo $form->field($model, 'kdStatusPulang') ?>

    <?php // echo $form->field($model, 'nmStatusPulang') ?>

    <?php // echo $form->field($model, 'tglPulang') ?>

    <?php // echo $form->field($model, 'kdDokter') ?>

    <?php // echo $form->field($model, 'nmDokter') ?>

    <?php // echo $form->field($model, 'kdDiag1') ?>

    <?php // echo $form->field($model, 'nmDiag1') ?>

    <?php // echo $form->field($model, 'kdDiag2') ?>

    <?php // echo $form->field($model, 'nmDiag2') ?>

    <?php // echo $form->field($model, 'kdDiag3') ?>

    <?php // echo $form->field($model, 'nmDiag3') ?>

    <?php // echo $form->field($model, 'tglEstRujuk') ?>

    <?php // echo $form->field($model, 'kdPPK') ?>

    <?php // echo $form->field($model, 'nmPPK') ?>

    <?php // echo $form->field($model, 'kdSubSpesialis') ?>

    <?php // echo $form->field($model, 'nmSubSpesialis') ?>

    <?php // echo $form->field($model, 'kdSarana') ?>

    <?php // echo $form->field($model, 'nmSarana') ?>

    <?php // echo $form->field($model, 'kdTACC') ?>

    <?php // echo $form->field($model, 'nmTACC') ?>

    <?php // echo $form->field($model, 'alasanTACC') ?>

    <?php // echo $form->field($model, 'KdAlergiMakanan') ?>

    <?php // echo $form->field($model, 'NmAlergiMakanan') ?>

    <?php // echo $form->field($model, 'KdAlergiUdara') ?>

    <?php // echo $form->field($model, 'NmAlergiUdara') ?>

    <?php // echo $form->field($model, 'KdAlergiObat') ?>

    <?php // echo $form->field($model, 'NmAlergiObat') ?>

    <?php // echo $form->field($model, 'KdPrognosa') ?>

    <?php // echo $form->field($model, 'NmPrognosa') ?>

    <?php // echo $form->field($model, 'terapi_non_obat') ?>

    <?php // echo $form->field($model, 'bmhp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
