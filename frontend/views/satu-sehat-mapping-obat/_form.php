<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingObat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="satu-sehat-mapping-obat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_brng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obat_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obat_system')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obat_display')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'form_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'form_system')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'form_display')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numerator_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numerator_system')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'denominator_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'denominator_system')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'route_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'route_system')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'route_display')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
