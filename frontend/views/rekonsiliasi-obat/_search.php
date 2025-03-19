<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RekonsiliasiObatSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rekonsiliasi-obat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rekonsiliasi') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal_wawancara') ?>

    <?= $form->field($model, 'rekonsiliasi_obat_saat') ?>

    <?= $form->field($model, 'alergi_obat') ?>

    <?php // echo $form->field($model, 'manifestasi_alergi') ?>

    <?php // echo $form->field($model, 'dampak_alergi') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
