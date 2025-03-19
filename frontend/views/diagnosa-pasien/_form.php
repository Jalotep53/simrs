<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DiagnosaPasien $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="diagnosa-pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_penyakit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Ralan' => 'Ralan', 'Ranap' => 'Ranap', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'prioritas')->textInput() ?>

    <?= $form->field($model, 'status_penyakit')->dropDownList([ 'Lama' => 'Lama', 'Baru' => 'Baru', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
