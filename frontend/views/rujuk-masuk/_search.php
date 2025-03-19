<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RujukMasukSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rujuk-masuk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'perujuk') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'no_rujuk') ?>

    <?= $form->field($model, 'jm_perujuk') ?>

    <?php // echo $form->field($model, 'dokter_perujuk') ?>

    <?php // echo $form->field($model, 'kd_penyakit') ?>

    <?php // echo $form->field($model, 'kategori_rujuk') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'no_balasan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
