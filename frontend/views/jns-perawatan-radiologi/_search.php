<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\JnsPerawatanRadiologiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jns-perawatan-radiologi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_jenis_prw') ?>

    <?= $form->field($model, 'nm_perawatan') ?>

    <?= $form->field($model, 'bagian_rs') ?>

    <?= $form->field($model, 'bhp') ?>

    <?= $form->field($model, 'tarif_perujuk') ?>

    <?php // echo $form->field($model, 'tarif_tindakan_dokter') ?>

    <?php // echo $form->field($model, 'tarif_tindakan_petugas') ?>

    <?php // echo $form->field($model, 'kso') ?>

    <?php // echo $form->field($model, 'menejemen') ?>

    <?php // echo $form->field($model, 'total_byr') ?>

    <?php // echo $form->field($model, 'kd_pj') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'kelas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
