<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AuditKepatuhanApdSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="audit-kepatuhan-apd-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'tindakan') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'topi') ?>

    <?= $form->field($model, 'masker') ?>

    <?php // echo $form->field($model, 'kacamata') ?>

    <?php // echo $form->field($model, 'sarungtangan') ?>

    <?php // echo $form->field($model, 'apron') ?>

    <?php // echo $form->field($model, 'sepatu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
