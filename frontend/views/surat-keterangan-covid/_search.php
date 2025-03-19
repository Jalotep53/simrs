<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeteranganCovidSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-keterangan-covid-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_surat') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'igm') ?>

    <?php // echo $form->field($model, 'igg') ?>

    <?php // echo $form->field($model, 'sehat') ?>

    <?php // echo $form->field($model, 'tidaksehat') ?>

    <?php // echo $form->field($model, 'berlakumulai') ?>

    <?php // echo $form->field($model, 'berlakuselsai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
