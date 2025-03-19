<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\JawabanPioApotekerSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jawaban-pio-apoteker-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_permintaan') ?>

    <?= $form->field($model, 'tanggal_jawab') ?>

    <?= $form->field($model, 'metode') ?>

    <?= $form->field($model, 'penyampaian_jawaban') ?>

    <?= $form->field($model, 'jawaban') ?>

    <?php // echo $form->field($model, 'referensi') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
