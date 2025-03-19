<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AuditBundleIadpSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="audit-bundle-iadp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'handhygiene') ?>

    <?= $form->field($model, 'apd') ?>

    <?= $form->field($model, 'skin_antiseptik') ?>

    <?php // echo $form->field($model, 'lokasi_iv') ?>

    <?php // echo $form->field($model, 'perawatan_rutin') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
