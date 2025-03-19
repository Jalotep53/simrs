<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SetAkunMandiriSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="set-akun-mandiri-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_rek') ?>

    <?= $form->field($model, 'kd_rek_biaya') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'client_id') ?>

    <?php // echo $form->field($model, 'client_secret') ?>

    <?php // echo $form->field($model, 'kode_rs') ?>

    <?php // echo $form->field($model, 'kode_mcm') ?>

    <?php // echo $form->field($model, 'no_rekening') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
