<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SetPjlab $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="set-pjlab-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_dokterlab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokterrad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokterhemodialisa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokterutd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokterlabpa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokterlabmb')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
