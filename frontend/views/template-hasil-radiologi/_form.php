<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TemplateHasilRadiologi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="template-hasil-radiologi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_template')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pemeriksaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'template_hasil_radiologi')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
