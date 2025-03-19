<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanMedisSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="permintaan-medis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_permintaan') ?>

    <?= $form->field($model, 'kd_bangsal') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'kd_bangsaltujuan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
