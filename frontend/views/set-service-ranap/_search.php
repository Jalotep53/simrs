<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SetServiceRanapSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="set-service-ranap-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nama_service') ?>

    <?= $form->field($model, 'besar') ?>

    <?= $form->field($model, 'laborat') ?>

    <?= $form->field($model, 'radiologi') ?>

    <?= $form->field($model, 'operasi') ?>

    <?php // echo $form->field($model, 'obat') ?>

    <?php // echo $form->field($model, 'ranap_dokter') ?>

    <?php // echo $form->field($model, 'ranap_paramedis') ?>

    <?php // echo $form->field($model, 'ralan_dokter') ?>

    <?php // echo $form->field($model, 'ralan_paramedis') ?>

    <?php // echo $form->field($model, 'tambahan') ?>

    <?php // echo $form->field($model, 'potongan') ?>

    <?php // echo $form->field($model, 'kamar') ?>

    <?php // echo $form->field($model, 'registrasi') ?>

    <?php // echo $form->field($model, 'harian') ?>

    <?php // echo $form->field($model, 'retur_Obat') ?>

    <?php // echo $form->field($model, 'resep_Pulang') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
