<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SttsKerja $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="stts-kerja-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stts')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ktg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'indek')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
