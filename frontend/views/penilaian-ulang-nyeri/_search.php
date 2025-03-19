<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianUlangNyeriSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-ulang-nyeri-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'nyeri') ?>

    <?= $form->field($model, 'provokes') ?>

    <?= $form->field($model, 'ket_provokes') ?>

    <?php // echo $form->field($model, 'quality') ?>

    <?php // echo $form->field($model, 'ket_quality') ?>

    <?php // echo $form->field($model, 'lokasi') ?>

    <?php // echo $form->field($model, 'menyebar') ?>

    <?php // echo $form->field($model, 'skala_nyeri') ?>

    <?php // echo $form->field($model, 'durasi') ?>

    <?php // echo $form->field($model, 'nyeri_hilang') ?>

    <?php // echo $form->field($model, 'ket_nyeri') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
