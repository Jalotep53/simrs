<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanPewsDewasaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pemantauan-pews-dewasa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'parameter_laju_respirasi') ?>

    <?= $form->field($model, 'skor_laju_respirasi') ?>

    <?= $form->field($model, 'parameter_saturasi_oksigen') ?>

    <?php // echo $form->field($model, 'skor_saturasi_oksigen') ?>

    <?php // echo $form->field($model, 'parameter_suplemen_oksigen') ?>

    <?php // echo $form->field($model, 'skor_suplemen_oksigen') ?>

    <?php // echo $form->field($model, 'parameter_tekanan_darah_sistolik') ?>

    <?php // echo $form->field($model, 'skor_tekanan_darah_sistolik') ?>

    <?php // echo $form->field($model, 'parameter_laju_jantung') ?>

    <?php // echo $form->field($model, 'skor_laju_jantung') ?>

    <?php // echo $form->field($model, 'parameter_kesadaran') ?>

    <?php // echo $form->field($model, 'skor_kesadaran') ?>

    <?php // echo $form->field($model, 'parameter_temperatur') ?>

    <?php // echo $form->field($model, 'skor_temperatur') ?>

    <?php // echo $form->field($model, 'skor_total') ?>

    <?php // echo $form->field($model, 'parameter_total') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
