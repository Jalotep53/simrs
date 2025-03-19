<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MapingPoliklinikPcare $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="maping-poliklinik-pcare-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_poli_rs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_poli_pcare')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_poli_pcare')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
