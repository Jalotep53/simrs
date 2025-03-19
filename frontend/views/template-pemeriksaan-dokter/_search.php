<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePemeriksaanDokterSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="template-pemeriksaan-dokter-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_template') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'keluhan') ?>

    <?= $form->field($model, 'pemeriksaan') ?>

    <?= $form->field($model, 'penilaian') ?>

    <?php // echo $form->field($model, 'rencana') ?>

    <?php // echo $form->field($model, 'instruksi') ?>

    <?php // echo $form->field($model, 'evaluasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
