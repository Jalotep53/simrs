<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AuditKamarJenazahSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="audit-kamar-jenazah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'audit1') ?>

    <?= $form->field($model, 'audit2') ?>

    <?= $form->field($model, 'audit3') ?>

    <?= $form->field($model, 'audit4') ?>

    <?php // echo $form->field($model, 'audit5') ?>

    <?php // echo $form->field($model, 'audit6') ?>

    <?php // echo $form->field($model, 'audit7') ?>

    <?php // echo $form->field($model, 'audit8') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
