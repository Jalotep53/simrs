<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Ketidakhadiran $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ketidakhadiran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tgl')->textInput() ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'jns')->dropDownList([ 'A' => 'A', 'S' => 'S', 'C' => 'C', 'I' => 'I', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ktg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jml')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
