<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AuditPembuanganBendaTajamSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="audit-pembuangan-benda-tajam-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'id_ruang') ?>

    <?= $form->field($model, 'setiap_injeksi_needle_langsung_dimasukkan_safety_box') ?>

    <?= $form->field($model, 'setiap_pemasangan_iv_canula_langsung_dimasukkan_safety_box') ?>

    <?= $form->field($model, 'setiap_benda_tajam_jarum_dimasukkan_safety_box') ?>

    <?php // echo $form->field($model, 'safety_box_tigaperempat_diganti') ?>

    <?php // echo $form->field($model, 'safety_box_keadaan_bersih') ?>

    <?php // echo $form->field($model, 'saftey_box_tertutup_setelah_digunakan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
