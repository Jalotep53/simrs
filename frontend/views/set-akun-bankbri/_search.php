<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SetAkunBankbriSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="set-akun-bankbri-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_rek') ?>

    <?= $form->field($model, 'consumer_key') ?>

    <?= $form->field($model, 'consumer_secret') ?>

    <?= $form->field($model, 'institution_code') ?>

    <?= $form->field($model, 'briva_no') ?>

    <?php // echo $form->field($model, 'urlapi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
