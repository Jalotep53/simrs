<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanPewsAnakSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pemantauan-pews-anak-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'parameter_perilaku') ?>

    <?= $form->field($model, 'skor_perilaku') ?>

    <?= $form->field($model, 'parameter_crt_atau_warna_kulit') ?>

    <?php // echo $form->field($model, 'skor_crt_atau_warna_kulit') ?>

    <?php // echo $form->field($model, 'parameter_perespirasi') ?>

    <?php // echo $form->field($model, 'skor_perespirasi') ?>

    <?php // echo $form->field($model, 'skor_total') ?>

    <?php // echo $form->field($model, 'parameter_total') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
