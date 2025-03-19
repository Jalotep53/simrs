<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MapingPoliBpjs $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="maping-poli-bpjs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_poli_rs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_poli_bpjs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_poli_bpjs')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
