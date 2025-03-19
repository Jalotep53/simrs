<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AuditBundlePlabsiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="audit-bundle-plabsi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'id_ruang') ?>

    <?= $form->field($model, 'sebelum_melakukan_hand_hygiene') ?>

    <?= $form->field($model, 'menggunakan_apd_lengkap') ?>

    <?= $form->field($model, 'lokasi_pemasangan_sesuai') ?>

    <?php // echo $form->field($model, 'alat_yang_digunakan_steril') ?>

    <?php // echo $form->field($model, 'pembersihan_kulit') ?>

    <?php // echo $form->field($model, 'setelah_melakukan_hand_hygiene') ?>

    <?php // echo $form->field($model, 'perawatan_dressing_infus') ?>

    <?php // echo $form->field($model, 'spoit_yang_digunakan_disposible') ?>

    <?php // echo $form->field($model, 'memberi_tanggal_dan_jam_pemasangan_infus') ?>

    <?php // echo $form->field($model, 'set_infus_setiap_72jam') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
