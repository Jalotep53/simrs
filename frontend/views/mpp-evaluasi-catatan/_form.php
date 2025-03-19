<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MppEvaluasiCatatan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mpp-evaluasi-catatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_implementasi')->textInput() ?>

    <?= $form->field($model, 'masalah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tinjut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'evaluasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
