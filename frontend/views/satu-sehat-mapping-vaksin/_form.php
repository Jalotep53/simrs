<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingVaksin $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="satu-sehat-mapping-vaksin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_brng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vaksin_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vaksin_system')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vaksin_display')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'route_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'route_system')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'route_display')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dose_quantity_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dose_quantity_system')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dose_quantity_unit')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
