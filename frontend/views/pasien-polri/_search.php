<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PasienPolriSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pasien-polri-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rkm_medis') ?>

    <?= $form->field($model, 'golongan_polri') ?>

    <?= $form->field($model, 'pangkat_polri') ?>

    <?= $form->field($model, 'satuan_polri') ?>

    <?= $form->field($model, 'jabatan_polri') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
