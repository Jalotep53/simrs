<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Rekening $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rekening-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_rek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_rek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipe')->dropDownList([ 'N' => 'N', 'M' => 'M', 'R' => 'R', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'balance')->dropDownList([ 'D' => 'D', 'K' => 'K', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'level')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
