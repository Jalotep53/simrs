<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PcarePendaftaranSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pcare-pendaftaran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tglDaftar') ?>

    <?= $form->field($model, 'no_rkm_medis') ?>

    <?= $form->field($model, 'nm_pasien') ?>

    <?= $form->field($model, 'kdProviderPeserta') ?>

    <?php // echo $form->field($model, 'noKartu') ?>

    <?php // echo $form->field($model, 'kdPoli') ?>

    <?php // echo $form->field($model, 'nmPoli') ?>

    <?php // echo $form->field($model, 'keluhan') ?>

    <?php // echo $form->field($model, 'kunjSakit') ?>

    <?php // echo $form->field($model, 'sistole') ?>

    <?php // echo $form->field($model, 'diastole') ?>

    <?php // echo $form->field($model, 'beratBadan') ?>

    <?php // echo $form->field($model, 'tinggiBadan') ?>

    <?php // echo $form->field($model, 'respRate') ?>

    <?php // echo $form->field($model, 'lingkar_perut') ?>

    <?php // echo $form->field($model, 'heartRate') ?>

    <?php // echo $form->field($model, 'rujukBalik') ?>

    <?php // echo $form->field($model, 'kdTkp') ?>

    <?php // echo $form->field($model, 'noUrut') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
