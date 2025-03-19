<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TelaahFarmasiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="telaah-farmasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_resep') ?>

    <?= $form->field($model, 'resep_identifikasi_pasien') ?>

    <?= $form->field($model, 'resep_ket_identifikasi_pasien') ?>

    <?= $form->field($model, 'resep_tepat_obat') ?>

    <?= $form->field($model, 'resep_ket_tepat_obat') ?>

    <?php // echo $form->field($model, 'resep_tepat_dosis') ?>

    <?php // echo $form->field($model, 'resep_ket_tepat_dosis') ?>

    <?php // echo $form->field($model, 'resep_tepat_cara_pemberian') ?>

    <?php // echo $form->field($model, 'resep_ket_tepat_cara_pemberian') ?>

    <?php // echo $form->field($model, 'resep_tepat_waktu_pemberian') ?>

    <?php // echo $form->field($model, 'resep_ket_tepat_waktu_pemberian') ?>

    <?php // echo $form->field($model, 'resep_ada_tidak_duplikasi_obat') ?>

    <?php // echo $form->field($model, 'resep_ket_ada_tidak_duplikasi_obat') ?>

    <?php // echo $form->field($model, 'resep_interaksi_obat') ?>

    <?php // echo $form->field($model, 'resep_ket_interaksi_obat') ?>

    <?php // echo $form->field($model, 'resep_kontra_indikasi_obat') ?>

    <?php // echo $form->field($model, 'resep_ket_kontra_indikasi_obat') ?>

    <?php // echo $form->field($model, 'obat_tepat_pasien') ?>

    <?php // echo $form->field($model, 'obat_tepat_obat') ?>

    <?php // echo $form->field($model, 'obat_tepat_dosis') ?>

    <?php // echo $form->field($model, 'obat_tepat_cara_pemberian') ?>

    <?php // echo $form->field($model, 'obat_tepat_waktu_pemberian') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
