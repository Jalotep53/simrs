<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AuditBundleVapSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="audit-bundle-vap-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'id_ruang') ?>

    <?= $form->field($model, 'posisi_kepala') ?>

    <?= $form->field($model, 'pengkajian_setiap_hari') ?>

    <?= $form->field($model, 'hand_hygiene') ?>

    <?php // echo $form->field($model, 'oral_hygiene') ?>

    <?php // echo $form->field($model, 'suction_manajemen_sekresi') ?>

    <?php // echo $form->field($model, 'profilaksis_peptic_ulcer') ?>

    <?php // echo $form->field($model, 'dvt_profiklasisi') ?>

    <?php // echo $form->field($model, 'penggunaan_apd_sesuai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
