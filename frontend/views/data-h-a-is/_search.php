<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DataHAIsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-hais-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'ETT') ?>

    <?= $form->field($model, 'CVL') ?>

    <?= $form->field($model, 'IVL') ?>

    <?php // echo $form->field($model, 'UC') ?>

    <?php // echo $form->field($model, 'VAP') ?>

    <?php // echo $form->field($model, 'IAD') ?>

    <?php // echo $form->field($model, 'PLEB') ?>

    <?php // echo $form->field($model, 'ISK') ?>

    <?php // echo $form->field($model, 'ILO') ?>

    <?php // echo $form->field($model, 'HAP') ?>

    <?php // echo $form->field($model, 'Tinea') ?>

    <?php // echo $form->field($model, 'Scabies') ?>

    <?php // echo $form->field($model, 'DEKU') ?>

    <?php // echo $form->field($model, 'SPUTUM') ?>

    <?php // echo $form->field($model, 'DARAH') ?>

    <?php // echo $form->field($model, 'URINE') ?>

    <?php // echo $form->field($model, 'ANTIBIOTIK') ?>

    <?php // echo $form->field($model, 'kd_kamar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
