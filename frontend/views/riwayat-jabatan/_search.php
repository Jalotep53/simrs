<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatJabatanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="riwayat-jabatan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'jabatan') ?>

    <?= $form->field($model, 'tmt_pangkat') ?>

    <?= $form->field($model, 'tmt_pangkat_yad') ?>

    <?= $form->field($model, 'pejabat_penetap') ?>

    <?php // echo $form->field($model, 'nomor_sk') ?>

    <?php // echo $form->field($model, 'tgl_sk') ?>

    <?php // echo $form->field($model, 'dasar_peraturan') ?>

    <?php // echo $form->field($model, 'masa_kerja') ?>

    <?php // echo $form->field($model, 'bln_kerja') ?>

    <?php // echo $form->field($model, 'berkas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
