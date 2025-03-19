<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ParkirJenis $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="parkir-jenis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_parkir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jns_parkir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'biaya')->textInput() ?>

    <?= $form->field($model, 'jenis')->dropDownList([ 'Harian' => 'Harian', 'Jam' => 'Jam', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
