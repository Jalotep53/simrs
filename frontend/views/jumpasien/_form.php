<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Jumpasien $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jumpasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'thn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bln')->textInput() ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'jml')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
