<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PeriksaRadiologiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="periksa-radiologi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'kd_jenis_prw') ?>

    <?= $form->field($model, 'tgl_periksa') ?>

    <?= $form->field($model, 'jam') ?>

    <?php // echo $form->field($model, 'dokter_perujuk') ?>

    <?php // echo $form->field($model, 'bagian_rs') ?>

    <?php // echo $form->field($model, 'bhp') ?>

    <?php // echo $form->field($model, 'tarif_perujuk') ?>

    <?php // echo $form->field($model, 'tarif_tindakan_dokter') ?>

    <?php // echo $form->field($model, 'tarif_tindakan_petugas') ?>

    <?php // echo $form->field($model, 'kso') ?>

    <?php // echo $form->field($model, 'menejemen') ?>

    <?php // echo $form->field($model, 'biaya') ?>

    <?php // echo $form->field($model, 'kd_dokter') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'proyeksi') ?>

    <?php // echo $form->field($model, 'kV') ?>

    <?php // echo $form->field($model, 'mAS') ?>

    <?php // echo $form->field($model, 'FFD') ?>

    <?php // echo $form->field($model, 'BSF') ?>

    <?php // echo $form->field($model, 'inak') ?>

    <?php // echo $form->field($model, 'jml_penyinaran') ?>

    <?php // echo $form->field($model, 'dosis') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
