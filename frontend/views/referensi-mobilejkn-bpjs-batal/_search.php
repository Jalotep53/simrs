<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ReferensiMobilejknBpjsBatalSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="referensi-mobilejkn-bpjs-batal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rkm_medis') ?>

    <?= $form->field($model, 'no_rawat_batal') ?>

    <?= $form->field($model, 'nomorreferensi') ?>

    <?= $form->field($model, 'tanggalbatal') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'statuskirim') ?>

    <?php // echo $form->field($model, 'nobooking') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
