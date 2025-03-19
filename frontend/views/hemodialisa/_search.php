<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\HemodialisaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="hemodialisa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'lama') ?>

    <?= $form->field($model, 'akses') ?>

    <?php // echo $form->field($model, 'dialist') ?>

    <?php // echo $form->field($model, 'transfusi') ?>

    <?php // echo $form->field($model, 'penarikan') ?>

    <?php // echo $form->field($model, 'qb') ?>

    <?php // echo $form->field($model, 'qd') ?>

    <?php // echo $form->field($model, 'ureum') ?>

    <?php // echo $form->field($model, 'hb') ?>

    <?php // echo $form->field($model, 'hbsag') ?>

    <?php // echo $form->field($model, 'creatinin') ?>

    <?php // echo $form->field($model, 'hiv') ?>

    <?php // echo $form->field($model, 'hcv') ?>

    <?php // echo $form->field($model, 'lain') ?>

    <?php // echo $form->field($model, 'kd_penyakit') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
