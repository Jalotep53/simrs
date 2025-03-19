<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgGroupingStage1 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="inacbg-grouping-stage1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_sep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code_cbg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tarif')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
