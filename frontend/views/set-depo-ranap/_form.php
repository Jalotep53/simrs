<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SetDepoRanap $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="set-depo-ranap-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_bangsal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_depo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
