<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PasienMatiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pasien-mati-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'jam') ?>

    <?= $form->field($model, 'no_rkm_medis') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?= $form->field($model, 'temp_meninggal') ?>

    <?php // echo $form->field($model, 'icd1') ?>

    <?php // echo $form->field($model, 'icd2') ?>

    <?php // echo $form->field($model, 'icd3') ?>

    <?php // echo $form->field($model, 'icd4') ?>

    <?php // echo $form->field($model, 'kd_dokter') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
