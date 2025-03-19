<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatClinicalimpressionSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="satu-sehat-clinicalimpression-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tgl_perawatan') ?>

    <?= $form->field($model, 'jam_rawat') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'id_clinicalimpression') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
