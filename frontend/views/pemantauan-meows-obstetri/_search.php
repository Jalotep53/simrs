<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanMeowsObstetriSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pemantauan-meows-obstetri-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'parameter_pernapasan') ?>

    <?= $form->field($model, 'skor_pernapasan') ?>

    <?= $form->field($model, 'parameter_saturasi') ?>

    <?php // echo $form->field($model, 'skor_saturasi') ?>

    <?php // echo $form->field($model, 'parameter_temperatur') ?>

    <?php // echo $form->field($model, 'skor_temperatur') ?>

    <?php // echo $form->field($model, 'parameter_tekanan_darah_sistole') ?>

    <?php // echo $form->field($model, 'skor_tekanan_darah_sistole') ?>

    <?php // echo $form->field($model, 'parameter_tekanan_darah_diastole') ?>

    <?php // echo $form->field($model, 'skor_tekanan_darah_diastole') ?>

    <?php // echo $form->field($model, 'parameter_denyut_jantung') ?>

    <?php // echo $form->field($model, 'skor_denyut_jantung') ?>

    <?php // echo $form->field($model, 'parameter_kesadaran') ?>

    <?php // echo $form->field($model, 'skor_kesadaran') ?>

    <?php // echo $form->field($model, 'parameter_ketuban') ?>

    <?php // echo $form->field($model, 'skor_ketuban') ?>

    <?php // echo $form->field($model, 'parameter_discharge') ?>

    <?php // echo $form->field($model, 'skor_discharge') ?>

    <?php // echo $form->field($model, 'parameter_proteinuria') ?>

    <?php // echo $form->field($model, 'skor_proteinuria') ?>

    <?php // echo $form->field($model, 'skor_total') ?>

    <?php // echo $form->field($model, 'parameter_total') ?>

    <?php // echo $form->field($model, 'code_blue') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
