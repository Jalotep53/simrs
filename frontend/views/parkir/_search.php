<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ParkirSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="parkir-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'nomer_kartu') ?>

    <?= $form->field($model, 'kd_parkir') ?>

    <?= $form->field($model, 'no_kendaraan') ?>

    <?= $form->field($model, 'tgl_masuk') ?>

    <?php // echo $form->field($model, 'jam_masuk') ?>

    <?php // echo $form->field($model, 'tgl_keluar') ?>

    <?php // echo $form->field($model, 'jam_keluar') ?>

    <?php // echo $form->field($model, 'lama_parkir') ?>

    <?php // echo $form->field($model, 'ttl_biaya') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
