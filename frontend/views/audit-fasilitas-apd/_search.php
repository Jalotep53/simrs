<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AuditFasilitasApdSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="audit-fasilitas-apd-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'id_ruang') ?>

    <?= $form->field($model, 'audit1') ?>

    <?= $form->field($model, 'audit2') ?>

    <?= $form->field($model, 'audit3') ?>

    <?php // echo $form->field($model, 'audit4') ?>

    <?php // echo $form->field($model, 'audit5') ?>

    <?php // echo $form->field($model, 'audit6') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
