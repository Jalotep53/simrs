<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingLab $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="satu-sehat-mapping-lab-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_template')->textInput() ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'system')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'display')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sampel_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sampel_system')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sampel_display')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
