<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\JasaLain $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jasa-lain-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'thn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bln')->textInput() ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'bsr_jasa')->textInput() ?>

    <?= $form->field($model, 'ktg')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
