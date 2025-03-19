<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatServicerequestRadiologi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="satu-sehat-servicerequest-radiologi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'noorder')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_jenis_prw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_servicerequest')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
