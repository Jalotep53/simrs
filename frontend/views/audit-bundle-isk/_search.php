<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AuditBundleIskSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="audit-bundle-isk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'id_ruang') ?>

    <?= $form->field($model, 'pemasangan_sesuai_indikasi') ?>

    <?= $form->field($model, 'hand_hygiene') ?>

    <?= $form->field($model, 'menggunakan_apd_yang_tepat') ?>

    <?php // echo $form->field($model, 'pemasangan_menggunakan_alat_steril') ?>

    <?php // echo $form->field($model, 'segera_dilepas_setelah_tidak_diperlukan') ?>

    <?php // echo $form->field($model, 'pengisian_balon_sesuai_petunjuk') ?>

    <?php // echo $form->field($model, 'fiksasi_kateter_dengan_plester') ?>

    <?php // echo $form->field($model, 'urinebag_menggantung_tidak_menyentuh_lantai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
