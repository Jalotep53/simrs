<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MppSkriningSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mpp-skrining-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'param1') ?>

    <?= $form->field($model, 'param2') ?>

    <?= $form->field($model, 'param3') ?>

    <?php // echo $form->field($model, 'param4') ?>

    <?php // echo $form->field($model, 'param5') ?>

    <?php // echo $form->field($model, 'param6') ?>

    <?php // echo $form->field($model, 'param7') ?>

    <?php // echo $form->field($model, 'param8') ?>

    <?php // echo $form->field($model, 'param9') ?>

    <?php // echo $form->field($model, 'param10') ?>

    <?php // echo $form->field($model, 'param11') ?>

    <?php // echo $form->field($model, 'param12') ?>

    <?php // echo $form->field($model, 'param13') ?>

    <?php // echo $form->field($model, 'param14') ?>

    <?php // echo $form->field($model, 'param15') ?>

    <?php // echo $form->field($model, 'param16') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
