<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\UtdDonorSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="utd-donor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_donor') ?>

    <?= $form->field($model, 'no_pendonor') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'dinas') ?>

    <?= $form->field($model, 'tensi') ?>

    <?php // echo $form->field($model, 'no_bag') ?>

    <?php // echo $form->field($model, 'jenis_bag') ?>

    <?php // echo $form->field($model, 'jenis_donor') ?>

    <?php // echo $form->field($model, 'tempat_aftap') ?>

    <?php // echo $form->field($model, 'petugas_aftap') ?>

    <?php // echo $form->field($model, 'hbsag') ?>

    <?php // echo $form->field($model, 'hcv') ?>

    <?php // echo $form->field($model, 'hiv') ?>

    <?php // echo $form->field($model, 'spilis') ?>

    <?php // echo $form->field($model, 'malaria') ?>

    <?php // echo $form->field($model, 'petugas_u_saring') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
