<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PasienTniSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pasien-tni-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rkm_medis') ?>

    <?= $form->field($model, 'golongan_tni') ?>

    <?= $form->field($model, 'pangkat_tni') ?>

    <?= $form->field($model, 'satuan_tni') ?>

    <?= $form->field($model, 'jabatan_tni') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
