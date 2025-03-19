<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PasienBayiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pasien-bayi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rkm_medis') ?>

    <?= $form->field($model, 'umur_ibu') ?>

    <?= $form->field($model, 'nama_ayah') ?>

    <?= $form->field($model, 'umur_ayah') ?>

    <?= $form->field($model, 'berat_badan') ?>

    <?php // echo $form->field($model, 'panjang_badan') ?>

    <?php // echo $form->field($model, 'lingkar_kepala') ?>

    <?php // echo $form->field($model, 'proses_lahir') ?>

    <?php // echo $form->field($model, 'anakke') ?>

    <?php // echo $form->field($model, 'jam_lahir') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'diagnosa') ?>

    <?php // echo $form->field($model, 'penyulit_kehamilan') ?>

    <?php // echo $form->field($model, 'ketuban') ?>

    <?php // echo $form->field($model, 'lingkar_perut') ?>

    <?php // echo $form->field($model, 'lingkar_dada') ?>

    <?php // echo $form->field($model, 'penolong') ?>

    <?php // echo $form->field($model, 'no_skl') ?>

    <?php // echo $form->field($model, 'g') ?>

    <?php // echo $form->field($model, 'p') ?>

    <?php // echo $form->field($model, 'a') ?>

    <?php // echo $form->field($model, 'f1') ?>

    <?php // echo $form->field($model, 'u1') ?>

    <?php // echo $form->field($model, 't1') ?>

    <?php // echo $form->field($model, 'r1') ?>

    <?php // echo $form->field($model, 'w1') ?>

    <?php // echo $form->field($model, 'n1') ?>

    <?php // echo $form->field($model, 'f5') ?>

    <?php // echo $form->field($model, 'u5') ?>

    <?php // echo $form->field($model, 't5') ?>

    <?php // echo $form->field($model, 'r5') ?>

    <?php // echo $form->field($model, 'w5') ?>

    <?php // echo $form->field($model, 'n5') ?>

    <?php // echo $form->field($model, 'f10') ?>

    <?php // echo $form->field($model, 'u10') ?>

    <?php // echo $form->field($model, 't10') ?>

    <?php // echo $form->field($model, 'r10') ?>

    <?php // echo $form->field($model, 'w10') ?>

    <?php // echo $form->field($model, 'n10') ?>

    <?php // echo $form->field($model, 'resusitas') ?>

    <?php // echo $form->field($model, 'obat_diberikan') ?>

    <?php // echo $form->field($model, 'mikasi') ?>

    <?php // echo $form->field($model, 'mikonium') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
